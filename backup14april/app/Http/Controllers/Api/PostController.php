<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Http\Controllers\Api;

use App\Events\PostWasVisited;
use App\Helpers\Arr;
use App\Http\Controllers\Api\Auth\Traits\VerificationTrait;
use App\Http\Controllers\Api\Payment\SingleStepPaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\SingleStep\UpdateSingleStepFormTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\StoreTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\MakePaymentTrait;
use App\Http\Controllers\Api\Post\SearchTrait;
use App\Http\Controllers\Api\Post\ShowTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\MultiSteps\UpdateMultiStepsFormTrait;
use App\Http\Controllers\Api\Post\Traits\AutoRegistrationTrait;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\PostResource;
use App\Notifications\PostDeleted;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;

/**
 * @group Posts
 */
class PostController extends BaseController
{
	use SearchTrait, VerificationTrait, ShowTrait;
	use AutoRegistrationTrait;
	use StoreTrait;
	use UpdateMultiStepsFormTrait;
	use UpdateSingleStepFormTrait, SingleStepPaymentTrait;
	use SingleStepPaymentTrait, MakePaymentTrait;
	
	// => StoreTrait & UpdateSingleStepFormTrait
	
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			//...
			
			return $next($request);
		});
	}
	
	/**
	 * List posts
	 *
	 * @queryParam embed string Comma-separated list of the post relationships for Eager Loading - Possible values: user,category,postType,city,latestPayment,savedByLoggedUser,pictures.Example: null
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at. Example: created_at
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return EntityCollection
	 */
	public function index()
	{
		return $this->getPosts();
	}
	
	/**
	 * Get post
	 *
	 * @queryParam unactivated boolean Include or not unactivated entries. Example: true
	 * @queryParam noCache boolean Disable the cache for this request. Example: false
	 * @queryParam embed string Comma-separated list of the post relationships for Eager Loading - Possible values: user,category,postType,city,latestPayment,savedByLoggedUser. Example: user,postType
	 * @queryParam detailed boolean Allow to get the post's details with all its relationships (No need to set the 'embed' parameter). Example: false
	 *
	 * @urlParam id int required The post's ID. Example: 2
	 *
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		$isDetailed = (request()->filled('detailed') && (int)request()->get('detailed') == 1);
		
		if ($isDetailed) {
			
			$embed = ['user', 'category', 'postType', 'city', 'latestPayment', 'savedByLoggedUser', 'pictures'];
			request()->request->add(['embed' => implode(',', $embed)]);
			
			return $this->showPost($id);
			
		} else {
			$isUnactivatedIncluded = (request()->filled('unactivated') && (int)request()->get('unactivated') == 1);
			
			// Cache ID part related to unactivated listings
			$withoutGlobalScopes = '';
			if ($isUnactivatedIncluded) {
				$withoutGlobalScopes = '.withoutGlobalScopes';
			}
			
			// Cache ID part related to embed relationships/tables
			$embedKey = '';
			if (request()->filled('embed')) {
				$embedKey = str_replace([' ', ','], ['', '.'], request()->get('embed'));
				$embedKey = '.with.' . $embedKey;
			}
			
			// Cache control
			$noCache = (request()->filled('noCache') && (int)request()->get('noCache') == 1);
			$cacheDriver = config('cache.default');
			$cacheExpiration = $this->cacheExpiration;
			if ($noCache) {
				config()->set('cache.default', 'array');
				$cacheExpiration = '-1';
			}
			
			$cacheId = 'post' . $withoutGlobalScopes . $embedKey . '.' . $id . '.' . config('app.locale');
			$post = Cache::remember($cacheId, $cacheExpiration, function () use ($isUnactivatedIncluded, $id) {
				$post = Post::query();
				
				$embed = explode(',', request()->get('embed'));
				
				if (in_array('country', $embed)) {
					$post->with('country');
				}
				if (in_array('user', $embed)) {
					$post->with('user');
				}
				if (in_array('category', $embed)) {
					$post->with('category');
				}
				if (in_array('postType', $embed)) {
					$post->with('postType');
				}
				if (in_array('city', $embed)) {
					$post->with('city');
				}
				if (in_array('latestPayment', $embed)) {
					$post->with('latestPayment');
				}
				if (in_array('savedByLoggedUser', $embed)) {
					$post->with('savedByLoggedUser');
				}
				
				return $post->find($id);
			});
			
			// Reset caching parameters
			config()->set('cache.default', $cacheDriver);
			
			abort_if(empty($post), 404, t('Post not found'));
			
			// Increment Post visits counter
			Event::dispatch(new PostWasVisited($post));
			
			$resource = new PostResource($post);
			
			return $this->respondWithResource($resource);
		}
	}
	
	/**
	 * Store post
	 *
	 * For both types of post's creation (Single step or Multi steps).
	 * Note: The field 'admin_code' is only available when the post's country's 'admin_type' column is set to 1 or 2 and the 'admin_field_active' column is set to 1.
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @bodyParam country_code string required The code of the user's country. Example: US
	 *
	 * @bodyParam company_id int The job company's ID.
	 * @bodyParam company[].name string required The company's name (required when 'company_id' is not set). Example: Foo Inc
	 * @bodyParam company[].logo file The company's logo (available when 'company_id' is not set).
	 * @bodyParam company[].description string required The company's description (required when 'company_id' is not set). Example: Nostrum quia est aut quas.
	 *
	 * @bodyParam category_id int required The category's ID. Example: 1
	 * @bodyParam post_type_id int The post type's ID. Example: 1
	 * @bodyParam title string required The post's title. Example: John Doe
	 * @bodyParam description string required The post's description. Example: Beatae placeat atque tempore consequatur animi magni omnis.
	 * @bodyParam contact_name string required The post's author name. Example: John Doe
	 * @bodyParam email string The post's author email address (required if mobile phone number doesn't exist). Example: john.doe@domain.tld
	 * @bodyParam phone string The post's author mobile number (required if email doesn't exist). Example: +17656766467
	 * @bodyParam admin_code string The administrative division's code. Example: 0
	 * @bodyParam city_id int required The city's ID.
	 * @bodyParam price int required The price. Example: 5000
	 * @bodyParam negotiable boolean Negotiable price or no. Example: 0
	 * @bodyParam phone_hidden boolean Mobile phone number will be hidden in public or no. Example: 0
	 * @bodyParam ip_addr string The post's author IP address.
	 * @bodyParam accept_marketing_offers boolean Accept to receive marketing offers or no.
	 * @bodyParam is_permanent boolean Is it permanent post or no.
	 * @bodyParam tags string Comma-separated tags list. Example: car,automotive,tesla,cyber,truck
	 * @bodyParam accept_terms boolean required Accept the website terms and conditions. Example: 0
	 * @bodyParam package_id int required The package's ID. Example: 2
	 * @bodyParam payment_method_id int The payment method's ID (required when the selected package's price is > 0). Example: 5
	 * @bodyParam captcha_key string Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
	 *
	 * @param \App\Http\Requests\PostRequest $request
	 * @return mixed
	 * @throws \Exception
	 */
	public function store(PostRequest $request)
	{
		$this->paymentSettings();
		
		return $this->storePost($request);
	}
	
	/**
	 * Update post
	 *
	 * Note: The fields 'pictures', 'package_id' and 'payment_method_id' are only available with the single step post edition.
	 * The field 'admin_code' is only available when the post's country's 'admin_type' column is set to 1 or 2 and the 'admin_field_active' column is set to 1.
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @bodyParam country_code string required The code of the user's country. Example: US
	 *
	 * @bodyParam company_id int The job company's ID.
	 * @bodyParam company[].name string required The company's name (required when 'company_id' is not set). Example: Foo Inc
	 * @bodyParam company[].logo file The company's logo (available when 'company_id' is not set).
	 * @bodyParam company[].description string required The company's description (required when 'company_id' is not set). Example: Nostrum quia est aut quas.
	 *
	 * @bodyParam category_id int required The category's ID. Example: 1
	 * @bodyParam post_type_id int The post type's ID. Example: 1
	 * @bodyParam title string required The post's title. Example: John Doe
	 * @bodyParam description string required The post's description. Example: Beatae placeat atque tempore consequatur animi magni omnis.
	 * @bodyParam contact_name string required The post's author name. Example: John Doe
	 * @bodyParam email string The post's author email address (required if mobile phone number doesn't exist). Example: john.doe@domain.tld
	 * @bodyParam phone string The post's author mobile number (required if email doesn't exist). Example: +17656766467
	 * @bodyParam admin_code string The administrative division's code. Example: 0
	 * @bodyParam city_id int required The city's ID.
	 * @bodyParam price int required The price. Example: 5000
	 * @bodyParam negotiable boolean Negotiable price or no. Example: 0
	 * @bodyParam phone_hidden boolean Mobile phone number will be hidden in public or no. Example: 0
	 * @bodyParam ip_addr string The post's author IP address.
	 * @bodyParam accept_marketing_offers boolean Accept to receive marketing offers or no.
	 * @bodyParam is_permanent boolean Is it permanent post or no.
	 * @bodyParam tags string Comma-separated tags list. Example: car,automotive,tesla,cyber,truck
	 * @bodyParam accept_terms boolean required Accept the website terms and conditions. Example: 0
	 *
	 * @bodyParam package_id int required The package's ID. Example: 2
	 * @bodyParam payment_method_id int The payment method's ID (required when the selected package's price is > 0). Example: 5
	 *
	 * @param $id
	 * @param PostRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update($id, PostRequest $request)
	{
		// Single Step Form
		if (config('settings.single.publication_form_type') == '2') {
			$this->paymentSettings();
			
			return $this->updateSingleStepForm($id, $request);
		}
		
		return $this->updateMultiStepsForm($id, $request);
	}
	
	/**
	 * Delete post(s)
	 *
	 * @authenticated
	 * @header Authorization Bearer {YOUR_AUTH_TOKEN}
	 *
	 * @urlParam ids string required The ID or comma-separated IDs list of post(s).
	 *
	 * @param $ids
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function destroy($ids)
	{
		if (!auth('sanctum')->check()) {
			return $this->respondUnAuthorized();
		}
		
		$user = auth('sanctum')->user();
		
		$data = [
			'success' => false,
			'message' => t('no_deletion_is_done'),
			'result'  => null,
		];
		
		$extra = [];
		
		// Get Entries ID (IDs separated by comma accepted)
		$ids = explode(',', $ids);
		
		// Delete
		$res = false;
		foreach ($ids as $postId) {
			$post = Post::query()
				->withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
				->where('user_id', $user->id)
				->where('id', $postId)
				->first();
			
			if (!empty($post)) {
				$tmpPost = Arr::toObject($post->toArray());
				
				// Delete Entry
				$res = $post->delete();
				
				// Send an Email confirmation
				if (!empty($tmpPost->email)) {
					if (config('settings.mail.confirmation') == 1) {
						try {
							Notification::route('mail', $tmpPost->email)->notify(new PostDeleted($tmpPost));
						} catch (\Throwable $e) {
							$extra['mail']['success'] = false;
							$extra['mail']['message'] = $e->getMessage();
						}
					}
				}
			}
		}
		
		// Confirmation
		if ($res) {
			$data['success'] = true;
			
			$count = count($ids);
			if ($count > 1) {
				$data['message'] = t('x entities has been deleted successfully', ['entities' => t('ads'), 'count' => $count]);
			} else {
				$data['message'] = t('1 entity has been deleted successfully', ['entity' => t('ad')]);
			}
		}
		
		$data['extra'] = $extra;
		
		return $this->apiResponse($data);
	}
}

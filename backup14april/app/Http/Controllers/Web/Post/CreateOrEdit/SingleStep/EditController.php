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

namespace App\Http\Controllers\Web\Post\CreateOrEdit\SingleStep;

use App\Helpers\UrlGen;
use App\Http\Controllers\Api\Payment\SingleStepPaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\MakePaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\RequiredInfoTrait;
use App\Http\Controllers\Web\Auth\Traits\VerificationTrait;
use App\Http\Requests\PostRequest;
use App\Models\Company;
use App\Models\Post;
use App\Models\PostType;
use App\Models\Category;
use App\Models\Package;
use App\Models\SalaryType;
use App\Http\Controllers\Web\FrontController;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\StrictActiveScope;
use App\Models\Scopes\VerifiedScope;
use Torann\LaravelMetaTags\Facades\MetaTag;

class EditController extends FrontController
{
	use VerificationTrait;
	use RequiredInfoTrait;
	use SingleStepPaymentTrait, MakePaymentTrait;
	
	public $request;
	public $data;
	
	// Payment's properties
	public $msg = [];
	public $uri = [];
	public $packages;
	public $paymentMethods;
	
	/**
	 * EditController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			$this->commonQueries();
			
			return $next($request);
		});
	}
	
	/**
	 * Common Queries
	 */
	public function commonQueries()
	{
		$this->setPostFormRequiredInfo();
		$this->paymentSettings();
		
		// References
		$data = [];
		
		// Get Categories
		$data['categories'] = Category::where(function ($query) {
			$query->where('parent_id', 0)->orWhereNull('parent_id');
		})->with(['children'])->orderBy('lft')->get();
		view()->share('categories', $data['categories']);
		
		// Get Post Types
		$data['postTypes'] = PostType::query()->get();
		view()->share('postTypes', $data['postTypes']);
		
		// Get Salary Types
		$data['salaryTypes'] = SalaryType::query()->get();
		view()->share('salaryTypes', $data['salaryTypes']);
		
		// Get the User's Company
		if (auth()->check()) {
			$data['companies'] = Company::where('user_id', auth()->user()->id)->get();
			view()->share('companies', $data['companies']);
		}
		
		// Save common's data
		$this->data = $data;
	}
	
	/**
	 * Show the form the create a new ad post.
	 *
	 * @param $postId
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function getForm($postId)
	{
		// Check if the form type is 'Multi Steps Form', and make redirection to it (permanently).
		if (config('settings.single.publication_form_type') == '1') {
			$url = url('posts/' . $postId . '/edit');
			
			return redirect($url, 301)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		$data = [];
		
		// Get Post
		$post = Post::currentCountry()->with([
			'latestPayment' => function ($builder) {
				$builder->with(['package'])->withoutGlobalScope(StrictActiveScope::class);
			},
		])
			->withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
			->where('user_id', auth()->user()->id)
			->where('id', $postId)
			->first();
		
		if (empty($post)) {
			abort(404);
		}
		
		view()->share('post', $post);
		
		// Share the Post's Latest Payment Info (If exists)
		$this->getCurrentPaymentInfo($post);
		
		// Get the Post's Company
		if (!empty($post->company_id)) {
			$data['postCompany'] = Company::find($post->company_id);
			view()->share('postCompany', $data['postCompany']);
		}
		
		// Get the Post's Administrative Division
		if (config('country.admin_field_active') == 1 && in_array(config('country.admin_type'), ['1', '2'])) {
			if (!empty($post->city)) {
				$adminType = config('country.admin_type');
				$adminModel = '\App\Models\SubAdmin' . $adminType;
				
				// Get the City's Administrative Division
				$admin = $adminModel::where('code', $post->city->{'subadmin' . $adminType . '_code'})->first();
				if (!empty($admin)) {
					view()->share('admin', $admin);
				}
			}
		}
		
		// Meta Tags
		MetaTag::set('title', t('update_my_ad'));
		MetaTag::set('description', t('update_my_ad'));
		
		return appView('post.createOrEdit.singleStep.edit', $data);
	}
	
	/**
	 * Update ad post.
	 *
	 * @param $postId
	 * @param PostRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postForm($postId, PostRequest $request)
	{
		// Call API endpoint
		$endpoint = '/posts/' . $postId;
		$data = makeApiRequest('put', $endpoint, $request->all(), [], true);
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			flash($message)->error();
			
			if (data_get($data, 'extra.previousUrl')) {
				return redirect(data_get($data, 'extra.previousUrl'))->withInput($request->except('company.logo'));
			} else {
				return redirect()->back()->withInput($request->except('company.logo'));
			}
		}
		
		// Notification Message
		if (data_get($data, 'success')) {
			flash($message)->success();
		} else {
			flash($message)->error();
		}
		
		// Get the next URL
		$nextUrl = UrlGen::postUri(data_get($data, 'result'));
		
		// Check if the payment process has been triggered
		// NOTE: Payment bypass email or phone verification
		if ($request->filled('package_id') && $request->filled('payment_method_id')) {
			$postId = data_get($data, 'result.id', 0);
			$post = Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
				->where('id', $postId)->with([
					'latestPayment' => function ($builder) { $builder->with(['package']); },
				])->first();
			if (!empty($post)) {
				// Make Payment (If needed) - By not using REST API
				// Check if the selected Package has been already paid for this Post
				$alreadyPaidPackage = false;
				if (!empty($post->latestPayment)) {
					if ($post->latestPayment->package_id == $request->input('package_id')) {
						$alreadyPaidPackage = true;
					}
				}
				// Check if Payment is required
				$package = Package::find($request->input('package_id'));
				if (!empty($package)) {
					if ($package->price > 0 && $request->filled('payment_method_id') && !$alreadyPaidPackage) {
						// Get the next URL
						$nextUrl = $this->apiUri['nextUrl'];
						$previousUrl = $this->apiUri['previousUrl'];
						
						// Send the Payment
						$paymentData = $this->sendPayment($request, $post);
						
						// Check if a Payment has been sent
						if (data_get($paymentData, 'extra.payment')) {
							$paymentMessage = data_get($paymentData, 'extra.payment.message');
							if (data_get($paymentData, 'extra.payment.success')) {
								flash($paymentMessage)->success();
								
								if (data_get($paymentData, 'extra.nextUrl')) {
									$nextUrl = data_get($paymentData, 'extra.nextUrl');
								}
								
								return redirect($nextUrl);
							} else {
								flash($paymentMessage)->error();
								
								if (data_get($paymentData, 'extra.previousUrl')) {
									$previousUrl = data_get($paymentData, 'extra.previousUrl');
								}
								
								return redirect($previousUrl)->withInput($request->except('company.logo'));
							}
						}
					}
				}
			}
		}
		
		// Get Post Resource
		$post = data_get($data, 'result');
		
		if (
			data_get($data, 'extra.sendEmailVerification.emailVerificationSent')
			|| data_get($data, 'extra.sendPhoneVerification.phoneVerificationSent')
		) {
			session()->put('itemNextUrl', $nextUrl);
			
			if (data_get($data, 'extra.sendEmailVerification.emailVerificationSent')) {
				session()->put('emailVerificationSent', true);
				
				// Show the Re-send link
				$this->showReSendVerificationEmailLink($post, 'posts');
			}
			
			if (data_get($data, 'extra.sendPhoneVerification.phoneVerificationSent')) {
				session()->put('phoneVerificationSent', true);
				
				// Show the Re-send link
				$this->showReSendVerificationSmsLink($post, 'posts');
				
				// Go to Phone Number verification
				$nextUrl = url('posts/verify/phone/');
			}
		}
		
		// Mail Notification Message
		if (data_get($data, 'extra.mail.message')) {
			$mailMessage = data_get($data, 'extra.mail.message');
			if (data_get($data, 'extra.mail.success')) {
				flash($mailMessage)->success();
			} else {
				flash($mailMessage)->error();
			}
		}
		
		return redirect($nextUrl);
	}
}

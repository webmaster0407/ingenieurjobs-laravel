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

namespace App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps;

use App\Helpers\UrlGen;
use App\Http\Controllers\Api\Base\ApiResponseTrait;
use App\Http\Controllers\Api\Payment\MultiStepsPaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\RequiredInfoTrait;
use App\Http\Controllers\Web\Post\CreateOrEdit\MultiSteps\Traits\WizardTrait;
use App\Http\Requests\PackageRequest;
use App\Models\Post;
use App\Models\Package;
use App\Models\Scopes\StrictActiveScope;
use App\Models\Scopes\VerifiedScope;
use App\Models\Scopes\ReviewedScope;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Http\Request;
use Torann\LaravelMetaTags\Facades\MetaTag;

class PaymentController extends FrontController
{
	use RequiredInfoTrait;
	use WizardTrait;
	use MultiStepsPaymentTrait;
	use ApiResponseTrait;
	
	public $request;
	public $data;
	
	/**
	 * PackageController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware(function ($request, $next) {
			$this->request = $request;
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
	}
	
	/**
	 * Show the form the create a new ad post.
	 *
	 * @param $postId
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function getForm($postId, Request $request)
	{
		// Check if the form type is 'Single Step Form', and make redirection to it (permanently).
		if (config('settings.single.publication_form_type') == '2') {
			$url = url('edit/' . $postId);
			
			return redirect($url, 301)->withHeaders(config('larapen.core.noCacheHeaders'));
		}
		
		$data = [];
		
		// Get Post
		$post = null;
		if (auth()->check()) {
			$user = auth()->user();
			$post = Post::currentCountry()->with([
				'latestPayment' => function ($builder) {
					$builder->with(['package'])->withoutGlobalScope(StrictActiveScope::class);
				},
			])->withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
				->where('user_id', $user->id)
				->where('id', $postId)
				->first();
		}
		
		if (empty($post)) {
			abort(404, t('Post not found'));
		}
		
		view()->share('post', $post);
		$this->shareWizardMenu($request, $post);
		
		// Share the Post's Latest Payment Info (If exists)
		$this->getCurrentPaymentInfo($post);
		
		// Meta Tags
		MetaTag::set('title', t('update_my_ad'));
		MetaTag::set('description', t('update_my_ad'));
		
		return appView('post.createOrEdit.multiSteps.packages.edit', $data);
	}
	
	/**
	 * Store a new ad post.
	 *
	 * @param $postId
	 * @param PackageRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postForm($postId, PackageRequest $request)
	{
		// Add required data in the request for API
		$inputArray = ['post_id' => $postId];
		request()->merge($inputArray);
		
		// Call API endpoint
		$endpoint = '/payments';
		$data = makeApiRequest('post', $endpoint, request()->all());
		
		// Parsing the API response
		$message = !empty(data_get($data, 'message')) ? data_get($data, 'message') : 'Unknown Error.';
		
		// HTTP Error Found
		if (!data_get($data, 'isSuccessful')) {
			flash($message)->error();
			
			if (data_get($data, 'extra.previousUrl')) {
				return redirect(data_get($data, 'extra.previousUrl'))->withInput();
			} else {
				return redirect()->back()->withInput();
			}
		}
		
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
								
								return redirect($previousUrl)->withInput();
							}
						}
					}
				}
			}
		}
		
		// Get Post Resource
		$post = data_get($data, 'result');
		
		// Get the next URL & Notification
		$nextUrl = UrlGen::post($post);
		
		// Notification Message
		if (data_get($data, 'success')) {
			flash($message)->success();
		} else {
			flash($message)->error();
		}
		
		return redirect($nextUrl);
	}
}

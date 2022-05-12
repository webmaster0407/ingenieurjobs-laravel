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

namespace App\Http\Controllers\Api\Payment;

use App\Helpers\Payment as PaymentHelper;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\MakePaymentTrait;
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\PricingTrait;
use App\Http\Requests\PackageRequest;
use App\Http\Resources\PostResource;
use App\Models\Package;
use App\Models\Post;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;

trait MultiStepsPaymentTrait
{
	use PricingTrait;
	use MakePaymentTrait;
	
	public $apiMsg = [];
	public $apiUri = [];
	public $selectedPackage = null;
	public $latestPayment = [
		'currentPaymentIsActive'      => 0,
		'currentPaymentMethodId'      => 0,
		'currentPackageId'            => 0,
		'currentPackagePrice'         => 0,
		'currentPackagePicturesLimit' => 0,
	];
	
	/**
	 * Set the Payment System Settings
	 */
	protected function paymentSettings()
	{
		// Messages
		$this->apiMsg['post']['success'] = t('your_ad_has_been_updated');
		$this->apiMsg['checkout']['success'] = t('We have received your payment');
		$this->apiMsg['checkout']['cancel'] = t('payment_cancelled_text');
		$this->apiMsg['checkout']['error'] = t('payment_error_text');
		
		// Set URLs
		$this->apiUri['previousUrl'] = url('posts/#entryId/payment');
		$nextUrl = str_replace(
			['{slug}', '{hashableId}', '{id}'],
			['#entrySlug', '#entryId', '#entryId'],
			(config('routes.post') ?? '#entrySlug/#entryId')
		);
		$this->apiUri['nextUrl'] = url($nextUrl);
		$this->apiUri['paymentCancelUrl'] = url('posts/#entryId/payment/cancel');
		$this->apiUri['paymentReturnUrl'] = url('posts/#entryId/payment/success');
		
		// Payment Helper init.
		PaymentHelper::$country = collect(config('country'));
		PaymentHelper::$lang = collect(config('lang'));
		PaymentHelper::$msg = $this->apiMsg;
		PaymentHelper::$uri = $this->apiUri;
		
		// Selected Package
		$this->selectedPackage = $this->getSelectedPackage();
		
		if (!isFromApi()) {
			view()->share('selectedPackage', $this->selectedPackage);
		}
	}
	
	/**
	 * Store Pictures (from Multi Steps Form)
	 *
	 * @param \App\Http\Requests\PackageRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function storeMultiStepsPayment(PackageRequest $request)
	{
		// Get customized request variables
		$countryCode = $request->input('country_code', config('country.code'));
		$postId = $request->input('post_id');
		
		$user = null;
		if (auth('sanctum')->check()) {
			$user = auth('sanctum')->user();
		}
		
		$post = null;
		if (!empty($user) && !empty($postId)) {
			$post = Post::query()
				/*->countryOf($countryCode)*/
				->with(['latestPayment'])
				->withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])
				->where('user_id', $user->id)
				->where('id', $postId)
				->first();
		}
		
		if (empty($post)) {
			return $this->respondNotFound(t('Post not found'));
		}
		
		// Make Payment (If needed)
		if ($request->header('X-AppType') != 'web') {
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
					// Send the Payment
					// IMPORTANT: For REST API usage, payment plugins don't have to make redirection
					return $this->sendPayment($request, $post);
				}
			}
		}
		
		// If no payment is made (Continue)
		
		$data = [
			'success' => true,
			'message' => t('your_ad_has_been_updated'),
			'result'  => (new PostResource($post))->toArray($request),
		];
		
		return $this->apiResponse($data);
	}
}


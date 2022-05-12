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
use App\Http\Controllers\Api\Post\CreateOrEdit\Traits\PricingTrait;

trait SingleStepPaymentTrait
{
	use PricingTrait;
	
	public $apiMsg = [];
	public $apiUri = [];
	public $selectedPackage = null;
	public $packages;
	public $paymentMethods;
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
		$isNewEntry = isPostCreationRequest();
		
		// Messages
		if ($isNewEntry) {
			$this->apiMsg['post']['success'] = t('your_ad_has_been_created');
		} else {
			$this->apiMsg['post']['success'] = t('your_ad_has_been_updated');
		}
		$this->apiMsg['checkout']['success'] = t('We have received your payment');
		$this->apiMsg['checkout']['cancel'] = t('payment_cancelled_text');
		$this->apiMsg['checkout']['error'] = t('payment_error_text');
		
		// Set URLs
		if ($isNewEntry) {
			$this->apiUri['previousUrl'] = url('create');
			$this->apiUri['nextUrl'] = url('create/finish');
			$this->apiUri['paymentCancelUrl'] = url('create/payment/cancel');
			$this->apiUri['paymentReturnUrl'] = url('create/payment/success');
			
			// Multi Steps Form (Creation)
			if (config('settings.single.publication_form_type') == '1') {
				$this->apiUri['previousUrl'] = url('posts/create/payment');
				$this->apiUri['nextUrl'] = url('posts/create/finish');
				$this->apiUri['paymentCancelUrl'] = url('posts/create/payment/cancel');
				$this->apiUri['paymentReturnUrl'] = url('posts/create/payment/success');
			}
		} else {
			$this->apiUri['previousUrl'] = url('edit/#entryId');
			$nextUrl = str_replace(
				['{slug}', '{hashableId}', '{id}'],
				['#entrySlug', '#entryId', '#entryId'],
				(config('routes.post') ?? '#entrySlug/#entryId')
			);
			$this->apiUri['nextUrl'] = url($nextUrl);
			$this->apiUri['paymentCancelUrl'] = url('edit/#entryId/payment/cancel');
			$this->apiUri['paymentReturnUrl'] = url('edit/#entryId/payment/success');
		}
		
		// Payment Helper init.
		PaymentHelper::$country = collect(config('country'));
		PaymentHelper::$lang = collect(config('lang'));
		PaymentHelper::$msg = $this->apiMsg;
		PaymentHelper::$uri = $this->apiUri;
		
		if ($isNewEntry) {
			// Share the Post's latest payment info variables without passing Post as argument
			// That is to get required variables for views (Web) or windows (Mobile)
			// Get the Post's Latest Payment Info (If exists)
			$this->latestPayment = $this->getCurrentPaymentInfo();
		}
		
		// Selected Package (from Form)
		$this->selectedPackage = $this->getSelectedPackage();
		
		if (!isFromApi()) {
			view()->share('selectedPackage', $this->selectedPackage);
		}
	}
}


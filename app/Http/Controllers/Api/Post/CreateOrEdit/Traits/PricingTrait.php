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

namespace App\Http\Controllers\Api\Post\CreateOrEdit\Traits;

use App\Models\Package;
use App\Models\Post;

trait PricingTrait
{
	/**
	 * Check & Get the selected Package
	 *
	 * @return mixed|null
	 */
	public function getSelectedPackage()
	{
		$package = null;
		
		$isNewEntry = isPostCreationRequest();
		
		// Make this available only on Post Creation pages
		if ($isNewEntry) {
			$packageId = requestPackageId();
			if (!empty($packageId)) {
				$package = getPackageById($packageId);
			}
		}
		
		return $package;
	}
	
	/**
	 * Get & Share Post's Latest Payment & its Method/Gateway's ID
	 * Get & Share the Package's Info
	 *
	 * @param null $post
	 * @param null $package
	 * @return array
	 */
	public function getCurrentPaymentInfo($post = null, $package = null)
	{
		$packageId = requestPackageId();
		if (!empty($packageId) && empty($package)) {
			$package = getPackageById($packageId);
		}
		
		$data = [];
		
		$data['currentPaymentIsActive'] = 0;
		$data['currentPaymentMethodId'] = 0;
		$data['currentPackageId'] = 0;
		$data['currentPackagePrice'] = 0;
		$data['currentPackagePicturesLimit'] = config('settings.single.pictures_limit');
		
		if (!empty($post) && $post instanceof Post) {
			if (isset($post->latestPayment) && !empty($post->latestPayment)) {
				// Get Current Payment data
				$data['currentPaymentIsActive'] = 1;
				$data['currentPaymentMethodId'] = $post->latestPayment->payment_method_id;
				if ($post->latestPayment->active == 0) {
					$data['currentPaymentIsActive'] = 0;
				}
				
				// Get the current Payment's Package data
				if (isset($post->featured) && $post->featured == 1) {
					if (isset($post->latestPayment->package) && !empty($post->latestPayment->package)) {
						$data['currentPackageId'] = $post->latestPayment->package->id;
						$data['currentPackagePrice'] = $post->latestPayment->package->price;
						
						// Set the Package's pictures limit
						if (
							isset($post->latestPayment->package->pictures_limit)
							&& !empty($post->latestPayment->package->pictures_limit)
							&& $post->latestPayment->package->pictures_limit > 0
						) {
							config()->set('settings.single.pictures_limit', $post->latestPayment->package->pictures_limit);
							$data['currentPackagePicturesLimit'] = $post->latestPayment->package->pictures_limit;
						}
					}
				}
			}
		}
		
		// Set the Package's pictures limit
		if (!empty($package) && $package instanceof Package) {
			$data['currentPackageId'] = $package->id;
			$data['currentPackagePrice'] = $package->price;
			
			if (
				isset($package->pictures_limit)
				&& !empty($package->pictures_limit)
				&& $package->pictures_limit > 0
			) {
				config()->set('settings.single.pictures_limit', $package->pictures_limit);
				$data['currentPackagePicturesLimit'] = $package->pictures_limit;
			}
		}
		
		if (!isFromApi()) {
			view()->share('currentPaymentIsActive', $data['currentPaymentIsActive'] ?? 0);
			view()->share('currentPaymentMethodId', $data['currentPaymentMethodId'] ?? 0);
			view()->share('currentPackageId', $data['currentPackageId']);
			view()->share('currentPackagePrice', $data['currentPackagePrice']);
			view()->share('picturesLimit', $data['currentPackagePicturesLimit'] ?? 0);
		}
		
		return $data;
	}
}

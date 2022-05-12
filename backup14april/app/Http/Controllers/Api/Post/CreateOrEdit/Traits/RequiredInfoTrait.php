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

use App\Http\Requests\PackageRequest;
use App\Http\Requests\PostRequest;
use App\Models\Package;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Cache;

trait RequiredInfoTrait
{
	public $paymentMethods;
	public $countPaymentMethods = 0;
	
	public $packages;
	public $countPackages = 0;
	
	/**
	 * Set the Global Settings
	 *
	 */
	protected function setPostFormRequiredInfo()
	{
		// Get Payment Methods
		$this->paymentMethods = Cache::remember(config('country.code') . '.paymentMethods.all', $this->cacheExpiration, function () {
			return PaymentMethod::query()
				->whereIn('name', array_keys((array)config('plugins.installed')))
				->where(function ($query) {
					$query->whereRaw('FIND_IN_SET("' . config('country.icode') . '", LOWER(countries)) > 0')
						->orWhereNull('countries')->orWhere('countries', '');
				})
				->orderBy('lft')
				->get();
		});
		$this->countPaymentMethods = $this->paymentMethods->count();
		
		// Get Packages
		$this->packages = Package::applyCurrency()->with('currency')->orderBy('lft')->get();
		$this->countPackages = $this->packages->count();
		
		// Sharing into Views for Web devices only
		if (!isFromApi()) {
			view()->share('paymentMethods', $this->paymentMethods);
			view()->share('countPaymentMethods', $this->countPaymentMethods);
			
			view()->share('packages', $this->packages);
			view()->share('countPackages', $this->countPackages);
		}
		
		// Sharing info Requests for Web & API calls
		if (config('settings.single.publication_form_type') == '2') {
			// Single Step Form
			PostRequest::$packages = $this->packages;
			PostRequest::$paymentMethods = $this->paymentMethods;
		} else {
			// Multi Steps Form
			PackageRequest::$packages = $this->packages;
			PackageRequest::$paymentMethods = $this->paymentMethods;
		}
	}
}


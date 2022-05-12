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

namespace App\Http\Requests;

use App\Models\Package;

class PackageRequest extends Request
{
	public static $packages;
	public static $paymentMethods;
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [];
		
		// Check if 'package_id' & 'payment_method_id' are required
		if (
			isset(self::$packages, self::$paymentMethods)
			&& self::$packages->count() > 0
			&& self::$paymentMethods->count() > 0
		) {
			// Require 'package_id' if Packages are available
			$rules['package_id'] = ['required'];
			
			// Require 'payment_method_id' if the Package 'price' > 0
			if ($this->filled('package_id')) {
				$package = Package::find($this->input('package_id'));
				if (!empty($package) && $package->price > 0) {
					$rules['payment_method_id'] = ['required', 'not_in:0'];
				}
			}
		}
		
		return $rules;
	}
}

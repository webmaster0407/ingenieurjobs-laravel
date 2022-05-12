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

use App\Models\PaymentMethod;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\PaymentMethodResource;

/**
 * @group Payment Methods
 */
class PaymentMethodController extends BaseController
{
	/**
	 * List payment methods
	 *
	 * @queryParam countryCode string Country code. Select only the payment methods related to a country. Example: US
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: lft. Example: -lft
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$paymentMethods = PaymentMethod::query()->whereIn('name', array_keys((array)config('plugins.installed')));
		
		if (request()->filled('countryCode')) {
			$countryCode = request()->get('countryCode');
			$paymentMethods->where(function ($query) use ($countryCode) {
				$query->whereRaw('FIND_IN_SET("' . $countryCode . '", LOWER(countries)) > 0')
					->orWhereNull('countries')->orWhere('countries', '');
			});
		}
		
		// Sorting
		$paymentMethods = $this->applySorting($paymentMethods, ['lft']);
		
		$paymentMethods = $paymentMethods->get();
		
		$resourceCollection = new EntityCollection(class_basename($this), $paymentMethods);
		
		return $this->respondWithCollection($resourceCollection);
	}
	
	/**
	 * Get payment method
	 *
	 * @urlParam $id int required Can be the ID (int) or name (string) of the payment method. Example: 1
	 *
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		if (is_numeric($id)) {
			$paymentMethod = PaymentMethod::query()->where('id', $id);
		} else {
			$paymentMethod = PaymentMethod::query()->where('name', $id);
		}
		
		$paymentMethod = $paymentMethod->firstOrFail();
		
		$resource = new PaymentMethodResource($paymentMethod);
		
		return $this->respondWithResource($resource);
	}
}

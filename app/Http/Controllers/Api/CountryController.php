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

use App\Http\Resources\CountryResource;
use App\Http\Resources\EntityCollection;
use App\Models\Country;

/**
 * @group Countries
 */
class CountryController extends BaseController
{
	/**
	 * List countries
	 *
	 * @queryParam embed string Comma-separated list of the country relationships for Eager Loading - Possible values: currency. Example: null
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: name. Example: -name
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$countries = Country::query();
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('currency', $embed)) {
			$countries->with('currency');
		}
		
		// Sorting
		$countries = $this->applySorting($countries, ['name']);
		
		$countries = $countries->paginate($this->perPage);
		
		$resourceCollection = new EntityCollection(class_basename($this), $countries);
		
		return $this->respondWithCollection($resourceCollection);
	}
	
	/**
	 * Get country
	 *
	 * @queryParam embed string Comma-separated list of the country relationships for Eager Loading - Possible values: currency. Example: currency
	 *
	 * @urlParam code string required The country's ISO 3166-1 code. Example: DE
	 *
	 * @param $code
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($code)
	{
		$country = Country::query()->where('code', $code);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('currency', $embed)) {
			$country->with('currency');
		}
		
		$country = $country->firstOrFail();
		
		$resource = new CountryResource($country);
		
		return $this->respondWithResource($resource);
	}
}

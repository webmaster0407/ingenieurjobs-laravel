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

use App\Models\City;
use App\Http\Resources\EntityCollection;
use App\Http\Resources\CityResource;

/**
 * @group Countries
 */
class CityController extends BaseController
{
	/**
	 * List cities
	 *
	 * @queryParam embed string Comma-separated list of the city relationships for Eager Loading - Possible values: country,subAdmin1,subAdmin2. Example: null
	 * @queryParam sort string The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: name. Example: -name
	 * @queryParam perPage int Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100. Example: 2
	 *
	 * @urlParam countryCode string The country code of the country of the cities to retrieve. Example: US
	 *
	 * @param $countryCode
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index($countryCode)
	{
		$cities = City::query()->where('country_code', $countryCode);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('country', $embed)) {
			$cities->with('country');
		}
		if (in_array('subAdmin1', $embed)) {
			$cities->with('subAdmin1');
		}
		if (in_array('subAdmin2', $embed)) {
			$cities->with('subAdmin2');
		}
		
		// Sorting
		$cities = $this->applySorting($cities, ['name']);
		
		$cities = $cities->paginate($this->perPage);
		
		$resourceCollection = new EntityCollection(class_basename($this), $cities);
		
		return $this->respondWithCollection($resourceCollection);
	}
	
	/**
	 * Get city
	 *
	 * @queryParam embed string Comma-separated list of the city relationships for Eager Loading - Possible values: country,subAdmin1,subAdmin2. Example: country
	 *
	 * @urlParam id int required The city ID. Example: 12544
	 *
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		$city = City::query()->where('id', $id);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('country', $embed)) {
			$city->with('country');
		}
		if (in_array('subAdmin1', $embed)) {
			$city->with('subAdmin1');
		}
		if (in_array('subAdmin2', $embed)) {
			$city->with('subAdmin2');
		}
		
		$city = $city->firstOrFail();
		
		$resource = new CityResource($city);
		
		return $this->respondWithResource($resource);
	}
}

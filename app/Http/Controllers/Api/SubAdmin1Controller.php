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

use App\Http\Resources\SubAdmin1Resource;
use App\Http\Resources\EntityCollection;
use App\Models\SubAdmin1;

/**
 * @group Countries
 */
class SubAdmin1Controller extends BaseController
{
	/**
	 * List admin. divisions (1)
	 *
	 * @queryParam embed string Comma-separated list of the administrative division (1) relationships for Eager Loading - Possible values: country. Example: null
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
		$subAdmins1 = SubAdmin1::query()->where('country_code', $countryCode);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('country', $embed)) {
			$subAdmins1->with('country');
		}
		
		// Sorting
		$subAdmins1 = $this->applySorting($subAdmins1, ['name']);
		
		$subAdmins1 = $subAdmins1->paginate($this->perPage);
		
		$resourceCollection = new EntityCollection(class_basename($this), $subAdmins1);
		
		return $this->respondWithCollection($resourceCollection);
	}
	
	/**
	 * Get admin. division (1)
	 *
	 * @queryParam embed string Comma-separated list of the administrative division (1) relationships for Eager Loading - Possible values: country. Example: null
	 *
	 * @urlParam code string required The administrative division (1)'s code. Example: CH.VD
	 *
	 * @param $code
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($code)
	{
		$subAdmin1 = SubAdmin1::query()->where('code', $code);
		
		$embed = explode(',', request()->get('embed'));
		
		if (in_array('country', $embed)) {
			$subAdmin1->with('country');
		}
		
		$subAdmin1 = $subAdmin1->firstOrFail();
		
		$resource = new SubAdmin1Resource($subAdmin1);
		
		return $this->respondWithResource($resource);
	}
}

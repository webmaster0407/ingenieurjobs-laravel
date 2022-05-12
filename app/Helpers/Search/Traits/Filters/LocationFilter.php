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

namespace App\Helpers\Search\Traits\Filters;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Larapen\LaravelDistance\Distance;

trait LocationFilter
{
	public static $defaultDistance = 50; // km
	public static $distance = null;      // km
	public static $maxDistance = 500;    // km
	
	protected function applyLocationFilter()
	{
		if (!(isset($this->posts) && isset($this->postsTable))) {
			return;
		}
		
		// Distance (Max & Default distance)
		self::$maxDistance = config('settings.list.search_distance_max', 0);
		self::$defaultDistance = config('settings.list.search_distance_default', 0);
		
		// Priority Settings
		if (request()->filled('distance') && is_numeric(request()->get('distance'))) {
			self::$distance = request()->get('distance');
			if (request()->get('distance') > self::$maxDistance) {
				self::$distance = self::$maxDistance;
			}
		} else {
			// Create the 'distance' parameter in the request()
			if (config('settings.list.cities_extended_searches')) {
				// request()->request->set('distance', self::$distance);
				self::$distance = self::$defaultDistance;
			}
		}
		
		// Exception when admin. division searched (City not found)
		// Skip arbitrary (fake) city with signed (-) ID, lon & lat
		if (isset($this->city) && !empty($this->city)) {
			if (isset($this->city->id) && $this->city->id <= 0) {
				return;
			}
		}
		
		if (Str::contains(Route::currentRouteAction(), 'Search\CityController')) {
			if (isset($this->city) && !empty($this->city)) {
				$this->applyLocationByCity($this->city);
			}
		} else {
			if (request()->has('l')) {
				if (isset($this->city) && !empty($this->city)) {
					$this->applyLocationByCity($this->city);
				}
			} else {
				if (request()->filled('r')) {
					if (isset($this->admin) && !empty($this->admin)) {
						$this->applyLocationByAdminCode($this->admin->code);
					}
				}
			}
		}
	}
	
	/**
	 * Apply administrative division filter
	 * Search including Administrative Division by adminCode
	 *
	 * @param $adminCode
	 * @return void
	 */
	private function applyLocationByAdminCode($adminCode)
	{
		if (in_array(config('country.admin_type'), ['1', '2'])) {
			// Get the admin. division table info
			$adminType = config('country.admin_type');
			$adminRelation = 'subAdmin' . $adminType;
			$adminForeignKey = 'subadmin' . $adminType . '_code';
			
			$this->posts->whereHas('city', function ($query) use ($adminForeignKey, $adminCode) {
				$query->where($adminForeignKey, $adminCode);
			});
		}
	}
	
	/**
	 * Apply city filter (Using city's coordinates)
	 * Search including City by City Coordinates (lat & lon)
	 *
	 * @param $city
	 * @return void
	 */
	private function applyLocationByCity($city)
	{
		if (!isset($city->id) || !isset($city->longitude) || !isset($city->latitude)) {
			return;
		}
		
		if (empty($city->longitude) || empty($city->latitude)) {
			return;
		}
		
		// Set City Globally
		$this->city = $city;
		
		// OrderBy Priority for Location
		$this->orderBy[] = $this->postsTable . '.created_at DESC';
		
		if (config('settings.list.cities_extended_searches')) {
			
			// Use the Cities Extended Searches
			config()->set('distance.functions.default', config('settings.list.distance_calculation_formula'));
			config()->set('distance.countryCode', config('country.code'));
			
			$sql = Distance::select('lon', 'lat', $city->longitude, $city->latitude);
			if ($sql) {
				$this->posts->addSelect(DB::raw($sql));
				$this->having[] = Distance::having(self::$distance);
				$this->orderBy[] = Distance::orderBy('ASC');
			} else {
				$this->applyLocationByCityId($city->id);
			}
			
		} else {
			
			// Use the Cities Standard Searches
			$this->applyLocationByCityId($city->id);
			
		}
	}
	
	/**
	 * Apply city filter (Using city's Id)
	 * Search including City by City Id
	 *
	 * @param $cityId
	 * @return void
	 */
	private function applyLocationByCityId($cityId)
	{
		if (empty(trim($cityId))) {
			return;
		}
		
		$this->posts->where('city_id', $cityId);
	}
	
	/**
	 * Remove Distance from Request
	 */
	private function removeDistanceFromRequest()
	{
		$input = request()->all();
		
		// (If it's not necessary) Remove the 'distance' parameter from request()
		if (!config('settings.list.cities_extended_searches') || empty($this->city)) {
			if (in_array('distance', array_keys($input))) {
				unset($input['distance']);
				request()->replace($input);
			}
		}
	}
}

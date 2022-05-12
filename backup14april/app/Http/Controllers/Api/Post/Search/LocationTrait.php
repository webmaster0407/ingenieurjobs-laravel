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

namespace App\Http\Controllers\Api\Post\Search;

use App\Models\City;
use App\Models\SubAdmin1;
use App\Models\SubAdmin2;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait LocationTrait
{
	/**
	 * @return array
	 */
	public function getLocation()
	{
		$city = null;
		$admin = null;
		
		// Get the Category's right arguments
		$cityName = null;
		$cityId = null;
		$regionName = null;
		if (request()->filled('l')) {
			$cityId = request()->get('l');
		}
		if (request()->filled('location')) {
			$cityName = request()->get('location');
		}
		if (request()->filled('r')) {
			$regionName = request()->get('r');
		}
		
		if (!empty($cityId)) {
			
			// Get City
			$cacheId = 'city.' . $cityId;
			$city = Cache::remember($cacheId, $this->cacheExpiration, function () use ($cityId) {
				$city = City::find((int)$cityId);
				
				return $city;
			});
			
			// City not found
			if (empty($city)) {
				abort(404, t('city_not_found'));
			}
			
		} else {
			
			if (!empty($cityName)) {
				$city = $this->getCity(null, $cityName);
				
				if (empty($city)) {
					if (!in_array(config('settings.list.fake_locations_results'), [1, 2])) {
						abort(404, t('city_not_found'));
					} else {
						request()->request->remove('r');
						request()->request->remove('l');
						request()->request->remove('location');
						
						if (config('settings.list.fake_locations_results') == 1) {
							$city = $this->getPopularCity();
							if (!empty($city)) {
								request()->request->add(['l' => $city->id]);
								request()->request->add(['location' => $city->name]);
							}
						}
					}
				}
			}
			
			if (!empty($regionName)) {
				$admin = $this->getAdmin($regionName);
				
				if (empty($admin)) {
					if (!in_array(config('settings.list.fake_locations_results'), [1, 2])) {
						abort(404, t('admin_division_not_found'));
					} else {
						request()->request->remove('r');
						request()->request->remove('l');
						request()->request->remove('location');
						
						if (config('settings.list.fake_locations_results') == 1) {
							$city = $this->getPopularCity();
							if (!empty($city)) {
								request()->request->add(['l' => $city->id]);
								request()->request->add(['location' => $city->name]);
							}
						}
					}
				} else {
					if (request()->filled('l')) {
						$city = $admin;
						$admin = null;
					}
				}
			}
			
		}
		
		$locationArr = [
			'city'  => $city,
			'admin' => $admin,
		];
		
		return $locationArr;
	}
	
	/**
	 * Get City
	 *
	 * @param null $cityId
	 * @param null $location
	 * @return array|mixed|\stdClass|null
	 */
	public function getCity($cityId = null, $location = null)
	{
		if (empty($cityId) && empty($location)) {
			return null;
		}
		
		// Search by administrative division name with magic word "area:" - Example: "area:New York"
		$adminName = null;
		if (!empty($location)) {
			$location = preg_replace('/\s+\:/', ':', $location);
			// Current Local
			$areaText = t('area');
			if (Str::contains($location, $areaText)) {
				$adminName = last(explode($areaText, $location));
				$adminName = trim($adminName);
			}
			
			// Main Local
			$areaText = t('area', [], 'global', config('appLang.abbr'));
			if (Str::contains($location, $areaText)) {
				$adminName = last(explode($areaText, $location));
				$adminName = trim($adminName);
			}
			
			if (!empty($adminName)) {
				request()->request->remove('l');
				request()->request->remove('location');
				request()->request->remove('distance');
				
				request()->request->add(['d' => config('country.code')]);
				request()->request->add(['r' => $adminName]);
				
				return $this->getAdmin($adminName);
			}
		}
		
		// $this->isCitySearch = true;
		// view()->share('isCitySearch', $this->isCitySearch);
		
		// Get City by Id
		$city = null;
		if (!empty($cityId)) {
			$cacheId = 'city.' . $cityId;
			$city = Cache::remember($cacheId, $this->cacheExpiration, function () use ($cityId) {
				$city = City::find($cityId);
				
				return $city;
			});
		}
		
		$cityName = rawurldecode($location);
		
		// Get City by Name
		if (empty($city) && !empty($location)) {
			$cacheId = md5('city.' . $cityName);
			$city = Cache::remember($cacheId, $this->cacheExpiration, function () use ($cityName) {
				$city = City::currentCountry()->where('name', 'LIKE', $cityName)->first();
				if (empty($city)) {
					$city = City::currentCountry()->where('name', 'LIKE', $cityName . '%')->first();
					if (empty($city)) {
						$city = City::currentCountry()->where('name', 'LIKE', '%' . $cityName)->first();
						if (empty($city)) {
							$city = City::currentCountry()->where('name', 'LIKE', '%' . $cityName . '%')->first();
						}
					}
				}
				
				return $city;
			});
		}
		
		return $city;
	}
	
	/**
	 * Get Administrative Division
	 *
	 * @param $adminName
	 * @return array|mixed|\stdClass|null
	 */
	public function getAdmin($adminName)
	{
		if (empty($adminName) || request()->filled('l')) {
			return null;
		}
		
		// $this->isAdminSearch = true;
		// view()->share('isAdminSearch', $this->isAdminSearch);
		
		if (in_array(config('country.admin_type'), ['1', '2'])) {
			$adminName = rawurldecode($adminName);
			
			$adminModel = '\App\Models\SubAdmin' . config('country.admin_type');
			
			$cacheId = md5('admin.' . $adminModel . '.' . $adminName);
			$admin = Cache::remember($cacheId, $this->cacheExpiration, function () use ($adminModel, $adminName) {
				$admin = $adminModel::currentCountry()->where('name', 'LIKE', $adminName)->first();
				if (empty($admin)) {
					$admin = $adminModel::currentCountry()->where('name', 'LIKE', $adminName . '%')->first();
					if (empty($admin)) {
						$admin = $adminModel::currentCountry()->where('name', 'LIKE', '%' . $adminName)->first();
						if (empty($admin)) {
							$admin = $adminModel::currentCountry()->where('name', 'LIKE', '%' . $adminName . '%')->first();
							if (empty($admin)) {
								$admin = $this->getSimilarAdminByName($adminModel, $adminName);
							}
						}
					}
				}
				
				return $admin;
			});
			
			return $admin;
		} else {
			// Get the Popular City in the Admin. Division  (And set it as filter)
			$cacheId = md5(config('country.code') . '.getAdminDivisionByNameAndGetItsPopularCity.' . $adminName);
			$city = Cache::remember($cacheId, $this->cacheExpiration, function () use ($adminName) {
				$city = $this->getAdminDivisionByNameAndGetItsPopularCity($adminName, false);
				
				return $city;
			});
			
			if (!empty($city)) {
				request()->request->remove('r');
				request()->request->add(['l' => $city->id]);
				request()->request->add(['location' => $adminName]);
			}
			
			return $city;
		}
	}
	
	/**
	 * Get the Popular City in the Administrative Division
	 *
	 * @param $adminName
	 * @param bool $countryPopularCityAsFallback
	 * @return mixed
	 */
	public function getAdminDivisionByNameAndGetItsPopularCity($adminName, $countryPopularCityAsFallback = true)
	{
		if (trim($adminName) == '') {
			return ($countryPopularCityAsFallback) ? $this->getPopularCity() : null;
		}
		
		// Init.
		$adminName = rawurldecode($adminName);
		
		// Get Admin 1
		$admin1 = SubAdmin1::currentCountry()
			->where('name', 'LIKE', '%' . $adminName . '%')
			->orderBy('name')
			->first();
		if (empty($admin1)) {
			$admin1 = $this->getSimilarAdminByName('SubAdmin1', $adminName);
		}
		
		// Get Admins 2
		if (!empty($admin1)) {
			$admins2 = SubAdmin2::currentCountry()->where('subadmin1_code', $admin1->code)
				->orderBy('name')
				->get(['code']);
		} else {
			$admins2 = SubAdmin2::currentCountry()
				->where('name', 'LIKE', '%' . $adminName . '%')
				->orderBy('name')
				->get(['code']);
			if ($admins2->count() <= 0) {
				$admins2 = $this->getSimilarAdminByName('SubAdmin2', $adminName, true);
			}
		}
		
		// Split the Admin Name value, ...
		// If $admin1 and $admins2 are not found
		if (empty($admin1) && (!is_null($admins2) && $admins2->count() <= 0)) {
			$tmp = preg_split('#(-| )+#', $adminName);
			
			// Sort by length DESC
			usort($tmp, function ($a, $b) {
				return strlen($b) - strlen($a);
			});
			
			if (count($tmp) > 0) {
				foreach ($tmp as $partOfAdminName) {
					// Get Admin 1
					$admin1 = SubAdmin1::currentCountry()
						->where('name', 'LIKE', '%' . $partOfAdminName . '%')
						->orderBy('name')
						->first();
					
					// Get Admins 2
					if (!empty($admin)) {
						$admins2 = SubAdmin2::currentCountry()->where('subadmin1_code', $admin1->code)
							->orderBy('name')
							->get(['code']);
						
						// If $admin1 is found, $admins2 is optional
						break;
					} else {
						$admins2 = SubAdmin2::currentCountry()
							->where('name', 'LIKE', '%' . $partOfAdminName . '%')
							->orderBy('name')
							->get(['code']);
						
						// If $admin1 is null, $admins2 is required
						if ($admins2->count() > 0) {
							break;
						}
					}
				}
			}
		}
		
		// Get City
		$city = null;
		if (!empty($admin1)) {
			if (!is_null($admins2) && $admins2->count() > 0) {
				$city = City::currentCountry()
					->where('subadmin1_code', $admin1->code)
					->whereIn('subadmin2_code', $admins2->pluck('code')->toArray())
					->orderBy('population', 'DESC')
					->first();
				if (empty($city)) {
					$city = City::currentCountry()
						->where('subadmin1_code', $admin1->code)
						->orderBy('population', 'DESC')
						->first();
				}
			} else {
				$city = City::currentCountry()
					->where('subadmin1_code', $admin1->code)
					->orderBy('population', 'DESC')
					->first();
			}
		} else {
			if (!is_null($admins2) && $admins2->count() > 0) {
				$city = City::currentCountry()
					->whereIn('subadmin2_code', $admins2->pluck('code')->toArray())
					->orderBy('population', 'DESC')
					->first();
			} else {
				if ($countryPopularCityAsFallback) {
					// If the Popular City in the Administrative Division is not found,
					// Get the Popular City in the Country.
					$city = $this->getPopularCity();
				}
			}
		}
		
		if ($countryPopularCityAsFallback) {
			// If no city is found, Get the Country's popular City
			if (empty($city)) {
				$city = $this->getPopularCity();
			}
		}
		
		return $city;
	}
	
	/**
	 * Get the Popular City in the Country
	 *
	 * @return mixed
	 */
	public function getPopularCity()
	{
		return City::currentCountry()->orderBy('population', 'DESC')->first();
	}
	
	/**
	 * @param $adminModel
	 * @param $adminName
	 * @param bool $getCollection
	 * @return mixed
	 */
	public function getSimilarAdminByName($adminModel, $adminName, $getCollection = false)
	{
		$modelsPath = '\App\Models\\';
		if (!Str::startsWith($adminModel, $modelsPath)) {
			$adminModel = $modelsPath . $adminModel;
		}
		
		$adminNameSpace = str_replace('-', ' ', $adminName);
		$admin = $adminModel::currentCountry()->where('name', 'LIKE', '%' . $adminNameSpace . '%');
		if ($admin->count() <= 0) {
			$adminNameDash = str_replace(' ', '-', $adminName);
			$admin = $adminModel::currentCountry()->where('name', 'LIKE', '%' . $adminNameDash . '%');
		}
		
		if ($getCollection) {
			$admin = $admin->get(['code']);
		} else {
			$admin = $admin->first();
		}
		
		return $admin;
	}
}

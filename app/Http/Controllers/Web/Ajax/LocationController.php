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

namespace App\Http\Controllers\Web\Ajax;

use App\Models\City;
use App\Models\SubAdmin1;
use App\Http\Controllers\Web\FrontController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LocationController extends FrontController
{
	public $adminsNamespace = [
		'1' => '\App\Models\SubAdmin1',
		'2' => '\App\Models\SubAdmin2',
	];
	
	/**
	 * AutoCompletion
	 * Searched Cities
	 *
	 * @param $countryCode
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function searchedCities($countryCode): \Illuminate\Http\JsonResponse
	{
		$query = request()->get('query');
		
		$citiesArr = [];
		if (mb_strlen($query) > 0) {
			$cities = City::with(['subAdmin1', 'subAdmin2'])->countryOf($countryCode)->transWhere('name', 'LIKE', $query . '%');
			
			$limit = 25;
			$cacheId = $countryCode . '.cities.with.admins.where.name.' . $query . '.take.' . $limit;
			$cities = cache()->remember($cacheId, $this->cacheExpiration, function () use ($cities, $limit) {
				return $cities->orderBy('name')->take($limit)->get();
			});
			
			// Get Cities Array
			if ($cities->count() > 0) {
				foreach ($cities as $city) {
					$value = $city->name;
					if (isset($city->subAdmin2) && !empty($city->subAdmin2)) {
						$value .= ', ' . $city->subAdmin2->name;
					} else {
						if (isset($city->subAdmin1) && !empty($city->subAdmin1)) {
							$value .= ', ' . $city->subAdmin1->name;
						}
					}
					$citiesArr[] = [
						'data'  => $city->id,
						'value' => $value,
					];
				}
			}
		}
		
		$result = [
			'query'       => $query,
			'suggestions' => $citiesArr,
		];
		
		return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * Form Select Box
	 * Get Countries
	 *
	 * @return mixed
	 */
	public function getCountries()
	{
		return $this->countries->toJson();
	}
	
	/**
	 * Form Select Box
	 * Get country Locations (admin1 OR admin2)
	 *
	 * @param $countryCode
	 * @param $adminType
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function getAdmins($countryCode, $adminType): \Illuminate\Http\JsonResponse
	{
		// If admin type does not exist, set the default type
		if (!isset($this->adminsNamespace[$adminType])) {
			$adminType = 1;
		}
		
		// Get Model
		$model = $this->adminsNamespace[$adminType];
		
		// Get locations (Regions OR States OR counties OR provinces OR etc.)
		$cacheId = $countryCode . '.subAdmin' . $adminType . 's.all';
		$admins = cache()->remember($cacheId, $this->cacheExpiration, function () use ($model, $countryCode, $adminType) {
			if ($adminType == 2) {
				$admins = $model::countryOf($countryCode)->with(['subAdmin1'])->orderBy('name')->get();
			} else {
				$admins = $model::countryOf($countryCode)->orderBy('name')->get(['code', 'name']);
			}
			
			return $admins;
		});
		
		if ($admins->count() == 0) {
			return response()->json([
				'error' => [
					'message' => t("No admin. division doesn't exists for the current country.", [], 'global', request()->get('languageCode')),
				], 404,
			]);
		}
		
		$adminsArr = [];
		
		// Change the Admin's name for Admin. Division 2
		if ($adminType == 2) {
			foreach ($admins as $admin) {
				$name = $admin->name;
				if (isset($admin->subAdmin1) && !empty($admin->subAdmin1)) {
					$name .= ', ' . $admin->subAdmin1->name;
				}
				
				$adminsArr[] = [
					'code' => $admin->code,
					'name' => $name,
				];
			}
		} else {
			$adminsArr = $admins->toArray();
		}
		
		return response()->json(['data' => $adminsArr], 200, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * Form Select Box
	 * Get Admin1 or Admin2's Cities
	 *
	 * @param $countryCode
	 * @param $adminType
	 * @param $adminCode
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function getCities($countryCode, $adminType, $adminCode): \Illuminate\Http\JsonResponse
	{
		$cacheId = $countryCode . '.cities.with.admins';
		
		if (!isset($this->adminsNamespace[$adminType]) || $adminCode == '0') {
			$cities = City::with(['subAdmin1', 'subAdmin2'])->countryOf($countryCode);
		} else {
			$cacheId .= '.where.subAdmin' . $adminType . '.' . $adminCode;
			$cityAdminForeignKey = 'subadmin' . $adminType . '_code';
			$cities = City::countryOf($countryCode)->where($cityAdminForeignKey, $adminCode);
			
			// If Admin. Division Type is 2 and If any Cities are found...
			// Get Cities from they Admin. Division 1
			if ($adminType == 2 && $cities->count() <= 0) {
				$cities = City::countryOf($countryCode)->where('subadmin1_code', $adminCode);
			}
		}
		
		// Search
		if (request()->filled('q')) {
			$q = request()->get('q') . '%';
			$cities->transWhere('name', 'LIKE', $q);
			$cacheId .= '.where.name.' . $q;
		}
		
		// Pagination vars
		$totalEntries = $cities->count();
		$entriesPerPage = 9;
		$page = request()->get('page', 1);
		$offset = ($page - 1) * $entriesPerPage;
		
		// Get cities with (manual) pagination
		$cacheId .= $offset . '.' . $entriesPerPage;
		$cities = cache()->remember(md5($cacheId), $this->cacheExpiration, function () use ($cities, $offset, $entriesPerPage) {
			return $cities->orderBy('population', 'desc')->skip($offset)->take($entriesPerPage)->get();
		});
		
		// Get Cities Array
		$citiesArr = [];
		if ($cities->count() > 0) {
			foreach ($cities as $city) {
				$text = $city->name;
				if (isset($city->subAdmin2) && !empty($city->subAdmin2)) {
					$text .= ', ' . $city->subAdmin2->name;
				} else {
					if (isset($city->subAdmin1) && !empty($city->subAdmin1)) {
						$text .= ', ' . $city->subAdmin1->name;
					}
				}
				$citiesArr[] = [
					'id'   => $city->id,
					'text' => $text,
				];
			}
		}
		
		return response()->json(['items' => $citiesArr, 'totalEntries' => $totalEntries], 200, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * Form Select Box
	 * Get the selected City
	 *
	 * @param $countryCode
	 * @param $cityId
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function getSelectedCity($countryCode, $cityId): \Illuminate\Http\JsonResponse
	{
		// Get the City by its ID
		$cacheId = $countryCode . '.city.with.admins' . $cityId;
		$city = cache()->remember($cacheId, $this->cacheExpiration, function () use ($countryCode, $cityId) {
			return City::countryOf($countryCode)->with(['subAdmin1', 'subAdmin2'])->where('id', $cityId)->first();
		});
		
		if (!empty($city)) {
			$text = $city->name;
			if (isset($city->subAdmin2) && !empty($city->subAdmin2)) {
				$text .= ', ' . $city->subAdmin2->name;
			} else {
				if (isset($city->subAdmin1) && !empty($city->subAdmin1)) {
					$text .= ', ' . $city->subAdmin1->name;
				}
			}
			$cityArr = ['id' => $city->id, 'text' => $text];
		} else {
			$cityArr = ['id' => 0, 'text' => t('select_a_city', [], 'global', request()->get('languageCode'))];
		}
		
		return response()->json($cityArr, 200, [], JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * Modal Location
	 * Get Admin1 with its Cities [HTML]
	 *
	 * @param $countryCode
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \Exception
	 */
	public function getAdmin1WithCities($countryCode, Request $request): \Illuminate\Http\JsonResponse
	{
		$languageCode = $request->input('languageCode');
		$adminCode = $request->input('adminCode');
		$currSearch = unserialize(base64_decode($request->input('currSearch')));
		
		// Remove Region filter if exists
		if (isset($currSearch['r'])) {
			unset($currSearch['r']);
		}
		$_token = $request->input('_token');
		
		// Get the Administrative Division Info
		$cacheId = $countryCode . '.subAdmin1.' . $adminCode;
		$admin = cache()->remember($cacheId, $this->cacheExpiration, function () use ($adminCode) {
			return SubAdmin1::find($adminCode);
		});
		
		// Get the Administrative Division's Cities
		$cities = collect();
		if (!empty($admin)) {
			$limit = 59;
			$cacheId = $countryCode . 'cities.where.subAdmin1.' . $adminCode . '.take.' . $limit;
			$cities = cache()->remember($cacheId, $this->cacheExpiration, function () use ($countryCode, $adminCode, $limit) {
				return City::countryOf($countryCode)
					->where('subadmin1_code', $adminCode)->take($limit)
					->orderByDesc('population')
					->orderBy('name')
					->get();
			});
		}
		
		// Get current city ID (If exists)
		$cityId = null;
		if (isset($currSearch['l'])) {
			$cityId = $currSearch['l'];
		}
		
		// Remove some filters (if they exist)
		$unWantedInputs = ['currSearch', 'r', 'd', '_token', 'l', 'location', 'languageCode', 'adminCode', 'country_code', 'language_code'];
		foreach ($unWantedInputs as $input) {
			if (isset($currSearch[$input])) {
				unset($currSearch[$input]);
			}
		}
		
		// Variables for location's cities view
		$data = [
			'countryCode'    => $countryCode,
			'languageCode'   => $languageCode,
			'adminCode'      => $admin->code ?? null,
			'currSearch'     => $currSearch,
			'cityId'         => $cityId,
			'_token'         => $_token,
			'cities'         => $cities,
			'unWantedInputs' => $unWantedInputs,
		];
		
		// XHR data
		$result = [
			'adminCode'   => $admin->code ?? null,
			'adminName'   => $admin->name ?? null,
			'adminCities' => getViewContent('layouts.inc.modal.location.cities', $data),
		];
		
		return response()->json($result, 200, [], JSON_UNESCAPED_UNICODE);
	}
}

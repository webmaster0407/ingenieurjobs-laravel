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

namespace App\Http\Controllers\Admin\Traits\Charts;

/*
 * $colorOptions = ['luminosity' => 'light', 'hue' => ['red','orange','yellow','green','blue','purple','pink']];
 * $colorOptions = ['luminosity' => 'light'];
 */

use App\Helpers\Arr;
use App\Helpers\RandomColor;
use App\Models\Country;

trait ChartjsTrait
{
	/**
	 * @param int $limit
	 * @param array $colorOptions
	 * @return array
	 */
	private function getPostsPerCountryForChartjs($limit = 10, $colorOptions = [])
	{
		// Init.
		$limit = (is_numeric($limit) && $limit > 0) ? $limit : 10;
		$colorOptions = (is_array($colorOptions)) ? $colorOptions : [];
		$data = [];
		
		// Get Data
		if ($this->countCountries > 1) {
			$countries = Country::active()->has('posts')->withCount('posts')->get()->sortByDesc(function ($country) {
				return $country->posts_count;
			})->take($limit);
			
			// Format Data
			if ($countries->count() > 0) {
				foreach ($countries as $country) {
					$data['datasets'][0]['data'][] = $country->posts_count;
					$data['datasets'][0]['backgroundColor'][] = RandomColor::one($colorOptions);
					$data['labels'][] = (!empty($country->name)) ? $country->name : $country->code;
				}
				$data['datasets'][0]['label'] = trans('admin.Posts Dataset');
			}
		}
		
		$data = json_encode($data, JSON_NUMERIC_CHECK);
		
		$boxData = [
			'title'          => trans('admin.Ads per Country') . ' (' . trans('admin.Most active Countries') . ')',
			'data'           => $data,
			'countCountries' => $this->countCountries,
		];
		$boxData = Arr::toObject($boxData);
		
		return $boxData;
	}
	
	/**
	 * @param int $limit
	 * @param array $colorOptions
	 * @return array
	 */
	private function getUsersPerCountryForChartjs($limit = 10, $colorOptions = [])
	{
		// Init.
		$limit = (is_numeric($limit) && $limit > 0) ? $limit : 10;
		$colorOptions = (is_array($colorOptions)) ? $colorOptions : [];
		$data = [];
		
		// Get Data
		if ($this->countCountries > 1) {
			$countries = Country::active()->has('users')->withCount('users')->get()->sortByDesc(function ($country) {
				return $country->users_count;
			})->take($limit);
			
			// Format Data
			if ($countries->count() > 0) {
				foreach ($countries as $country) {
					$data['datasets'][0]['data'][] = $country->users_count;
					$data['datasets'][0]['backgroundColor'][] = RandomColor::one($colorOptions);
					$data['labels'][] = (!empty($country->name)) ? $country->name : $country->code;
				}
				$data['datasets'][0]['label'] = trans('admin.Users Dataset');
			}
		}
		
		$data = json_encode($data, JSON_NUMERIC_CHECK);
		
		$boxData = [
			'title'          => trans('admin.Users per Country') . ' (' . trans('admin.Most active Countries') . ')',
			'data'           => $data,
			'countCountries' => $this->countCountries,
		];
		$boxData = Arr::toObject($boxData);
		
		return $boxData;
	}
}

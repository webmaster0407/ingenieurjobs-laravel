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

use Illuminate\Support\Str;

/**
 * @group Settings
 */
class SettingController extends BaseController
{
	/**
	 * List settings
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$settings = config('settings');
		
		// Hide some columns
		if (isset($settings['app'])) {
			$app = $settings['app'];
			if (isset($app['purchase_code'])) {
				unset($app['purchase_code']);
				$settings['app'] = $app;
			}
		}
		
		$data = [
			'success' => true,
			'result'  => $settings,
		];
		
		return $this->apiResponse($data);
	}
	
	/**
	 * Get setting
	 *
	 * @urlParam key string required The settings key. Example: app
	 *
	 * @param $key
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($key)
	{
		$settingKey = 'settings.' . $key;
		
		if (config()->has($settingKey)) {
			$settings = config($settingKey);
			
			// Hide some columns
			if (isset($settings['purchase_code'])) {
				unset($settings['purchase_code']);
			}
			if (Str::endsWith($settingKey, 'purchase_code') && is_string($settings)) {
				$settings = null;
			}
			
			$data = [
				'success' => true,
				'result'  => $settings,
			];
			
			return $this->apiResponse($data);
		} else {
			return $this->respondNotFound();
		}
	}
}

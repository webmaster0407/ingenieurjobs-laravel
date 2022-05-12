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

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ApplyFieldsToAPICalls
{
	/**
	 * Apply Global Inputs to the API Calls
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Exception for Install & Upgrade Routes
		if (
			Str::contains(Route::currentRouteAction(), 'InstallController')
			|| Str::contains(Route::currentRouteAction(), 'UpgradeController')
		) {
			return $next($request);
		}
		
		// Some Exceptions
		if (
			Str::contains(Route::currentRouteAction(), 'Admin\LanguageController@syncFilesLines')
			|| Str::contains(Route::currentRouteAction(), 'Admin\LanguageController@updateTexts')
		) {
			return $next($request);
		}
		
		if (in_array(strtoupper($request->method()), ['GET'])) {
			return $next($request);
		}
		
		$countryCode = $request->filled('country_code') ? $request->input('country_code') : config('country.code');
		$languageCode = $request->filled('language_code') ? $request->input('language_code') : config('app.locale');
		
		$newInputs = [];
		
		if (!empty($countryCode)) {
			$newInputs['country_code'] = $countryCode;
		}
		if (!empty($languageCode)) {
			$newInputs['language_code'] = $languageCode;
		}
		
		// Replace the fields values
		if (!empty($newInputs)) {
			$request->merge($newInputs);
			request()->merge($newInputs);
		}
		
		return $next($request);
	}
}

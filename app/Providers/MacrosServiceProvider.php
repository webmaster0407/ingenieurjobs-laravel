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

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class MacrosServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
	
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$macroFiles = glob(__DIR__ . '/../Macros/*.php');
		
		$macroFiles = Collection::make($macroFiles)->mapWithKeys(function ($path) {
			return [$path => pathinfo($path, PATHINFO_FILENAME)];
		})->reject(function ($macro) {
			return Collection::hasMacro($macro);
		});
		
		$macroFiles->each(function ($macro, $path) {
			require_once $path;
		});
	}
}

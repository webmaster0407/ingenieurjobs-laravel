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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait AuthorFilter
{
	protected function applyAuthorFilter()
	{
		if (!isset($this->posts)) {
			return;
		}
		
		$userId = null;
		$username = null;
		if (Str::contains(Route::currentRouteAction(), 'Search\UserController')) {
			if (Str::contains(Route::currentRouteAction(), '@index')) {
				$userId = request()->segment(2);
				if (config('settings.seo.multi_countries_urls')) {
					$userId = request()->segment(3);
				}
				$userId = trim($userId);
			}
			if (Str::contains(Route::currentRouteAction(), '@profile')) {
				$username = request()->segment(2);
				if (config('settings.seo.multi_countries_urls')) {
					$username = request()->segment(3);
				}
				$username = trim($username);
			}
		}
		
		if (empty($userId) && empty($username)) {
			return;
		}
		
		if (!empty($userId)) {
			$this->posts->where('user_id', $userId);
		}
		
		if (!empty($username)) {
			$this->posts->whereHas('user', function ($query) use($username) {
				$query->where('username', $username);
			});
		}
	}
}

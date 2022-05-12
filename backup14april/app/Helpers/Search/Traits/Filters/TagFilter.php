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

trait TagFilter
{
	protected function applyTagFilter()
	{
		if (!isset($this->posts)) {
			return;
		}
		
		$tag = null;
		if (Str::contains(Route::currentRouteAction(), 'Search\TagController')) {
			$tag = request()->segment(2);
			if (config('settings.seo.multi_countries_urls')) {
				$tag = request()->segment(3);
			}
		} else {
			if (request()->filled('tag')) {
				$tag = request()->get('tag');
			}
		}
		
		if (empty(trim($tag))) {
			return;
		}
		
		$tag = rawurldecode($tag);
		$tag = mb_strtolower($tag);
		
		$this->posts->whereRaw('FIND_IN_SET(?, LOWER(tags)) > 0', [$tag]);
	}
}

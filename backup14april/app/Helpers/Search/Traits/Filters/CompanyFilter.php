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

trait CompanyFilter
{
	protected function applyCompanyFilter()
	{
		if (!isset($this->posts)) {
			return;
		}
		
		$companyId = null;
		if (Str::contains(Route::currentRouteAction(), 'Search\CompanyController')) {
			if (Str::contains(Route::currentRouteAction(), '@profile')) {
				$companyId = request()->segment(2);
				if (config('settings.seo.multi_countries_urls')) {
					$companyId = request()->segment(3);
				}
				$companyId = trim($companyId);
			}
		}
		
		if (empty($companyId)) {
			return;
		}
		
		if (!empty($companyId)) {
			$this->posts->where('company_id', $companyId);
		}
	}
}

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

namespace App\Http\Controllers\Web\Post\CreateOrEdit\Traits;

use App\Helpers\UrlGen;

trait PricingPageUrlTrait
{
	/**
	 * Check if the Package selection is required and Get the Pricing Page URL
	 *
	 * @param $package
	 * @return string|null
	 */
	public function getPricingPage($package): ?string
	{
		$pricingUrl = null;
		
		// Check if the 'Pricing Page' must be started first, and make redirection to it.
		if (config('settings.single.pricing_page_enabled') == '1') {
			if (empty($package)) {
				$pricingUrl = UrlGen::pricing() . '?from=' . request()->path();
			}
		}
		
		return $pricingUrl;
	}
}

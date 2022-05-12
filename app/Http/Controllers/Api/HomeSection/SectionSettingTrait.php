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

namespace App\Http\Controllers\Api\HomeSection;

trait SectionSettingTrait
{
	/**
	 * @param array $value
	 * @return array
	 */
	protected function getSearchFormSettings($value = [])
	{
		// Load Country's Background Image
		if (!empty(config('country.background_image'))) {
			if (isset($this->disk) && $this->disk->exists(config('country.background_image'))) {
				$value['background_image'] = config('country.background_image');
			}
		}
		
		// Title: Count Posts & Users
		if (isset($value['title_' . config('app.locale')]) && !empty($value['title_' . config('app.locale')])) {
			$title = $value['title_' . config('app.locale')];
			$title = replaceGlobalPatterns($title);
			
			$value['title_' . config('app.locale')] = $title;
		}
		
		// SubTitle: Count Posts & Users
		if (isset($value['sub_title_' . config('app.locale')]) && !empty($value['sub_title_' . config('app.locale')])) {
			$subTitle = $value['sub_title_' . config('app.locale')];
			$subTitle = replaceGlobalPatterns($subTitle);
			
			$value['sub_title_' . config('app.locale')] = $subTitle;
		}
		
		return $value;
	}
}

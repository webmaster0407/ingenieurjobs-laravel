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

namespace App\Models\Setting;

class SocialLinkSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['facebook_page_url'] = '#';
			$value['twitter_url'] = '#';
			$value['linkedin_url'] = '#';
			$value['pinterest_url'] = '#';
			$value['instagram_url'] = '#';
			$value['tiktok_url'] = '#';
			
		} else {
			
			if (!isset($value['facebook_page_url'])) {
				$value['facebook_page_url'] = '';
			}
			if (!isset($value['twitter_url'])) {
				$value['twitter_url'] = '';
			}
			if (!isset($value['linkedin_url'])) {
				$value['linkedin_url'] = '';
			}
			if (!isset($value['pinterest_url'])) {
				$value['pinterest_url'] = '';
			}
			if (!isset($value['instagram_url'])) {
				$value['instagram_url'] = '';
			}
			if (!isset($value['tiktok_url'])) {
				$value['tiktok_url'] = '';
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		return $value;
	}
	
	public static function getFields($diskName)
	{
		$fields = [
			[
				'name'  => 'facebook_page_url',
				'label' => trans('admin.Facebook Page URL'),
				'type'  => 'text',
			],
			[
				'name'  => 'twitter_url',
				'label' => trans('admin.Twitter URL'),
				'type'  => 'text',
			],
			[
				'name'  => 'linkedin_url',
				'label' => trans('admin.LinkedIn URL'),
				'type'  => 'text',
			],
			[
				'name'  => 'pinterest_url',
				'label' => trans('admin.Pinterest URL'),
				'type'  => 'text',
			],
			[
				'name'  => 'instagram_url',
				'label' => trans('admin.Instagram URL'),
				'type'  => 'text',
			],
			[
				'name'  => 'tiktok_url',
				'label' => trans('admin.Tiktok URL'),
				'type'  => 'text',
			],
		];
		
		return $fields;
	}
}

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

class FooterSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['hide_payment_plugins_logos'] = '1';
			
		} else {
			
			if (!isset($value['hide_payment_plugins_logos'])) {
				$value['hide_payment_plugins_logos'] = '1';
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
				'name'  => 'hide_links',
				'label' => trans('admin.Hide Links'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'  => 'hide_payment_plugins_logos',
				'label' => trans('admin.Hide Payment Plugins Logos'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'  => 'hide_powered_by',
				'label' => trans('admin.Hide Powered by Info'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'  => 'powered_by_info',
				'label' => trans('admin.Powered by'),
				'type'  => 'text',
			],
			[
				'name'       => 'tracking_code',
				'label'      => trans('admin.Tracking Code'),
				'type'       => 'textarea',
				'attributes' => [
					'rows' => '15',
				],
				'hint'       => trans('admin.tracking_code_hint'),
			],
		];
		
		return $fields;
	}
}

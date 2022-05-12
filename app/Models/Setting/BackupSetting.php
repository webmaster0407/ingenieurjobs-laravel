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

use App\Helpers\Date;

class BackupSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['disable_notifications'] = '1';
			$value['keep_all_backups_for_days'] = '7';
			$value['keep_daily_backups_for_days'] = '16';
			$value['keep_weekly_backups_for_weeks'] = '8';
			$value['keep_monthly_backups_for_months'] = '4';
			$value['keep_yearly_backups_for_years'] = '2';
			$value['maximum_storage_in_megabytes'] = '5000';
			
		} else {
			
			if (!isset($value['disable_notifications'])) {
				$value['disable_notifications'] = '1';
			}
			if (!isset($value['keep_all_backups_for_days'])) {
				$value['keep_all_backups_for_days'] = '7';
			}
			if (!isset($value['keep_daily_backups_for_days'])) {
				$value['keep_daily_backups_for_days'] = '16';
			}
			if (!isset($value['keep_weekly_backups_for_weeks'])) {
				$value['keep_weekly_backups_for_weeks'] = '8';
			}
			if (!isset($value['keep_monthly_backups_for_months'])) {
				$value['keep_monthly_backups_for_months'] = '4';
			}
			if (!isset($value['keep_yearly_backups_for_years'])) {
				$value['keep_yearly_backups_for_years'] = '2';
			}
			if (!isset($value['maximum_storage_in_megabytes'])) {
				$value['maximum_storage_in_megabytes'] = '5000';
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
				'name'  => 'backups_list',
				'type'  => 'custom_html',
				'value' => trans('admin.backups_list_value'),
			],
			[
				'name'  => 'backup_link_btn_hint',
				'type'  => 'custom_html',
				'value' => trans('admin.backup_link_btn_hint_value'),
			],
			[
				'name'  => 'backup_link_btn',
				'type'  => 'custom_html',
				'value' => trans('admin.backup_link_btn_value'),
			],
			
			[
				'name'  => 'backup_storage_disk',
				'type'  => 'custom_html',
				'value' => trans('admin.backup_storage_disk_value'),
			],
			[
				'name'              => 'storage_disk',
				'label'             => trans('admin.storage_disk_label'),
				'type'              => 'select2_from_array',
				'options'           => [
					0 => trans('admin.storage_disk_option_0'),
					1 => trans('admin.storage_disk_option_1'),
					2 => trans('admin.storage_disk_option_2'),
				],
				'hint'              => trans('admin.storage_disk_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'disable_notifications',
				'label'             => trans('admin.backup_disable_notifications_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.backup_disable_notifications_hint', ['email' => config('settings.app.email')]),
				'wrapperAttributes' => [
					'class' => 'col-md-6 mt-4',
				],
			],
			
			[
				'name'  => 'backup_schedule',
				'type'  => 'custom_html',
				'value' => trans('admin.backup_schedule_value'),
			],
			[
				'name'  => 'help_backup_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.card_body', [
					'text'        => trans('admin.help_backup', [
						'backupLocalStorage' => relativeAppPath(storage_path('backups')),
					]), 'bgColor' => 'bg-light-warning',
				]),
			],
			[
				'name'  => 'backup_sep_2',
				'type'  => 'custom_html',
				'value' => '<hr>',
			],
			[
				'name'  => 'cron_info_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.cron_info_sep_value'),
			],
			[
				'name'              => 'taking_backup',
				'label'             => trans('admin.taking_backup_label'),
				'type'              => 'select2_from_array',
				'options'           => self::backupFrequencies(),
				'hint'              => trans('admin.taking_backup_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'taking_backup_at',
				'label'             => trans('admin.taking_backup_at_label'),
				'type'              => 'select2_from_array',
				'options'           => self::backupFrequencyAt(),
				'hint'              => trans('admin.taking_backup_at_hint', ['timeZone' => Date::getAppTimeZone()]),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'  => 'backup_cleanup_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.backup_cleanup_sep_value'),
			],
			[
				'name'  => 'backup_cleanup_rules',
				'type'  => 'custom_html',
				'value' => trans('admin.backup_cleanup_rules_value'),
			],
			[
				'name'              => 'keep_all_backups_for_days',
				'label'             => trans('admin.keep_all_backups_for_days_label'),
				'type'              => 'number',
				'hint'              => trans('admin.keep_all_backups_for_days_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'keep_daily_backups_for_days',
				'label'             => trans('admin.keep_daily_backups_for_days_label'),
				'type'              => 'number',
				'hint'              => trans('admin.keep_daily_backups_for_days_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'keep_weekly_backups_for_weeks',
				'label'             => trans('admin.keep_weekly_backups_for_weeks_label'),
				'type'              => 'number',
				'hint'              => trans('admin.keep_weekly_backups_for_weeks_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'keep_monthly_backups_for_months',
				'label'             => trans('admin.keep_monthly_backups_for_months_label'),
				'type'              => 'number',
				'hint'              => trans('admin.keep_monthly_backups_for_months_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'keep_yearly_backups_for_years',
				'label'             => trans('admin.keep_yearly_backups_for_years_label'),
				'type'              => 'number',
				'hint'              => trans('admin.keep_yearly_backups_for_years_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'maximum_storage_in_megabytes',
				'label'             => trans('admin.maximum_storage_in_megabytes_label'),
				'type'              => 'number',
				'hint'              => trans('admin.maximum_storage_in_megabytes_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
		];
		
		return $fields;
	}
	
	/**
	 * @return array
	 */
	private static function backupFrequencies()
	{
		return [
			'none'    => trans('admin.taking_backup_option_0'),
			'daily'   => trans('admin.taking_backup_option_1'),
			'weekly'  => trans('admin.taking_backup_option_2'),
			'monthly' => trans('admin.taking_backup_option_3'),
			'yearly'  => trans('admin.taking_backup_option_4'),
		];
	}
	
	/**
	 * @return array
	 */
	private static function backupFrequencyAt()
	{
		$hours = [];
		
		for ($i = 0; $i <= 23; $i++) {
			$hh = str_pad($i, 2, '0', STR_PAD_LEFT);
			for ($j = 0; $j <= 59; $j+=15) {
				$mm = str_pad($j, 2, '0', STR_PAD_LEFT);
				$hour = $hh . ':' . $mm;
				$hours[$hour] = $hour;
			}
		}
		
		return $hours;
	}
}

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

namespace App\Providers\AppService\ConfigTrait;

trait BackupConfig
{
	/**
	 * @param string $settings
	 */
	private function updateBackupConfig($settings = 'settings')
	{
		config()->set('backup.backup.name', config('app.name'));
		config()->set('backup.monitor_backups.name', config('app.name'));
		
		// Set the backup system disks
		$disks = config('backup.backup.destination.disks');
		if (config('settings.backup.storage_disk') == '1') {
			$disks = [config('filesystems.cloud')];
		} else if (config('settings.backup.storage_disk') == '2') {
			$disks = array_merge($disks, [config('filesystems.cloud')]);
		}
		$disks = array_unique($disks);
		config()->set('backup.backup.destination.disks', $disks);
		
		// Flags (Depreciated)
		config()->set('backup.backup.admin_flags', [
			'--disable-notifications' => (config('settings.backup.disable_notifications')) ? true : false,
		]);
		
		// Notifications
		config()->set('backup.notifications.mail.from.address', config('mail.from.address'));
		config()->set('backup.notifications.mail.from.name', config('mail.from.name'));
		if (config('settings.app.email')) {
			config()->set('backup.notifications.mail.to', config('settings.app.email'));
		}
		
		// Backup Cleanup Settings
		$keepAllBackupsForDays = (int)config('settings.backup.keep_all_backups_for_days');
		if ($keepAllBackupsForDays > 0) {
			config()->set('backup.cleanup.default_strategy.keep_all_backups_for_days', $keepAllBackupsForDays);
		}
		$keepDailyBackupsForDays = (int)config('settings.backup.keep_daily_backups_for_days');
		if ($keepDailyBackupsForDays > 0) {
			config()->set('backup.cleanup.default_strategy.keep_daily_backups_for_days', $keepDailyBackupsForDays);
		}
		$keepWeeklyBackupsForWeeks = (int)config('settings.backup.keep_weekly_backups_for_weeks');
		if ($keepWeeklyBackupsForWeeks > 0) {
			config()->set('backup.cleanup.default_strategy.keep_weekly_backups_for_weeks', $keepWeeklyBackupsForWeeks);
		}
		$keepMonthlyBackupsForMonths = (int)config('settings.backup.keep_monthly_backups_for_months');
		if ($keepMonthlyBackupsForMonths > 0) {
			config()->set('backup.cleanup.default_strategy.keep_monthly_backups_for_months', $keepMonthlyBackupsForMonths);
		}
		$keepYearlyBackupsForYears = (int)config('settings.backup.keep_yearly_backups_for_years');
		if ($keepYearlyBackupsForYears > 0) {
			config()->set('backup.cleanup.default_strategy.keep_yearly_backups_for_years', $keepYearlyBackupsForYears);
		}
		$maximumStorageInMegabytes = (int)config('settings.backup.maximum_storage_in_megabytes');
		if ($maximumStorageInMegabytes > 0) {
			config()->set('backup.cleanup.default_strategy.delete_oldest_backups_when_using_more_megabytes_than', $maximumStorageInMegabytes);
		}
		
		// Monitor Backups
		$monitorBackups = [
			[
				'name'          => config('app.name'),
				'disks'         => $disks,
				'health_checks' => [
					\Spatie\Backup\Tasks\Monitor\HealthChecks\MaximumAgeInDays::class          => ($keepAllBackupsForDays > 0) ? $keepAllBackupsForDays : 1,
					\Spatie\Backup\Tasks\Monitor\HealthChecks\MaximumStorageInMegabytes::class => ($maximumStorageInMegabytes > 0) ? $maximumStorageInMegabytes : 5000,
				],
			],
		];
		config()->set('backup.monitor_backups', $monitorBackups);
	}
}

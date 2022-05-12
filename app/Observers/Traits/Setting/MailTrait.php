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

namespace App\Observers\Traits\Setting;

use App\Models\Permission;
use App\Models\User;
use App\Notifications\ExampleMail;
use Illuminate\Support\Facades\Notification;
use Prologue\Alerts\Facades\Alert;

trait MailTrait
{
	/**
	 * Updating
	 *
	 * @param $setting
	 * @param $original
	 * @return bool
	 */
	public function mailUpdating($setting, $original)
	{
		$validateDriverParameters = $setting->value['validate_driver'] ?? false;
		if ($validateDriverParameters) {
			$this->updateMailConfig($setting);
			
			/*
			 * Send Example Email
			 *
			 * With the sendmail driver, in local environment,
			 * this test email cannot be found if you have not familiar with the sendmail configuration
			 */
			try {
				if (config('settings.app.email')) {
					Notification::route('mail', config('settings.app.email'))->notify(new ExampleMail());
				} else {
					$admins = User::permission(Permission::getStaffPermissions())->get();
					if ($admins->count() > 0) {
						Notification::send($admins, new ExampleMail());
					}
				}
			} catch (\Throwable $e) {
				$message = $e->getMessage();
				
				if (isAdminPanel()) {
					Alert::error($message)->flash();
				} else {
					flash($message)->error();
				}
				
				return false;
			}
		}
	}
	
	/**
	 * @param $setting
	 */
	private function updateMailConfig($setting)
	{
		if (!isset($setting->value) || !is_array($setting->value)) {
			return;
		}
		
		// Mail
		config()->set('mail.default', $setting->value['driver'] ?? null);
		config()->set('mail.from.name', config('settings.app.name'));
		
		// SMTP
		if (config('mail.default') == 'smtp') {
			config()->set('mail.mailers.smtp.host', $setting->value['smtp_host'] ?? null);
			config()->set('mail.mailers.smtp.port', $setting->value['smtp_port'] ?? null);
			config()->set('mail.mailers.smtp.encryption', $setting->value['smtp_encryption'] ?? null);
			config()->set('mail.mailers.smtp.username', $setting->value['smtp_username'] ?? null);
			config()->set('mail.mailers.smtp.password', $setting->value['smtp_password'] ?? null);
			config()->set('mail.from.address', $setting->value['smtp_email_sender'] ?? null);
		}
		
		// Sendmail
		if (config('mail.default') == 'sendmail') {
			config()->set('mail.mailers.sendmail.path', $setting->value['sendmail_path'] ?? null);
			config()->set('mail.from.address', $setting->value['sendmail_email_sender'] ?? null);
		}
		
		// Mailgun
		if (config('mail.default') == 'mailgun') {
			config()->set('services.mailgun.domain', $setting->value['mailgun_domain'] ?? null);
			config()->set('services.mailgun.secret', $setting->value['mailgun_secret'] ?? null);
			config()->set('services.mailgun.endpoint', $setting->value['mailgun_endpoint'] ?? null);
			config()->set('mail.mailers.smtp.host', $setting->value['mailgun_host'] ?? null);
			config()->set('mail.mailers.smtp.port', $setting->value['mailgun_port'] ?? null);
			config()->set('mail.mailers.smtp.encryption', $setting->value['mailgun_encryption'] ?? null);
			config()->set('mail.mailers.smtp.username', $setting->value['mailgun_username'] ?? null);
			config()->set('mail.mailers.smtp.password', $setting->value['mailgun_password'] ?? null);
			config()->set('mail.from.address', $setting->value['mailgun_email_sender'] ?? null);
		}
		
		// Postmark
		if (config('mail.default') == 'postmark') {
			config()->set('services.postmark.token', $setting->value['postmark_token'] ?? null);
			config()->set('mail.mailers.smtp.host', $setting->value['postmark_host'] ?? null);
			config()->set('mail.mailers.smtp.port', $setting->value['postmark_port'] ?? null);
			config()->set('mail.mailers.smtp.encryption', $setting->value['postmark_encryption'] ?? null);
			config()->set('mail.mailers.smtp.username', $setting->value['postmark_username'] ?? null);
			config()->set('mail.mailers.smtp.password', $setting->value['postmark_password'] ?? null);
			config()->set('mail.from.address', $setting->value['postmark_email_sender'] ?? null);
		}
		
		// Amazon SES
		if (config('mail.default') == 'ses') {
			config()->set('services.ses.key', $setting->value['ses_key'] ?? null);
			config()->set('services.ses.secret', $setting->value['ses_secret'] ?? null);
			config()->set('services.ses.region', $setting->value['ses_region'] ?? null);
			config()->set('mail.mailers.smtp.host', $setting->value['ses_host'] ?? null);
			config()->set('mail.mailers.smtp.port', $setting->value['ses_port'] ?? null);
			config()->set('mail.mailers.smtp.encryption', $setting->value['ses_encryption'] ?? null);
			config()->set('mail.mailers.smtp.username', $setting->value['ses_username'] ?? null);
			config()->set('mail.mailers.smtp.password', $setting->value['ses_password'] ?? null);
			config()->set('mail.from.address', $setting->value['ses_email_sender'] ?? null);
		}
		
		// Sparkpost
		if (config('mail.default') == 'sparkpost') {
			config()->set('services.sparkpost.secret', $setting->value['sparkpost_secret'] ?? null);
			config()->set('mail.mailers.smtp.host', $setting->value['sparkpost_host'] ?? null);
			config()->set('mail.mailers.smtp.port', $setting->value['sparkpost_port'] ?? null);
			config()->set('mail.mailers.smtp.encryption', $setting->value['sparkpost_encryption'] ?? null);
			config()->set('mail.mailers.smtp.username', $setting->value['sparkpost_username'] ?? null);
			config()->set('mail.mailers.smtp.password', $setting->value['sparkpost_password'] ?? null);
			config()->set('mail.from.address', $setting->value['sparkpost_email_sender'] ?? null);
		}
	}
}

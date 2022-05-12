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

trait MailConfig
{
	/**
	 * @param string $settings
	 */
	private function updateMailConfig($settings = 'settings')
	{
		// Mail
		config()->set('mail.default', env('MAIL_MAILER', env('MAIL_DRIVER', config('settings.mail.driver'))));
		config()->set('mail.from.name', env('MAIL_FROM_NAME', config('settings.app.name')));
		
		// Old Config
		$mailHost = config('settings.mail.host');
		$mailPort = config('settings.mail.port');
		$mailEncryption = config('settings.mail.encryption');
		$mailUsername = config('settings.mail.username');
		$mailPassword = config('settings.mail.password');
		$mailSender = config('settings.mail.email_sender');
		
		// SMTP
		if (config('mail.default') == 'smtp') {
			config()->set('mail.mailers.smtp.host', env('MAIL_HOST', config('settings.mail.smtp_host', $mailHost)));
			config()->set('mail.mailers.smtp.port', env('MAIL_PORT', config('settings.mail.smtp_port', $mailPort)));
			config()->set('mail.mailers.smtp.encryption', env('MAIL_ENCRYPTION', config('settings.mail.smtp_encryption', $mailEncryption)));
			config()->set('mail.mailers.smtp.username', env('MAIL_USERNAME', config('settings.mail.smtp_username', $mailUsername)));
			config()->set('mail.mailers.smtp.password', env('MAIL_PASSWORD', config('settings.mail.smtp_password', $mailPassword)));
			config()->set('mail.from.address', env('MAIL_FROM_ADDRESS', config('settings.mail.smtp_email_sender', $mailSender)));
		}
		
		// Sendmail
		if (config('mail.default') == 'sendmail') {
			config()->set('mail.mailers.sendmail.path', env('MAIL_SENDMAIL', config('settings.mail.sendmail_path')));
			config()->set('mail.from.address', env('MAIL_FROM_ADDRESS', config('settings.mail.sendmail_email_sender', $mailSender)));
		}
		
		// Mailgun
		if (config('mail.default') == 'mailgun') {
			config()->set('services.mailgun.domain', env('MAILGUN_DOMAIN', config('settings.mail.mailgun_domain')));
			config()->set('services.mailgun.secret', env('MAILGUN_SECRET', config('settings.mail.mailgun_secret')));
			config()->set('services.mailgun.endpoint', env('MAILGUN_ENDPOINT', config('settings.mail.mailgun_endpoint', 'api.mailgun.net')));
			config()->set('mail.mailers.smtp.host', env('MAIL_HOST', config('settings.mail.mailgun_host', $mailHost)));
			config()->set('mail.mailers.smtp.port', env('MAIL_PORT', config('settings.mail.mailgun_port', $mailPort)));
			config()->set('mail.mailers.smtp.encryption', env('MAIL_ENCRYPTION', config('settings.mail.mailgun_encryption', $mailEncryption)));
			config()->set('mail.mailers.smtp.username', env('MAIL_USERNAME', config('settings.mail.mailgun_username', $mailUsername)));
			config()->set('mail.mailers.smtp.password', env('MAIL_PASSWORD', config('settings.mail.mailgun_password', $mailPassword)));
			config()->set('mail.from.address', env('MAIL_FROM_ADDRESS', config('settings.mail.mailgun_email_sender', $mailSender)));
		}
		
		// Postmark
		if (config('mail.default') == 'postmark') {
			config()->set('services.postmark.token', env('POSTMARK_TOKEN', config('settings.mail.postmark_token')));
			config()->set('mail.mailers.smtp.host', env('MAIL_HOST', config('settings.mail.postmark_host', $mailHost)));
			config()->set('mail.mailers.smtp.port', env('MAIL_PORT', config('settings.mail.postmark_port', $mailPort)));
			config()->set('mail.mailers.smtp.encryption', env('MAIL_ENCRYPTION', config('settings.mail.postmark_encryption', $mailEncryption)));
			config()->set('mail.mailers.smtp.username', env('MAIL_USERNAME', config('settings.mail.postmark_username', $mailUsername)));
			config()->set('mail.mailers.smtp.password', env('MAIL_PASSWORD', config('settings.mail.postmark_password', $mailPassword)));
			config()->set('mail.from.address', env('MAIL_FROM_ADDRESS', config('settings.mail.postmark_email_sender', $mailSender)));
		}
		
		// Amazon SES
		if (config('mail.default') == 'ses') {
			config()->set('services.ses.key', env('SES_KEY', config('settings.mail.ses_key')));
			config()->set('services.ses.secret', env('SES_SECRET', config('settings.mail.ses_secret')));
			config()->set('services.ses.region', env('SES_REGION', config('settings.mail.ses_region')));
			config()->set('mail.mailers.smtp.host', env('MAIL_HOST', config('settings.mail.ses_host', $mailHost)));
			config()->set('mail.mailers.smtp.port', env('MAIL_PORT', config('settings.mail.ses_port', $mailPort)));
			config()->set('mail.mailers.smtp.encryption', env('MAIL_ENCRYPTION', config('settings.mail.ses_encryption', $mailEncryption)));
			config()->set('mail.mailers.smtp.username', env('MAIL_USERNAME', config('settings.mail.ses_username', $mailUsername)));
			config()->set('mail.mailers.smtp.password', env('MAIL_PASSWORD', config('settings.mail.ses_password', $mailPassword)));
			config()->set('mail.from.address', env('MAIL_FROM_ADDRESS', config('settings.mail.ses_email_sender', $mailSender)));
		}
		
		// Sparkpost
		if (config('mail.default') == 'sparkpost') {
			config()->set('services.sparkpost.secret', env('SPARKPOST_SECRET', config('settings.mail.sparkpost_secret')));
			config()->set('mail.mailers.smtp.host', env('MAIL_HOST', config('settings.mail.sparkpost_host', $mailHost)));
			config()->set('mail.mailers.smtp.port', env('MAIL_PORT', config('settings.mail.sparkpost_port', $mailPort)));
			config()->set('mail.mailers.smtp.encryption', env('MAIL_ENCRYPTION', config('settings.mail.sparkpost_encryption', $mailEncryption)));
			config()->set('mail.mailers.smtp.username', env('MAIL_USERNAME', config('settings.mail.sparkpost_username', $mailUsername)));
			config()->set('mail.mailers.smtp.password', env('MAIL_PASSWORD', config('settings.mail.sparkpost_password', $mailPassword)));
			config()->set('mail.from.address', env('MAIL_FROM_ADDRESS', config('settings.mail.sparkpost_email_sender', $mailSender)));
		}
	}
}

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

trait SmsConfig
{
	/**
	 * @param string $settings
	 */
	private function updateSmsConfig($settings = 'settings')
	{
		// Nexmo
		if (config('settings.sms.driver') == 'nexmo') {
			config()->set('services.nexmo.key', config('settings.sms.nexmo_key'));
			config()->set('services.nexmo.secret', config('settings.sms.nexmo_secret'));
			config()->set('services.nexmo.sms_from', config('settings.sms.nexmo_from'));
		}
		
		// Twilio
		if (config('settings.sms.driver') == 'twilio') {
			config()->set('twilio-notification-channel.username', config('settings.sms.twilio_username'));
			config()->set('twilio-notification-channel.password', config('settings.sms.twilio_password'));
			config()->set('twilio-notification-channel.auth_token', config('settings.sms.twilio_auth_token'));
			config()->set('twilio-notification-channel.account_sid', config('settings.sms.twilio_account_sid'));
			config()->set('twilio-notification-channel.from', config('settings.sms.twilio_from'));
			config()->set('twilio-notification-channel.alphanumeric_sender', config('settings.sms.twilio_alpha_sender'));
			config()->set('twilio-notification-channel.sms_service_sid', config('settings.sms.twilio_sms_service_sid'));
			config()->set('twilio-notification-channel.debug_to', config('settings.sms.twilio_debug_to'));
		}
	}
}

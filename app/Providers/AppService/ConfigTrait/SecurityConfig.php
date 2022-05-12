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

trait SecurityConfig
{
	/**
	 * @param string $settings
	 */
	private function updateSecurityConfig($settings = 'settings')
	{
		// CAPTCHA
		config()->set('captcha.option', env('CAPTCHA', config('settings.security.captcha')));
		if (config('settings.security.captcha') == 'custom') {
			if (config('settings.security.captcha_length') && config('settings.security.captcha_length') >= 3 && config('settings.security.captcha_length') <= 8) {
				config()->set('captcha.custom.length', config('settings.security.captcha_length'));
			}
			if (config('settings.security.captcha_width') && config('settings.security.captcha_width') >= 100 && config('settings.security.captcha_width') <= 300) {
				config()->set('captcha.custom.width', config('settings.security.captcha_width'));
			}
			if (config('settings.security.captcha_height') && config('settings.security.captcha_height') >= 30 && config('settings.security.captcha_height') <= 150) {
				config()->set('captcha.custom.height', config('settings.security.captcha_height'));
			}
			if (config('settings.security.captcha_quality')) {
				config()->set('captcha.custom.quality', config('settings.security.captcha_quality'));
			}
			if (config('settings.security.captcha_math')) {
				config()->set('captcha.custom.math', config('settings.security.captcha_math'));
			}
			if (config('settings.security.captcha_expire')) {
				config()->set('captcha.custom.expire', config('settings.security.captcha_expire'));
			}
			if (config('settings.security.captcha_encrypt')) {
				config()->set('captcha.custom.encrypt', config('settings.security.captcha_encrypt'));
			}
			if (config('settings.security.captcha_lines')) {
				config()->set('captcha.custom.lines', config('settings.security.captcha_lines'));
			}
			if (config('settings.security.captcha_bgImage')) {
				config()->set('captcha.custom.bgImage', config('settings.security.captcha_bgImage'));
			}
			if (config('settings.security.captcha_bgColor')) {
				config()->set('captcha.custom.bgColor', config('settings.security.captcha_bgColor'));
			}
			if (config('settings.security.captcha_sensitive')) {
				config()->set('captcha.custom.sensitive', config('settings.security.captcha_sensitive'));
			}
			if (config('settings.security.captcha_angle')) {
				config()->set('captcha.custom.angle', config('settings.security.captcha_angle'));
			}
			if (config('settings.security.captcha_sharpen')) {
				config()->set('captcha.custom.sharpen', config('settings.security.captcha_sharpen'));
			}
			if (config('settings.security.captcha_blur')) {
				config()->set('captcha.custom.blur', config('settings.security.captcha_blur'));
			}
			if (config('settings.security.captcha_invert')) {
				config()->set('captcha.custom.invert', config('settings.security.captcha_invert'));
			}
			if (config('settings.security.captcha_contrast')) {
				config()->set('captcha.custom.contrast', config('settings.security.captcha_contrast'));
			}
		}
		// reCAPTCHA
		if (config('settings.security.captcha') == 'recaptcha') {
			config()->set('recaptcha.version', env('RECAPTCHA_VERSION', config('settings.security.recaptcha_version', 'v2')));
			if (config('recaptcha.version') == 'v3') {
				config()->set('recaptcha.site_key', env('RECAPTCHA_SITE_KEY', config('settings.security.recaptcha_v3_site_key')));
				config()->set('recaptcha.secret_key', env('RECAPTCHA_SECRET_KEY', config('settings.security.recaptcha_v3_secret_key')));
			} else {
				config()->set('recaptcha.site_key', env('RECAPTCHA_SITE_KEY', config('settings.security.recaptcha_v2_site_key')));
				config()->set('recaptcha.secret_key', env('RECAPTCHA_SECRET_KEY', config('settings.security.recaptcha_v2_secret_key')));
			}
			$recaptchaSkipIps = env('RECAPTCHA_SKIP_IPS', config('settings.security.recaptcha_skip_ips', ''));
			$recaptchaSkipIpsArr = preg_split('#[:,;\s]+#ui', $recaptchaSkipIps);
			$recaptchaSkipIpsArr = array_filter(array_map('trim', $recaptchaSkipIpsArr));
			config()->set('recaptcha.skip_ip', $recaptchaSkipIpsArr);
		}
	}
}

<?php
/*
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

namespace App\Providers\AppService;

use App\Helpers\SystemLocale;
use App\Models\Language;
use App\Models\Setting;
use App\Providers\AppService\ConfigTrait\BackupConfig;
use App\Providers\AppService\ConfigTrait\GeolocationConfig;
use App\Providers\AppService\ConfigTrait\MailConfig;
use App\Providers\AppService\ConfigTrait\OptimizationConfig;
use App\Providers\AppService\ConfigTrait\SecurityConfig;
use App\Providers\AppService\ConfigTrait\SkinConfig;
use App\Providers\AppService\ConfigTrait\SmsConfig;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait ConfigTrait
{
	use BackupConfig, GeolocationConfig, MailConfig, OptimizationConfig, SecurityConfig, SkinConfig, SmsConfig;
	
	/**
	 * Setup Configs
	 */
	protected function setupConfigs()
	{
		// Create Configs for Default Language
		$this->createConfigForDefaultLanguage();
		
		// Create Configs for DB Settings
		$this->createConfigForSettings();
		
		// Updating...
		
		// Global
		$this->updateConfigs();
		
		// Geolocation
		$this->updateGeolocationConfig();
		
		// Skin
		$this->updateSkinConfig();
		
		// Mail
		$this->updateMailConfig();
		
		// SMS
		$this->updateSmsConfig();
		
		// Security
		$this->updateSecurityConfig();
		
		// Optimization: Cache
		$this->updateOptimizationConfig();
		
		// Backup
		$this->updateBackupConfig();
	}
	
	/**
	 * Create Configs for Default Language
	 */
	private function createConfigForDefaultLanguage()
	{
		/*
		 * NOTE:
		 * The system master/default locale (APP_LOCALE) is set in the /.env
		 * By changing the default system language from the Admin Panel,
		 * the APP_LOCALE variable is updated with the selected language's code.
		 *
		 * Calling app()->getLocale() or config('app.locale') from the Admin Panel
		 * means usage of the APP_LOCALE variable from /.env files.
		 */
		
		try {
			// Get the DB default language
			$defaultLang = Cache::remember('language.default', $this->cacheExpiration, function () {
				return Language::where('default', 1)->first();
			});
			
			if (!empty($defaultLang)) {
				// Create DB default language settings
				config()->set('appLang', $defaultLang->toArray());
				
				// Set locale for PHP
				SystemLocale::setLocale(config('appLang.locale', 'en_US'));
			} else {
				config()->set('appLang.abbr', config('app.locale'));
			}
		} catch (\Throwable $e) {
			config()->set('appLang.abbr', config('app.locale'));
		}
	}
	
	/**
	 * Create Configs for DB Settings
	 */
	private function createConfigForSettings()
	{
		// Get some default values
		config()->set('settings.app.purchase_code', config('larapen.core.purchaseCode'));
		
		// Check DB connection and catch it
		try {
			// Get all settings from the database
			$settings = Cache::remember('settings.active', $this->cacheExpiration, function () {
				$settings = Setting::where('active', 1)->get();
				
				return $settings;
			});
			
			// Bind all settings to the Laravel config, so you can call them like
			if ($settings->count() > 0) {
				foreach ($settings as $setting) {
					if (is_array($setting->value) && count($setting->value) > 0) {
						foreach ($setting->value as $subKey => $value) {
							if (!empty($value)) {
								config()->set('settings.' . $setting->key . '.' . $subKey, $value);
							}
						}
					}
				}
			}
		} catch (\Exception $e) {
			config()->set('settings.error', true);
			config()->set('settings.app.logo', config('larapen.core.logo'));
		}
	}
	
	/**
	 * Update Global Configs
	 */
	private function updateConfigs()
	{
		// App
		if (!empty(config('settings.app.app_name'))) {
			config()->set('settings.app.name', config('settings.app.app_name'));
		}
		config()->set('app.name', config('settings.app.name'));
		if (config('settings.app.php_specific_date_format')) {
			config()->set('larapen.core.dateFormat.default', config('larapen.core.dateFormat.php'));
			config()->set('larapen.core.datetimeFormat.default', config('larapen.core.datetimeFormat.php'));
		}
		
		// $appUrl = env('APP_URL');
		$currentBaseUrl = request()->root();
		
		// Facebook
		config()->set('services.facebook.client_id', env('FACEBOOK_CLIENT_ID', config('settings.social_auth.facebook_client_id')));
		config()->set('services.facebook.client_secret', env('FACEBOOK_CLIENT_SECRET', config('settings.social_auth.facebook_client_secret')));
		config()->set('services.facebook.redirect', $currentBaseUrl . '/auth/facebook/callback');
		// LinkedIn
		config()->set('services.linkedin.client_id', env('LINKEDIN_CLIENT_ID', config('settings.social_auth.linkedin_client_id')));
		config()->set('services.linkedin.client_secret', env('LINKEDIN_CLIENT_SECRET', config('settings.social_auth.linkedin_client_secret')));
		config()->set('services.linkedin.redirect', $currentBaseUrl . '/auth/linkedin/callback');
		// Twitter
		config()->set('services.twitter.client_id', env('TWITTER_CLIENT_ID', config('settings.social_auth.twitter_client_id')));
		config()->set('services.twitter.client_secret', env('TWITTER_CLIENT_SECRET', config('settings.social_auth.twitter_client_secret')));
		config()->set('services.twitter.redirect', $currentBaseUrl . '/auth/twitter/callback');
		// Google
		config()->set('services.google.client_id', env('GOOGLE_CLIENT_ID', config('settings.social_auth.google_client_id')));
		config()->set('services.google.client_secret', env('GOOGLE_CLIENT_SECRET', config('settings.social_auth.google_client_secret')));
		config()->set('services.google.redirect', $currentBaseUrl . '/auth/google/callback');
		
		// Google Maps
		config()->set('services.googlemaps.key', env('GOOGLE_MAPS_API_KEY', config('settings.other.googlemaps_key')));
		
		// Meta-tags
		config()->set('meta-tags.title', config('settings.app.slogan'));
		config()->set('meta-tags.open_graph.site_name', config('settings.app.name'));
		config()->set('meta-tags.twitter.creator', config('settings.seo.twitter_username'));
		config()->set('meta-tags.twitter.site', config('settings.seo.twitter_username'));
		
		// Cookie Consent
		config()->set('cookie-consent.enabled', env('COOKIE_CONSENT_ENABLED', config('settings.other.cookie_consent_enabled')));
		
		// Admin panel
		config()->set('larapen.admin.skin', config('settings.style.admin_skin'));
		if (Str::contains(config('settings.footer.show_powered_by'), 'fa')) {
			config()->set('larapen.admin.show_powered_by', Str::contains(config('settings.footer.show_powered_by'), 'fa-check-square-o') ? 1 : 0);
		} else {
			config()->set('larapen.admin.show_powered_by', config('settings.footer.show_powered_by'));
		}
	}
}

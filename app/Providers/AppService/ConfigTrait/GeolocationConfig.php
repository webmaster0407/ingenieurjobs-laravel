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

namespace App\Providers\AppService\ConfigTrait;

trait GeolocationConfig
{
	/**
	 * @param string $settings
	 */
	private function updateGeolocationConfig($settings = 'settings')
	{
		// geoip
		config()->set('geoip.default', env('GEOIP_DRIVER', config('settings.geo_location.driver')));
		config()->set('geoip.randomIp', env('GEOIP_RANDOM_IP', false));
		
		// dbip
		if (config('geoip.default') == 'dbip') {
			config()->set('geoip.drivers.dbip.apiKey', env('GEOIP_DBIP_API_KEY', config('settings.geo_location.dbip_api_key')));
			config()->set('geoip.drivers.dbip.pro', env('GEOIP_DBIP_PRO', config('settings.geo_location.dbip_pro')));
		}
		
		// freegeoip
		if (config('geoip.default') == 'freegeoip') {
			config()->set('geoip.drivers.freegeoip.apiKey', env('GEOIP_FREEGEOIP_API_KEY', config('settings.geo_location.freegeoip_api_key')));
		}
		
		// ip2location
		if (config('mail.default') == 'ip2location') {
			config()->set('geoip.drivers.ip2location.apiKey', env('GEOIP_IP2LOCATION_API_KEY', config('settings.geo_location.ip2location_api_key')));
		}
		
		// ipapi
		if (config('geoip.default') == 'ipapi') {
			config()->set('geoip.drivers.ipapi.pro', env('GEOIP_IPAPI_PRO', config('settings.geo_location.ipapi_pro')));
		}
		
		// ipapico
		if (config('geoip.default') == 'ipapico') {
			//...
		}
		
		// ipgeolocation
		if (config('geoip.default') == 'ipgeolocation') {
			config()->set('geoip.drivers.ipgeolocation.apiKey', env('GEOIP_IPGEOLOCATION_API_KEY', config('settings.geo_location.ipgeolocation_api_key')));
		}
		
		// iplocation
		if (config('geoip.default') == 'iplocation') {
			config()->set('geoip.drivers.iplocation.apiKey', env('GEOIP_IPLOCATION_API_KEY', config('settings.geo_location.iplocation_api_key')));
			config()->set('geoip.drivers.iplocation.pro', env('GEOIP_IPLOCATION_PRO', config('settings.geo_location.iplocation_pro')));
		}
		
		// ipstack
		if (config('geoip.default') == 'ipstack') {
			config()->set('geoip.drivers.ipstack.accessKey', env('GEOIP_IPSTACK_ACCESS_KEY', config('settings.geo_location.ipstack_access_key')));
			config()->set('geoip.drivers.ipstack.pro', env('GEOIP_IPLOCATION_PRO', config('settings.geo_location.ipstack_pro')));
		}
		
		// maxmind_api
		if (config('geoip.default') == 'maxmind_api') {
			config()->set('geoip.drivers.maxmind_api.accountId', env('GEOIP_MAXMIND_ACCOUNT_ID', config('settings.geo_location.maxmind_api_account_id')));
			config()->set('geoip.drivers.maxmind_api.licenseKey', env('GEOIP_MAXMIND_LICENSE_KEY', config('settings.geo_location.maxmind_api_license_key')));
		}
		
		// maxmind_database
		if (config('geoip.default') == 'maxmind_database') {
			config()->set('geoip.drivers.maxmind_database.licenseKey', env('GEOIP_MAXMIND_LICENSE_KEY', config('settings.geo_location.maxmind_database_license_key')));
		}
	}
}

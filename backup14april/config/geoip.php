<?php

return [
	/*
	|--------------------------------------------------------------------------
	| GeoIP Driver Type
	|--------------------------------------------------------------------------
	|
	| Supported: 'dbip', 'freegeoip', 'ip2location', 'ipapi', 'ipapico',
	| 'ipgeolocation','iplocation', 'ipstack', 'maxmind_api', 'maxmind_database'
	|
	*/
	'default' => env('GEOIP_DRIVER', 'ipapi'),
	
	/*
	|--------------------------------------------------------------------------
	| Return random ip addresses (useful for dev envs)
	|--------------------------------------------------------------------------
	*/
	'randomIp' => env('GEOIP_RANDOM_IP', false),
	
	/*
    |--------------------------------------------------------------------------
    | Drivers
    |--------------------------------------------------------------------------
    */
	'drivers' => [
		/*
		 * Website: https://db-ip.com/
		 * No API key required
		 */
		'dbip' => [
			'apiKey' => env('GEOIP_DBIP_API_KEY'),
			'pro'    => false,
		],
		
		/*
		 * Website: https://freegeoip.app/
		 */
		'freegeoip' => [
			'apiKey' => env('GEOIP_FREEGEOIP_API_KEY'),
		],
		
		/*
		 * Website: https://www.ip2location.com/
		 */
		'ip2location' => [
			'apiKey' => env('GEOIP_IP2LOCATION_API_KEY'),
		],
		
		/*
		 * Website: https://ip-api.com/
		 * No API key required
		 */
		'ipapi' => [
			'pro' => false,
		],
		
		/*
		 * Website: https://ipapi.co/
		 * No API key required
		 */
		'ipapico' => [
			//...
		],
		
		/*
		 * Website: https://ipgeolocation.io/
		 */
		'ipgeolocation' => [
			'apiKey' => env('GEOIP_IPGEOLOCATION_API_KEY'),
		],
		
		/*
		 * Website: https://www.iplocation.net/
		 * No API key is required.
		 */
		'iplocation' => [
			'apiKey' => env('GEOIP_IPLOCATION_API_KEY'),
			'pro'    => false,
		],
		
		/*
		 * Website: https://ipstack.com/
		 */
		'ipstack' => [
			'accessKey' => env('GEOIP_IPSTACK_ACCESS_KEY'),
			'pro'       => false,
		],
		
		/*
		 * Website: https://dev.maxmind.com/geoip/docs/web-services
		 */
		'maxmind_api' => [
			'accountId'  => env('GEOIP_MAXMIND_ACCOUNT_ID'),
			'licenseKey' => env('GEOIP_MAXMIND_LICENSE_KEY'),
		],
		
		/*
		 * https://dev.maxmind.com/geoip/geoip2/geolite2/
		 * The license key is required for database updates
		 * GeoLite2-Country.mmdb => DON'T WORK!
		 * GeoLite2-City.mmdb    => WORK!
		 */
		'maxmind_database' => [
			'database'   => env('GEOIP_MAXMIND_DATABASE', storage_path('database/maxmind/GeoLite2-City.mmdb')),
			'licenseKey' => env('GEOIP_MAXMIND_LICENSE_KEY'),
		],
	],
];

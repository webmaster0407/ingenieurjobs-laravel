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

namespace App\Http\Controllers\Web\Install\Traits\Install;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait EnvTrait
{
	/**
	 * Write configuration values to file
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return void
	 */
	private function writeEnv(Request $request)
	{
		// Get .env file path
		$filePath = base_path('.env');
		
		// Remove the old .env file (If exists)
		if (File::exists($filePath)) {
			File::delete($filePath);
		}
		
		// Set app key
		$key = 'base64:' . base64_encode(createRandomString(32));
		$key = config('app.key', $key);
		
		// Get app host
		$appHost = getHostByUrl($this->baseUrl);
		
		// Get app version
		$version = getLatestVersion();
		
		// Get database & site info
		$database = $request->session()->get('database');
		$siteInfo = $request->session()->get('site_info');
		
		// Generate .env file content
		$content = 'APP_ENV=production' . "\n";
		$content .= 'APP_KEY=' . $key . "\n";
		$content .= 'APP_DEBUG=false' . "\n";
		$content .= 'APP_URL=' . $this->baseUrl . "\n";
		$content .= 'APP_LOCALE=en' . "\n";
		$content .= 'FALLBACK_LOCALE_FOR_DB=en' . "\n";
		$content .= 'APP_VERSION=' . $version . "\n";
		$content .= "\n";
		$content .= 'PURCHASE_CODE=' . ($siteInfo['purchase_code'] ?? '') . "\n";
		$content .= 'FORCE_HTTPS=' . (Str::startsWith($this->baseUrl, 'https://') ? 'true' : 'false') . "\n";
		$content .= "\n";
		$content .= 'DB_HOST=' . ($database['host'] ?? '') . "\n";
		$content .= 'DB_PORT=' . ($database['port'] ?? '') . "\n";
		$content .= 'DB_DATABASE=' . ($database['database'] ?? '') . "\n";
		$content .= 'DB_USERNAME=' . ($database['username'] ?? '') . "\n";
		$content .= 'DB_PASSWORD="' . (isset($database['password']) ? addcslashes($database['password'], '"') : '') . '"' . "\n";
		$content .= 'DB_SOCKET=' . ($database['socket'] ?? '') . "\n";
		$content .= 'DB_TABLES_PREFIX=' . ($database['prefix'] ?? '') . "\n";
		$content .= 'DB_CHARSET=' . config('larapen.core.database.charset.default', 'utf8mb4') . "\n";
		$content .= 'DB_COLLATION=' . config('larapen.core.database.collation.default', 'utf8mb4_unicode_ci') . "\n";
		$content .= 'DB_DUMP_BINARY_PATH=' . "\n";
		$content .= "\n";
		$content .= 'APP_API_TOKEN=' . base64_encode(createRandomString(32)) . "\n";
		$content .= 'APP_HTTP_CLIENT=none' . "\n";
		$content .= "\n";
		$content .= 'IMAGE_DRIVER=gd' . "\n";
		$content .= "\n";
		$content .= 'CACHE_DRIVER=file' . "\n";
		$content .= 'CACHE_PREFIX=lc_' . "\n";
		$content .= 'QUEUE_CONNECTION=sync' . "\n";
		$content .= 'SESSION_DRIVER=file' . "\n";
		$content .= 'SESSION_LIFETIME=360' . "\n";
		$content .= "\n";
		$content .= 'LOG_CHANNEL=daily' . "\n";
		$content .= 'LOG_LEVEL=debug' . "\n";
		$content .= 'LOG_DAYS=2' . "\n";
		$content .= "\n";
		$content .= 'DISABLE_PHONE=false' . "\n";
		$content .= 'DISABLE_EMAIL=false' . "\n";
		$content .= 'DISABLE_USERNAME=true' . "\n";
		
		// Save the new .env file
		File::put($filePath, $content);
		
		// Reload .env (related to the config values)
		Artisan::call('config:clear');
	}
}

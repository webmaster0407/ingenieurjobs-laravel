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

namespace App\Http\Controllers\Web\Install;

// Increase the server resources
$iniConfigFile = __DIR__ . '/../../../Helpers/Functions/ini.php';
if (file_exists($iniConfigFile)) {
	include_once $iniConfigFile;
}

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Install\Traits\Update\ApiTrait;
use App\Http\Controllers\Web\Install\Traits\Update\CleanUpTrait;
use App\Http\Controllers\Web\Install\Traits\Update\DbTrait;
use App\Http\Controllers\Web\Install\Traits\Update\EnvTrait;
use App\Http\Controllers\Web\Install\Traits\Update\LanguageTrait;
use App\Http\Controllers\Web\Install\Traits\Update\RoutesTrait;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{
	use CleanUpTrait, DbTrait, EnvTrait, RoutesTrait, LanguageTrait, ApiTrait;
	
	protected $unsecuredUpgrade = false;
	
	/**
	 * UpdateController constructor.
	 */
	public function __construct()
	{
		// When admin user(s) cannot be found, then allow unsecured upgrade
		if (!$this->isAdminUserCanBeFound()) {
			$this->unsecuredUpgrade = true;
		}
		
		if (env('UNSECURED_UPGRADE', $this->unsecuredUpgrade) != true) {
			$this->middleware('admin');
		}
	}
	
	/**
	 * Start Upgrade
	 * URL: /upgrade
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		return view('install.update');
	}
	
	/**
	 * Run the Upgrade
	 * URL: /upgrade/run
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function run()
	{
		// Lunch the installation if the /.env file doesn't exists
		if (!File::exists(base_path('.env'))) {
			return redirect('/install');
		}
		
		// Get eventual new version value & the current (installed) version value
		$lastVersion = getLatestVersion();
		$currentVersion = getCurrentVersion();
		
		// All is Up to Date
		if (version_compare($lastVersion, $currentVersion, '<=')) {
			// If unsecured upgrade is allowed due to Admin User permission issue,
			// then, fix the Admin User Permissions
			if ($this->unsecuredUpgrade) {
				$this->fixAdminUserPermissions();
			}
			
			flash("You website is up-to-date! JobClass v" . $lastVersion . ' is currently the newest version available.')->info();
			
			return redirect('/');
		}
		
		// Installed version number is NOT found
		if (version_compare('1.0.0', $currentVersion, '>')) {
			$message = "<strong style='color:red;'>ERROR:</strong> Cannot find your current version from the '/.env' file.<br><br>";
			$message .= "<br><strong style='color:green;'>SOLUTION:</strong>";
			$message .= "<br>1. You have to add in the '/.env' file a line like: <strong>APP_VERSION=X.X</strong>";
			$message .= " (Don't forget to replace <strong>X.X</strong> by your current version)";
			$message .= "<br>2. (Optional) If you are forgot your current version, you have to see it from your backup 'config/app.php' file";
			$message .= " (it's the last element of the array).";
			$message .= "<br>3. And <strong>refresh this page</strong> to finish upgrading";
			echo '<pre>' . $message . '</pre>';
			exit();
		}
		
		// Go to maintenance with DOWN status
		Artisan::call('down');
		
		// Clear all the cache
		$this->clearCache();
		
		// Upgrade the Database
		$res = $this->upgradeDatabase($lastVersion, $currentVersion);
		if ($res === false) {
			dd('ERROR');
		}
		
		// If unsecured upgrade is allowed due to Admin User permission issue,
		// then, fix the Admin User Permissions
		if ($this->unsecuredUpgrade) {
			$this->fixAdminUserPermissions();
		}
		
		// (Try to) Sync. the multi-countries URLs with the dynamics routes
		$this->syncMultiCountriesUrlsAndRoutes();
		
		// Update the current version to last version
		$this->setCurrentVersion($lastVersion);
		
		// (Try to) Fill the missing lines in all languages files
		$this->syncLanguageFilesLines();
		
		// Check the Purchase Code
		$this->checkPurchaseCode();
		
		// Clear all the cache
		$this->clearCache();
		
		// Restore system UP status
		Artisan::call('up');
		
		// Success message
		flash("Congratulations! Your website has been upgraded to v" . $lastVersion)->success();
		
		// Redirection
		if (empty(config('settings.geo_location.default_country_code'))) {
			if (doesCountriesPageCanBeHomepage()) {
				return redirect('/');
			} else {
				return redirect(config('larapen.localization.countries_list_uri', '/'));
			}
		} else {
			return redirect('/');
		}
	}
}

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

namespace App\Http\Middleware;

use App\Helpers\Curl;
use App\Http\Controllers\Web\Install\Traits\Update\CleanUpTrait;
use App\Models\Permission;
use Closure;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class InstallationChecker
{
	use CleanUpTrait;
	
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @param null $guard
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = null)
	{
		if ($request->segment(1) == 'install') {
			// Check if installation is processing
			$InstallInProgress = false;
			if (
				!empty($request->session()->get('database_imported'))
				|| !empty($request->session()->get('cron_jobs'))
				|| !empty($request->session()->get('install_finish'))
			) {
				$InstallInProgress = true;
			}
			if ($this->alreadyInstalled($request) && !$InstallInProgress) {
				return redirect()->to('/');
			}
		} else {
			// Check if an update is available
			if (updateIsAvailable()) {
				if (auth()->check()) {
					$aclTableNames = config('permission.table_names');
					if (isset($aclTableNames['permissions'])) {
						if (Schema::hasTable($aclTableNames['permissions'])) {
							if (auth()->guard($guard)->user()->can(Permission::getStaffPermissions()) && !isDemoDomain()) {
								return redirect()->to(getRawBaseUrl() . '/upgrade');
							}
						}
					}
				} else {
					// Clear all the cache (TMP)
					$this->clearCache();
				}
			}
			
			// Check if the website is installed
			if (!$this->alreadyInstalled($request)) {
				return redirect()->to(getRawBaseUrl() . '/install');
			}
			
			$this->checkPurchaseCode($request);
		}
		
		return $next($request);
	}
	
	/**
	 * If application is already installed.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return bool|\Illuminate\Http\RedirectResponse
	 */
	public function alreadyInstalled($request)
	{
		// Check if installation has just finished
		if (!empty($request->session()->get('install_finish'))) {
			// Write file
			File::put(storage_path('installed'), '');
			
			$request->session()->forget('install_finish');
			$request->session()->flush();
			
			// Redirect to the homepage after installation
			return redirect()->to('/');
		}
		
		// Check if the app is installed
		return appIsInstalled();
	}
	
	/**
	 * Check Purchase Code
	 * ===================
	 * Checking your purchase code. If you do not have one, please follow this link:
	 * https://codecanyon.net/item/jobclass-geolocalized-job-portal-script/18776089
	 * to acquire a valid code.
	 *
	 * IMPORTANT: Do not change this part of the code to prevent any data losing issue.
	 *
	 * @param \Illuminate\Http\Request $request
	 */
	private function checkPurchaseCode($request)
	{
		$tab = [
			'install',
			admin_uri(),
		];
		
		// Don't check the purchase code for these areas (install, admin, etc. )
		if (!in_array($request->segment(1), $tab)) {
			// Make the purchase code verification only if 'installed' file exists
			if (file_exists(storage_path('installed')) && !config('settings.error')) {
				// Get purchase code from 'installed' file
				$purchaseCode = file_get_contents(storage_path('installed'));
				
				// Send the purchase code checking
				if (
					$purchaseCode == ''
					|| config('settings.app.purchase_code') == ''
					|| $purchaseCode != config('settings.app.purchase_code')
				) {
					$endpoint = getPurchaseCodeApiEndpoint(config('settings.app.purchase_code'), config('larapen.core.itemId'));
					$data = Curl::fetch($endpoint);
					
					// Check & Get cURL error by checking if 'data' is a valid json
					if (!isValidJson($data)) {
						$data = json_encode(['valid' => false, 'message' => 'Invalid purchase code. ' . strip_tags($data)]);
					}
					
					// Format object data
					$data = json_decode($data);
					
					// Check if 'data' has the valid json attributes
					if (!isset($data->valid) || !isset($data->message)) {
						$data = json_encode(['valid' => false, 'message' => 'Invalid purchase code. Incorrect data format.']);
						$data = json_decode($data);
					}
					
					// Checking
					if ($data->valid == true) {
						file_put_contents(storage_path('installed'), $data->license_code);
					} else {
						// Invalid purchase code
						dd($data->message);
					}
				}
			}
		}
	}
}

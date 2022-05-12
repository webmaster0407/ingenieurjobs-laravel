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

use App\Models\Permission;
use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class XSSProtection
{
	/**
	 * The following method loops through all request input and strips out all tags from
	 * the request. This to ensure that users are unable to set ANY HTML within the form
	 * submissions, but also cleans up input.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Exception for Install & Upgrade Routes
		if (
			Str::contains(Route::currentRouteAction(), 'InstallController')
			|| Str::contains(Route::currentRouteAction(), 'UpgradeController')
		) {
			return $next($request);
		}
		
		$this->convertZeroToNull($request);
		
		if (request()->segment(1) == admin_uri()) {
			try {
				$aclTableNames = config('permission.table_names');
				if (isset($aclTableNames['permissions'])) {
					if (!Schema::hasTable($aclTableNames['permissions'])) {
						return $next($request);
					}
				}
			} catch (\Exception $e) {
				return $next($request);
			}
			
			if (auth()->check() and auth()->user()->can(Permission::getStaffPermissions())) {
				return $next($request);
			}
		}
		
		// Get all fields values
		$input = $request->all();
		
		// Remove all HTML tags in the fields values
		// Except fields: description
		array_walk_recursive($input, function (&$input, $key) use ($request) {
			if (!in_array($key, ['description'])) {
				if (!empty($input)) {
					$input = strip_tags($input);
				}
			}
			
			if (!(isUtf8mb4Enabled() && config('settings.single.allow_emojis'))) {
					$input = stripNonUtf($input);
			}
		});
		
		// Replace the fields values
		$request->merge($input);
		
		return $next($request);
	}
	
	/**
	 * @param $request
	 */
	private function convertZeroToNull($request)
	{
		// parent_id
		if ($request->filled('parent_id')) {
			$parentId = (!empty($request->input('parent_id'))) ? $request->input('parent_id') : null;
			$request->request->set('parent_id', $parentId);
		}
	}
}

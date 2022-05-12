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

namespace App\Http\Controllers\Web\Install\Traits\Update;

use App\Helpers\DBTool;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

trait DbTrait
{
	/**
	 * Upgrade the Database & Apply actions
	 *
	 * @param $lastVersion
	 * @param $currentVersion
	 * @return bool
	 */
	private function upgradeDatabase($lastVersion, $currentVersion)
	{
		$migrationFilesPath = base_path('database/upgrade/');
		$migrationFilesPath = rtrim($migrationFilesPath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
		$versionsDirsPaths = array_filter(glob($migrationFilesPath . '*'), 'is_dir');
		
		$errorDetect = false;
		$errors = '';
		
		try {
			// Upgrade the website database version by version
			foreach ($versionsDirsPaths as $versionPath) {
				// Get the iterated version
				$version = last(explode(DIRECTORY_SEPARATOR, $versionPath));
				
				// Check the semver format
				if (!preg_match('#^([0-9]+)\.([0-9]+)\.([0-9]+)$#', $version)) {
					continue;
				}
				
				// Load and Apply migration & SQL (queries) files of the "iterated versions",
				// that are greater than the "website current version" && are lower than or equal to the "app's latest version"
				if (version_compare($version, $currentVersion, '>') && version_compare($version, $lastVersion, '<=')) {
					
					$updateFile = $migrationFilesPath . $version . '/update.php';
					if (File::exists($updateFile)) {
						require_once($updateFile);
					}
					
					$updateSqlFile = $migrationFilesPath . $version . '/update.sql';
					if (File::exists($updateSqlFile)) {
						// Import the SQL file
						$res = DBTool::importSqlFile(DB::connection()->getPdo(), $updateSqlFile, DB::getTablePrefix());
						if ($res === false) {
							$errorDetect = true;
							$errors .= '<br>Error occurred in the file: ' . $updateSqlFile;
						}
					}
					
				}
			}
			
			// Check if error is detected
			if ($errorDetect) {
				echo '<pre>' . $errors . '</pre>';
				
				return false;
			}
		} catch (\Throwable $e) {
			$errors .= '<br>Exception => ' . $e->getMessage();
			$errors .= '<br>[ FAILED ]';
			$errors .= '<br>Error occurred during the database upgrade.';
			echo '<pre>' . $errors . '</pre>';
			
			return false;
		}
		
		return true;
	}
	
	/**
	 * Check if Admin User(s) can be found
	 *
	 * @return bool
	 */
	private function isAdminUserCanBeFound()
	{
		$adminUserFound = true;
		
		$usersTable = (new User())->getTable();
		
		try {
			$firstUser = DB::table($usersTable)->orderBy('id', 'ASC')->first();
			if (!empty($firstUser)) {
				$admins = User::permission(Permission::getStaffPermissions())->get();
				if ($admins->count() > 0) {
					$adminsIds = $admins->keyBy('id')->keys()->toArray();
					if (!auth()->check()) {
						if (!in_array($firstUser->id, $adminsIds)) {
							$adminUserFound = false;
						}
					}
				} else {
					$adminUserFound = false;
				}
			}
		} catch (\Throwable $e) {
			$adminUserFound = false;
		}
		
		return $adminUserFound;
	}
	
	/**
	 * Fix Admin User Permissions
	 */
	private function fixAdminUserPermissions()
	{
		$usersTable = (new User())->getTable();
		$aclTableNames = config('permission.table_names');
		
		$firstUser = DB::table($usersTable)->orderBy('id', 'ASC')->first();
		if (!empty($firstUser)) {
			$brokenMasterAdmin = DB::table($usersTable)->where('id', $firstUser->id)->whereNull('is_admin')->first();
			if (!empty($brokenMasterAdmin)) {
				DB::table($usersTable)->where('id', '!=', $brokenMasterAdmin->id)->update(['is_admin' => 0]);
				DB::table($usersTable)->where('id', $brokenMasterAdmin->id)->update(['is_admin' => 1]);
				
				DB::statement('SET FOREIGN_KEY_CHECKS=0;');
				if (isset($aclTableNames['permissions'])) {
					DB::table($aclTableNames['permissions'])->truncate();
				}
				if (isset($aclTableNames['model_has_roles'])) {
					DB::table($aclTableNames['model_has_roles'])->truncate();
				}
				DB::statement('SET FOREIGN_KEY_CHECKS=1;');
			}
		}
	}
}

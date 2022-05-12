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

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Flysystem\Adapter\Local;

class BackupController extends Controller
{
	public $data = [];
	
	public function index()
	{
		$backupDestinationDisks = config('backup.backup.destination.disks');
		if (!is_array($backupDestinationDisks) || empty($backupDestinationDisks)) {
			dd(trans('admin.no_disks_configured'));
		}
		
		$this->data['backups'] = [];
		
		foreach ($backupDestinationDisks as $diskName) {
			$disk = Storage::disk($diskName);
			$adapter = $disk->getDriver()->getAdapter();
			$files = $disk->allFiles();
			
			// make an array of backup files, with their filesize and creation date
			foreach ($files as $k => $f) {
				// only take the zip files into account
				if (substr($f, -4) == '.zip' && $disk->exists($f)) {
					$this->data['backups'][] = [
						'file_path'     => $f,
						'file_name'     => str_replace('backups' . DIRECTORY_SEPARATOR, '', $f),
						'file_size'     => $disk->size($f),
						'last_modified' => $disk->lastModified($f),
						'disk'          => $diskName,
						'download'      => $adapter instanceof Local,
					];
				}
			}
		}
		
		// reverse the backups, so the newest one would be on top
		$this->data['backups'] = array_reverse($this->data['backups']);
		$this->data['title'] = 'Backups';
		
		return view('admin.backup', $this->data);
	}
	
	public function create()
	{
		try {
			ini_set('max_execution_time', 300);
			
			$type = request()->get('type');
			
			// Check if the mysqldump path is filled
			$dumpBinaryPath = config('database.connections.' . config('database.default') . '.dump.dump_binary_path');
			if (empty($dumpBinaryPath)) {
				$message = "The mysqldump path is not filled.
				You have to set the mysqldump's path in the variable DB_DUMP_BINARY_PATH in the /.env file.
				Note: The path need to be set without mentioning mysqldump at the end.";
				
				$data = [
					'success' => false,
					'message' => $message,
				];
				
				return response()->json($data, 400, [], JSON_UNESCAPED_UNICODE);
			}
			
			// Check if the filled mysqldump path is valid
			if ($type == 'database' || empty($type)) {
				// @todo: validate the mysqldump
			}
			
			// Set the Backup config vars
			setBackupConfig($type);
			
			// Backup's package arguments
			$flags = config('backup.backup.admin_flags', false);
			if ($type == 'database') {
				$flags = [
					'--disable-notifications' => true,
					'--only-db'               => true,
				];
			}
			if ($type == 'files') {
				$flags = [
					'--disable-notifications' => true,
					'--only-files'            => true,
				];
			}
			if ($type == 'languages') {
				$flags = [
					'--disable-notifications' => true,
					'--only-files'            => true,
				];
			}
			
			// Start the backup process
			try {
				if ($flags && is_array($flags)) {
					Artisan::call('backup:run', $flags);
				} else {
					Artisan::call('backup:run');
				}
			} catch (\Throwable $e) {
				$data = [
					'success' => false,
					'message' => $e->getMessage(),
				];
				
				return response()->json($data, 500, [], JSON_UNESCAPED_UNICODE);
			}
			
			$output = Artisan::output();
			
			// Log the results
			Log::info("Backup -- new backup started from admin interface \r\n" . $output);
			
			// Get the right error message related to the mysqldump
			$outputLines = preg_split("|\n|ui", $output);
			if (!empty($outputLines) && is_array($outputLines)) {
				$message = null;
				
				foreach ($outputLines as $line) {
					if (Str::contains($line, 'failed') && Str::contains($line, 'mysqldump')) {
						$message = $line;
						break;
					}
				}
				
				if (!empty($message)) {
					$data = [
						'success' => false,
						'message' => $message,
					];
					
					return response()->json($data, 500, [], JSON_UNESCAPED_UNICODE);
				}
			}
			
			// Return the results as a response to the ajax call
			echo $output;
		} catch (Exception $e) {
			$data = [
				'success' => false,
				'message' => $e->getMessage(),
			];
			
			return response()->json($data, 500, [], JSON_UNESCAPED_UNICODE);
		}
		
		return 'success';
	}
	
	/**
	 * Downloads a backup zip file.
	 */
	public function download()
	{
		$diskName = request()->input('disk');
		$filename = request()->input('file_name');
		
		$disk = Storage::disk($diskName);
		$adapter = $disk->getDriver()->getAdapter();
		
		if ($adapter instanceof Local) {
			$storagePath = $disk->getDriver()->getAdapter()->getPathPrefix();
			
			if ($disk->exists($filename)) {
				return response()->download($storagePath . $filename);
			} else {
				abort(404, trans('admin.backup_doesnt_exist'));
			}
		} else {
			abort(404, trans('admin.only_local_downloads_supported'));
		}
	}
	
	/**
	 * Deletes a backup file.
	 *
	 * @return string
	 */
	public function delete()
	{
		$diskName = request()->input('disk');
		$filePath = request()->input('path');
		
		$disk = Storage::disk($diskName);
		
		if ($disk->exists($filePath)) {
			$disk->delete($filePath);
			
			return 'success';
		} else {
			abort(404, trans('admin.backup_doesnt_exist'));
		}
	}
}

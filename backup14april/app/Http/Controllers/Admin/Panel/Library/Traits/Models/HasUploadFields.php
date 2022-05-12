<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

trait HasUploadFields
{
	/*
	|--------------------------------------------------------------------------
	| Methods for storing uploaded files (used in CRUD).
	|--------------------------------------------------------------------------
	*/
	
	/**
	 * Handle file upload and DB storage for a file:
	 * - on CREATE
	 *     - stores the file at the destination path
	 *     - generates a name
	 *     - stores the full path in the DB;
	 * - on UPDATE
	 *     - if the value is null, deletes the file and sets null in the DB
	 *     - if the value is different, stores the different file and updates DB value.
	 *
	 * @param  [type] $value            Value for that column sent from the input.
	 * @param  [type] $attributeName   Model attribute name (and column in the db).
	 * @param  [type] $disk             Filesystem disk used to store files.
	 * @param  [type] $destinationPath Path in disk where to store the files.
	 */
	public function uploadFileToDisk($value, $attributeName, $disk, $destinationPath)
	{
		$request = request()->instance();
		
		// if a new file is uploaded, delete the file from the disk
		if ($request->hasFile($attributeName) &&
			$this->{$attributeName} &&
			$this->{$attributeName} != null) {
			Storage::disk($disk)->delete($this->{$attributeName});
			$this->attributes[$attributeName] = null;
		}
		
		// if the file input is empty, delete the file from the disk
		if (is_null($value) && $this->{$attributeName} != null) {
			Storage::disk($disk)->delete($this->{$attributeName});
			$this->attributes[$attributeName] = null;
		}
		
		// if a new file is uploaded, store it on disk and its filename in the database
		if ($request->hasFile($attributeName) && $request->file($attributeName)->isValid()) {
			
			// 1. Generate a new file name
			$file = $request->file($attributeName);
			$newFileName = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
			
			// 2. Move the new file to the correct path
			$filePath = $file->storeAs($destinationPath, $newFileName, $disk);
			
			// 3. Save the complete path to the database
			$this->attributes[$attributeName] = $filePath;
		}
	}
	
	/**
	 * Customized - Handle file upload and DB storage for a file
	 * NOTE: Used in JobClass
	 *
	 * @param $value
	 * @param $field_name
	 * @param $attribute_name
	 * @param $disk
	 * @param $destination_path
	 */
	public function uploadFileToDiskCustom($value, $field_name, $attribute_name, $disk, $destination_path)
	{
		$request = request()->instance();
		
		// if a new file is uploaded, delete the file from the disk
		if ($request->hasFile($field_name) &&
			$this->{$attribute_name} &&
			$this->{$attribute_name} != null) {
			Storage::disk($disk)->delete($this->{$attribute_name});
			$this->attributes[$attribute_name] = null;
		}
		
		// if the file input is empty, delete the file from the disk
		if (is_null($value) && $this->{$attribute_name} != null) {
			Storage::disk($disk)->delete($this->{$attribute_name});
			$this->attributes[$attribute_name] = null;
		}
		
		// if a new file is uploaded, store it on disk and its filename in the database
		if ($request->hasFile($field_name) && $request->file($field_name)->isValid()) {
			
			// 1. Generate a new file name
			$file = $request->file($field_name);
			$new_file_name = md5($file->getClientOriginalName().time()).'.'.$file->getClientOriginalExtension();
			
			// 2. Move the new file to the correct path
			$file_path = $file->storeAs($destination_path, $new_file_name, $disk);
			
			// 3. Save the complete path to the database
			$this->attributes[$attribute_name] = $file_path;
		}
	}
	
	/**
	 * Handle multiple file upload and DB storage:
	 * - if files are sent
	 *     - stores the files at the destination path
	 *     - generates random names
	 *     - stores the full path in the DB, as JSON array;
	 * - if a hidden input is sent to clear one or more files
	 *     - deletes the file
	 *     - removes that file from the DB.
	 *
	 * @param  [type] $value            Value for that column sent from the input.
	 * @param  [type] $attributeName   Model attribute name (and column in the db).
	 * @param  [type] $disk             Filesystem disk used to store files.
	 * @param  [type] $destinationPath Path in disk where to store the files.
	 */
	public function uploadMultipleFilesToDisk($value, $attributeName, $disk, $destinationPath)
	{
		$request = request()->instance();
		
		$attributeValue = (array)$this->{$attributeName};
		$filesToClear = $request->get('clear_' . $attributeName);
		
		// if a file has been marked for removal,
		// delete it from the disk and from the db
		if ($filesToClear) {
			$attributeValue = (array)$this->{$attributeName};
			foreach ($filesToClear as $key => $filename) {
				Storage::disk($disk)->delete($filename);
				$attributeValue = Arr::where($attributeValue, function ($value, $key) use ($filename) {
					return $value != $filename;
				});
			}
		}
		
		// if a new file is uploaded, store it on disk and its filename in the database
		if ($request->hasFile($attributeName)) {
			foreach ($request->file($attributeName) as $file) {
				if ($file->isValid()) {
					// 1. Generate a new file name
					$newFileName = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
					
					// 2. Move the new file to the correct path
					$filePath = $file->storeAs($destinationPath, $newFileName, $disk);
					
					// 3. Add the public path to the database
					$attributeValue[] = $filePath;
				}
			}
		}
		
		$this->attributes[$attributeName] = json_encode($attributeValue);
	}
}

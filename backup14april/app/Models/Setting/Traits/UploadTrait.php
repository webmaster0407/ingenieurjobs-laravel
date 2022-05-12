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

namespace App\Models\Setting\Traits;

use App\Helpers\Files\Storage\StorageDisk;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Prologue\Alerts\Facades\Alert;

trait UploadTrait
{
	// Set Upload
	protected static function upload($setting, $value, $params)
	{
		$disk = StorageDisk::getDisk();
		
		$attribute_name = $params['attribute'];
		$destination_path = $params['path'];
		
		// If 'logo' value doesn't exist, don't make the upload and save data
		if (!isset($value[$attribute_name])) {
			return $value;
		}
		
		// If the image was erased
		if (empty($value[$attribute_name])) {
			// Delete the image from disk
			if (isset($setting->value) && isset($setting->value[$attribute_name])) {
				if (!empty($params['default'])) {
					if (!Str::contains($setting->value[$attribute_name], $params['default'])) {
						$disk->delete($setting->value[$attribute_name]);
					}
				} else {
					$disk->delete($setting->value[$attribute_name]);
				}
			}
			
			// Set null in the database column
			$value[$attribute_name] = null;
			
			return $value;
		}
		
		// If laravel request->file('filename') resource OR base64 was sent, store it in the db
		try {
			if (fileIsUploaded($value[$attribute_name])) {
				// Get file extension
				$extension = getUploadedFileExtension($value[$attribute_name]);
				if (empty($extension)) {
					$extension = 'jpg';
				}
				
				// Init. Intervention
				$image = Image::make($value[$attribute_name]);
				
				// Get the image original dimensions
				$imgWidth = (int)$image->width();
				$imgHeight = (int)$image->height();
				
				// Check if 'Auto Orientate' is enabled
				$autoOrientateIsEnabled = false;
				if (isset($params['orientate']) && $params['orientate']) {
					$autoOrientateIsEnabled = exifExtIsEnabled();
				}
				
				// Fix the Image Orientation
				if ($autoOrientateIsEnabled) {
					$image = $image->orientate();
				}
				
				// If the original dimensions are higher than the resize dimensions
				// OR the 'upsize' option is enable, then resize the image
				if ($imgWidth > $params['width'] || $imgHeight > $params['height'] || $params['upsize'] == '1') {
					// Resize
					$image = $image->resize($params['width'], $params['height'], function ($constraint) use ($params) {
						if (isset($params['ratio']) && $params['ratio'] == '1') {
							$constraint->aspectRatio();
						}
						if (isset($params['upsize']) && $params['upsize'] == '1') {
							$constraint->upsize();
						}
					});
				}
				
				// Encode the Image!
				$image = $image->encode($extension, $params['quality']);
				
				// Generate a filename.
				$filename = uniqid($params['filename']) . '.' . $extension;
				
				// Store the image on disk.
				$disk->put($destination_path . '/' . $filename, $image->stream()->__toString());
				
				// Save the path to the database
				$value[$attribute_name] = $destination_path . '/' . $filename;
			} else {
				// Retrieve current value without upload a new file.
				if (!empty($params['default'])) {
					if (Str::contains($value[$attribute_name], $params['default'])) {
						$value[$attribute_name] = null;
					} else {
						if (!Str::startsWith($value[$attribute_name], $destination_path)) {
							$value[$attribute_name] = $destination_path . last(explode($destination_path, $value[$attribute_name]));
						}
					}
				} else {
					if ($value[$attribute_name] == url('/')) {
						$value[$attribute_name] = null;
					} else {
						if (!Str::startsWith($value[$attribute_name], $destination_path)) {
							$value[$attribute_name] = $destination_path . last(explode($destination_path, $value[$attribute_name]));
						}
					}
				}
			}
			
			return $value;
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$value[$attribute_name] = null;
			
			return $value;
		}
	}
}

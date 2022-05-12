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

namespace App\Http\Controllers\Api\User\Update;

use App\Http\Resources\UserResource;
use App\Models\User;

trait Photo
{
	/**
	 * Update the User's Photo
	 *
	 * @param \App\Models\User $user
	 * @param $request
	 * @return array
	 */
	public function updatePhoto(User $user, $request)
	{
		$data = [
			'success' => true,
			'result'  => null,
		];
		
		if (empty($user)) {
			$data['success'] = false;
			$data['message'] = t('User not found');
		}
		
		// Check logged User
		if (auth('sanctum')->user()->id != $user->id) {
			$data['success'] = false;
			$data['message'] = t('Unauthorized action');
		}
		
		$file = $request->file('photo');
		if (empty($file)) {
			$data['success'] = false;
			$data['message'] = 'File is empty.';
		}
		
		if (!isset($data['success']) || !$data['success']) {
			return $data;
		}
		
		$extra = [];
		
		// Save the picture
		$user->photo = $file;
		$user->save();
		
		$data['message'] = t('Your photo or avatar have been updated');
		$data['result'] = (new UserResource($user))->toArray($request);
		
		if (request()->header('X-AppType') == 'web') {
			// Get the FileInput plugin's data
			$fileInput = [];
			$fileInput['initialPreview'] = [];
			$fileInput['initialPreviewConfig'] = [];
			
			if (!empty($user->photo)) {
				// Get Deletion Url
				$initialPreviewConfigUrl = url('account/photo/delete');
				
				// Extra Fields for AJAX file removal (related to the $initialPreviewConfigUrl)
				$initialPreviewConfigExtra = [
					'_token'       => csrf_token(),
					'_method'      => 'PUT',
					'name'         => $user->name,
					'phone'        => $user->phone,
					'email'        => $user->email,
					'remove_photo' => 1,
				];
				
				// Build Bootstrap-FileInput plugin's parameters
				$fileInput['initialPreview'][] = imgUrl($user->photo, 'user');
				
				$fileInput['initialPreviewConfig'][] = [
					'caption' => basename($user->photo),
					'size'    => (isset($this->disk) && $this->disk->exists($user->photo)) ? (int)$this->disk->size($user->photo) : 0,
					'url'     => $initialPreviewConfigUrl,
					'key'     => $user->id,
					'extra'   => $initialPreviewConfigExtra,
				];
			}
			$extra['fileInput'] = $fileInput;
		}
		
		$data['extra'] = $extra;
		
		return $data;
	}
	
	/**
	 * Remove the User's photo
	 *
	 * @param \App\Models\User $user
	 * @param $request
	 * @return array
	 */
	public function removePhoto(User $user, $request)
	{
		$data = [
			'success' => true,
			'result'  => null,
		];
		
		if (empty($user)) {
			$data['success'] = false;
			$data['message'] = t('User not found');
		}
		
		// Check logged User
		if (auth('sanctum')->user()->id != $user->id) {
			$data['success'] = false;
			$data['message'] = t('Unauthorized action');
		}
		
		if (!isset($data['success']) || !$data['success']) {
			return $data;
		}
		
		// Remove all the current user's photos, by removing his photos' directory.
		$destinationPath = substr($user->photo, 0, strrpos($user->photo, '/'));
		if ($this->disk->exists($destinationPath)) {
			$this->disk->deleteDirectory($destinationPath);
		}
		
		// Delete the photo path from DB
		$user->photo = null;
		$user->save();
		
		$data['message'] = t('Your photo or avatar has been deleted');
		$data['result'] = (new UserResource($user))->toArray($request);
		
		return $data;
	}
}

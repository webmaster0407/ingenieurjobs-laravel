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

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Scopes\VerifiedScope;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait Update
{
	/**
	 * @param $id
	 * @param \App\Http\Requests\UserRequest $request
	 * @return mixed
	 */
	public function updateDetails($id, UserRequest $request)
	{
		$user = User::withoutGlobalScopes([VerifiedScope::class])->where('id', $id)->first();
		
		if (empty($user)) {
			return $this->respondNotFound(t('User not found'));
		}
		
		// Check logged User
		// Get the User Personal Access Token Object
		$personalAccess = request()->user()->tokens()->where('id', getApiAuthToken())->first();
		if (!empty($personalAccess)) {
			if ($personalAccess->tokenable_id != $user->id) {
				return $this->respondUnauthorized();
			}
		} else {
			return $this->respondUnauthorized();
		}
		
		// Check if these fields has changed
		$emailChanged = $request->filled('email') && $request->input('email') != $user->email;
		$phoneChanged = $request->filled('phone') && $request->input('phone') != $user->phone;
		$usernameChanged = $request->filled('username') && $request->input('username') != $user->username;
		
		// Conditions to Verify User's Email or Phone
		$emailVerificationRequired = config('settings.mail.email_verification') == 1 && $emailChanged;
		$phoneVerificationRequired = config('settings.sms.phone_verification') == 1 && $phoneChanged;
		
		// Update User
		$input = $request->only($user->getFillable());
		foreach ($input as $key => $value) {
			if ($request->has($key)) {
				if (in_array($key, ['email', 'phone', 'username', 'password']) && empty($value)) {
					continue;
				}
				$user->{$key} = $value;
			}
		}
		
		// Checkboxes
		$user->phone_hidden = (int)$request->input('phone_hidden');
		$user->disable_comments = (int)$request->input('disable_comments');
		$user->accept_marketing_offers = (int)$request->input('accept_marketing_offers');
		if ($request->filled('accept_terms')) {
			$user->accept_terms = (int)$request->input('accept_terms');
		}
		
		// Other fields
		if ($request->filled('password')) {
			if (isset($input['password'])) {
				$user->password = Hash::make($input['password']);
			}
		}
		
		// Email verification key generation
		if ($emailVerificationRequired) {
			$user->email_token = md5(microtime() . mt_rand());
			$user->verified_email = 0;
		}
		
		// Phone verification key generation
		if ($phoneVerificationRequired) {
			$user->phone_token = mt_rand(100000, 999999);
			$user->verified_phone = 0;
		}
		
		$extra = [];
		
		// Don't logout the User (See User model)
		$extra['emailOrPhoneChanged'] = false;
		if ($emailVerificationRequired || $phoneVerificationRequired) {
			$extra['emailOrPhoneChanged'] = true;
		}
		
		// Save
		$user->save();
		
		$data = [
			'success' => true,
			'message' => t('account_details_has_updated_successfully'),
			'result'  => (new UserResource($user))->toArray($request),
		];
		
		// Send Email Verification message
		if ($emailVerificationRequired) {
			$extra['sendEmailVerification'] = $this->sendEmailVerification($user);
			if (
				array_key_exists('success', $extra['sendEmailVerification'])
				&& array_key_exists('message', $extra['sendEmailVerification'])
			) {
				$extra['mail']['success'] = $extra['sendEmailVerification']['success'];
				$extra['mail']['message'] = $extra['sendEmailVerification']['message'];
			}
		}
		
		// Send Phone Verification message
		if ($phoneVerificationRequired) {
			$extra['sendPhoneVerification'] = $this->sendPhoneVerification($user);
			if (
				array_key_exists('success', $extra['sendPhoneVerification'])
				&& array_key_exists('message', $extra['sendPhoneVerification'])
			) {
				$extra['mail']['success'] = $extra['sendPhoneVerification']['success'];
				$extra['mail']['message'] = $extra['sendPhoneVerification']['message'];
			}
		}
		
		// User's Photo
		$extra['photo'] = [];
		if ($request->hasFile('photo')) {
			// Update User's Photo
			$extra['photo'] = $this->updatePhoto($user, $request);
		} else {
			// Remove User's Photo
			$photoRemovalRequested = ($request->filled('remove_photo') && $request->input('remove_photo'));
			if ($photoRemovalRequested) {
				$extra['photo'] = $this->removePhoto($user, $request);
			}
		}
		if (isset($extra['photo']['success'])) {
			// Update the '$data' result value, If photo is uploaded successfully
			if ($extra['photo']['success']) {
				if (isset($extra['photo']['result']) && !empty($extra['photo']['result'])) {
					$data['result'] = $extra['photo']['result'];
					unset($extra['photo']['result']);
				}
			}
			
			// Update the '$data' infos, If error found during the photo upload
			if (!$extra['photo']['success'] && isset($extra['photo']['message'])) {
				$data['success'] = $extra['photo']['success'];
				$data['message'] = $extra['photo']['message'];
				unset($extra['photo']['success']);
				unset($extra['photo']['message']);
			}
		}
		
		$data['extra'] = $extra;
		
		return $this->respondUpdated($data);
	}
}

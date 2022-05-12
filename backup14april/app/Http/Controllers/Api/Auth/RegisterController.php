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

namespace App\Http\Controllers\Api\Auth;

use App\Helpers\Ip;
use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Api\Auth\Traits\VerificationTrait;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Permission;
use App\Models\Resume;
use App\Models\User;
use App\Notifications\UserActivated;
use App\Notifications\UserNotification;
use App\Helpers\Auth\Traits\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class RegisterController extends BaseController
{
	use RegistersUsers, VerificationTrait;
	
	/**
	 * Register
	 *
	 * @param \App\Http\Requests\UserRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function register(UserRequest $request)
	{
		// Conditions to Verify User's Email or Phone
		$emailVerificationRequired = config('settings.mail.email_verification') == 1 && $request->filled('email');
		$phoneVerificationRequired = config('settings.sms.phone_verification') == 1 && $request->filled('phone');
		
		// New User
		$user = new User();
		$input = $request->only($user->getFillable());
		foreach ($input as $key => $value) {
			$user->{$key} = $value;
		}
		
		// Checkboxes
		$user->phone_hidden = $request->input('phone_hidden');
		
		// Other fields
		$user->country_code = $request->input('country_code', config('country.code'));
		$user->language_code = $request->input('language_code', config('app.locale'));
		$user->password = Hash::make($request->input('password'));
		$user->ip_addr = $request->input('ip_addr', Ip::get());
		
		if ($request->filled('email') || $request->filled('phone')) {
			$user->verified_email = 1;
			$user->verified_phone = 1;
			
			// Email verification key generation
			if ($emailVerificationRequired) {
				$user->email_token = md5(microtime() . mt_rand());
				$user->verified_email = 0;
			}
			
			// Mobile activation key generation
			if ($phoneVerificationRequired) {
				$user->phone_token = mt_rand(100000, 999999);
				$user->verified_phone = 0;
			}
		}
		
		// Save
		$user->save();
		
		// Add Job Seeker Resume
		if ($request->input('user_type_id') == 2) {
			if ($request->hasFile('filename')) {
				// Save User's Resume
				$resumeInfo = [
					'country_code' => $request->input('country_code', config('country.code')),
					'user_id'      => $user->id,
					'active'       => 1,
				];
				$resume = new Resume($resumeInfo);
				$resume->save();
				
				// Upload User's Resume
				$resume->filename = $request->file('filename');
				$resume->save();
			}
		}
		
		$userResource = (new UserResource($user))->toArray($request);
		
		$data = [];
		
		$data['success'] = true;
		$data['message'] = t('your_account_has_been_created');
		$data['result'] = $userResource;
		
		$extra = [];
		
		// Send Admin Notification Email
		if (config('settings.mail.admin_notification') == 1) {
			try {
				// Get all admin users
				$admins = User::permission(Permission::getStaffPermissions())->get();
				if ($admins->count() > 0) {
					Notification::send($admins, new UserNotification($user));
				}
			} catch (\Throwable $e) {
			}
		}
		
		// Send Verification Link or Code
		if ($emailVerificationRequired || $phoneVerificationRequired) {
			
			// Email
			if ($emailVerificationRequired) {
				// Send Verification Link by Email
				$extra['sendEmailVerification'] = $this->sendEmailVerification($user);
				if (
					array_key_exists('success', $extra['sendEmailVerification'])
					&& array_key_exists('message', $extra['sendEmailVerification'])
				) {
					$extra['mail']['success'] = $extra['sendEmailVerification']['success'];
					$extra['mail']['message'] = $extra['sendEmailVerification']['message'];
				}
			}
			
			// Phone
			if ($phoneVerificationRequired) {
				// Send Verification Code by SMS
				$extra['sendPhoneVerification'] = $this->sendPhoneVerification($user);
				if (
					array_key_exists('success', $extra['sendPhoneVerification'])
					&& array_key_exists('message', $extra['sendPhoneVerification'])
				) {
					$extra['mail']['success'] = $extra['sendPhoneVerification']['success'];
					$extra['mail']['message'] = $extra['sendPhoneVerification']['message'];
				}
			}
			
			// Send Confirmation Email or SMS,
			// When User clicks on the Verification Link or enters the Verification Code.
			// Done in the "app/Observers/UserObserver.php" file.
			
		} else {
			
			// Send Confirmation Email or SMS
			if (config('settings.mail.confirmation') == 1) {
				try {
					$user->notify(new UserActivated($user));
				} catch (\Throwable $e) {
					$extra['mail']['success'] = false;
					$extra['mail']['message'] = $e->getMessage();
				}
			}
			
			// Log in the User, If Email or Phone verification is not required
			// By creating & storing his API access token
			$deviceName = $request->input('device_name', 'Desktop Web');
			$token = $user->createToken($deviceName);
			
			$extra['authToken'] = $token->plainTextToken;
			$extra['tokenType'] = 'Bearer';
			
		}
		
		$data['extra'] = $extra;
		
		return $this->apiResponse($data);
	}
}

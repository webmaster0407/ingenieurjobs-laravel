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
use App\Models\Blacklist;
use App\Models\Permission;
use App\Models\Post;
use App\Models\User;
use App\Models\Scopes\ReviewedScope;
use App\Models\Scopes\VerifiedScope;
use App\Notifications\SendPasswordAndEmailVerification;
use App\Notifications\UserActivated;
use App\Notifications\UserNotification;
use App\Helpers\Auth\Traits\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Laravel\Socialite\Facades\Socialite;

/**
 * @group Social Auth
 */
class SocialController extends BaseController
{
	use AuthenticatesUsers;
	
	// Supported Providers
	// Stateless authentication is not available for the Twitter driver, which uses OAuth 1.0 for authentication.
	private $network = ['facebook', 'linkedin', 'google'];
	
	private $serviceError = "Unknown error. The service does not work.";
	
	/**
	 * Get target URL
	 *
	 * @param $provider string Example: facebook
	 * @return mixed
	 */
	public function getProviderTargetUrl($provider)
	{
		// Get the Provider and verify that if it's supported
		// $provider = request()->segment(3);
		if (!in_array($provider, $this->network)) {
			abort(404);
		}
		
		// Redirect to the Provider's website
		try {
			return Socialite::driver($provider)->stateless()->redirect()->getTargetUrl();
		} catch (\Throwable $e) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = $this->serviceError;
			}
			
			return $this->respondError($message);
		}
	}
	
	/**
	 * Get user info
	 *
	 * @param $provider string Example: facebook
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function handleProviderCallback($provider)
	{
		// Get the Provider and verify that if it's supported
		// $provider = request()->segment(3);
		if (!in_array($provider, $this->network)) {
			abort(404);
		}
		
		$data = [];
		$extra = [];
		
		// API CALL - GET USER FROM PROVIDER
		try {
			$userData = Socialite::driver($provider)->stateless()->user();
			
			// Data not found
			if (!$userData) {
				return $this->respondError(t('unknown_error_please_try_again'));
			}
			
			// Email not found
			if (!$userData || !filter_var($userData->getEmail(), FILTER_VALIDATE_EMAIL)) {
				return $this->respondError(t('email_not_found_at_provider', ['provider' => mb_ucfirst($provider)]));
			}
		} catch (\Throwable $e) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = $this->serviceError;
			}
			
			return $this->respondError($message);
		}
		
		// Debug
		// dd($userData);
		
		// DATA MAPPING
		try {
			$mapUser = [];
			
			// Get the user's name (First Name & Last Name)
			$mapUser['name'] = (isset($userData->name) && is_string($userData->name)) ? $userData->name : '';
			if ($mapUser['name'] == '') {
				// facebook
				if (isset($userData->user['first_name']) && isset($userData->user['last_name'])) {
					$mapUser['name'] = $userData->user['first_name'] . ' ' . $userData->user['last_name'];
				}
			}
			if ($mapUser['name'] == '') {
				// linkedin
				$mapUser['name'] = (isset($userData->user['formattedName'])) ? $userData->user['formattedName'] : '';
				if ($mapUser['name'] == '') {
					if (isset($userData->user['firstName']) && isset($userData->user['lastName'])) {
						$mapUser['name'] = $userData->user['firstName'] . ' ' . $userData->user['lastName'];
					}
				}
			}
			
			// Check if the user's email address has been banned
			$bannedUser = Blacklist::ofType('email')->where('entry', $userData->getEmail())->first();
			if (!empty($bannedUser)) {
				return $this->respondError(t('This user has been banned'));
			}
			
			// GET LOCAL USER
			$user = User::withoutGlobalScopes([VerifiedScope::class])->where('provider', $provider)->where('provider_id', $userData->getId())->first();
			
			// CREATE LOCAL USER IF DON'T EXISTS
			if (empty($user)) {
				// Before... Check if user has not signup with an email
				$user = User::withoutGlobalScopes([VerifiedScope::class])->where('email', $userData->getEmail())->first();
				if (empty($user)) {
					// Generate random password
					$randomPassword = getRandomPassword(8);
					
					// Register the User (As New User)
					$userInfo = [
						'country_code'   => config('country.code', config('ipCountry.code')),
						'language_code'  => config('app.locale'),
						'name'           => $mapUser['name'],
						'email'          => $userData->getEmail(),
						'password'       => Hash::make($randomPassword),
						'ip_addr'        => Ip::get(),
						'verified_email' => 1,
						'verified_phone' => 1,
						'provider'       => $provider,
						'provider_id'    => $userData->getId(),
						'created_at'     => date('Y-m-d H:i:s'),
					];
					$user = new User($userInfo);
					$user->save();
					
					// Send Generated Password by Email
					try {
						$user->notify(new SendPasswordAndEmailVerification($user, $randomPassword));
					} catch (\Throwable $e) {
					}
					
					// Update Ads created by this email
					if (isset($user->id) && $user->id > 0) {
						Post::withoutGlobalScopes([VerifiedScope::class, ReviewedScope::class])->where('email', $userInfo['email'])->update(['user_id' => $user->id]);
					}
					
					// Send Admin Notification Email
					if (config('settings.mail.admin_notification') == 1) {
						try {
							// Get all admin users
							$admins = User::permission(Permission::getStaffPermissions())->get();
							if ($admins->count() > 0) {
								Notification::send($admins, new UserNotification($user));
							}
						} catch (\Throwable $e) {
							return $this->respondError($e->getMessage());
						}
					}
					
					/*
					// Send Confirmation Email or SMS
					if (config('settings.mail.confirmation') == 1) {
						try {
							$user->notify(new UserActivated($user));
						} catch (\Throwable $e) {
							return $this->respondError($e->getMessage());
						}
					}
					*/
					
				} else {
					// Update 'created_at' if empty (for time ago module)
					if (empty($user->created_at)) {
						$user->created_at = date('Y-m-d H:i:s');
					}
					$user->verified_email = 1;
					$user->verified_phone = 1;
					$user->save();
				}
			} else {
				// Update 'created_at' if empty (for time ago module)
				if (empty($user->created_at)) {
					$user->created_at = date('Y-m-d H:i:s');
				}
				$user->verified_email = 1;
				$user->verified_phone = 1;
				$user->save();
			}
			
			// GET A SESSION FOR USER
			$guard = (isFromApi()) ? 'sanctum' : null;
			if (auth($guard)->loginUsingId($user->id)) {
				$data['success'] = true;
				$data['result'] = null;
				
				if ($guard == 'sanctum') {
					// Create the API access token
					$deviceName = ucfirst($provider);
					$token = $user->createToken($deviceName);
					
					$extra['authToken'] = $token->plainTextToken;
					$extra['tokenType'] = 'Bearer';
					
					// JobClass
					// If the user has not yet specified the type of account, redirect him to his user area where he can do so.
					$extra['userTypeId'] = $user->userType->id ?? null;
					
					$data['extra'] = $extra;
				}
				
				return $this->apiResponse($data);
			} else {
				return $this->respondError(t('Error on user\'s login.'));
			}
		} catch (\Throwable $e) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = $this->serviceError;
			}
			
			return $this->respondError($message);
		}
	}
}

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

namespace App\Http\Controllers\Web\Auth;

use App\Helpers\Ip;
use App\Helpers\UrlGen;
use App\Http\Controllers\Web\FrontController;
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
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends FrontController
{
	use AuthenticatesUsers;
	
	// If not logged in redirect to
	protected $loginPath = 'login';
	
	// After you've logged in redirect to
	protected $redirectTo = 'account';
	
	// JobClass
	// If the user has not yet specified the type of account, redirect him to his user area where he can do so.
	protected $myAccountPath = 'account';
	
	// Supported Providers
	private $network = ['facebook', 'linkedin', 'twitter', 'google'];
	private $networkChecker;
	
	private $serviceError = "Unknown error. The service does not work.";
	
	/**
	 * SocialController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		// Set default URLs
		$isFromLoginPage = Str::contains(url()->previous(), '/' . UrlGen::loginPath());
		$this->loginPath = $isFromLoginPage ? UrlGen::loginPath() : url()->previous();
		$this->redirectTo = $isFromLoginPage ? 'account' : url()->previous();
		
		// Providers Checker
		$this->networkChecker = [
			'facebook' => (config('settings.social_auth.facebook_client_id') && config('settings.social_auth.facebook_client_secret')),
			'linkedin' => (config('settings.social_auth.linkedin_client_id') && config('settings.social_auth.linkedin_client_secret')),
			'twitter'  => (config('settings.social_auth.twitter_client_id') && config('settings.social_auth.twitter_client_secret')),
			'google'   => (config('settings.social_auth.google_client_id') && config('settings.social_auth.google_client_secret')),
		];
	}
	
	/**
	 * Redirect the user to the Provider authentication page.
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function redirectToProvider()
	{
		// Get the Provider and verify that if it's supported
		$provider = request()->segment(2);
		if (!in_array($provider, $this->network)) {
			abort(404);
		}
		
		// Check the Provider is enabled
		$providerIsEnabled = (array_key_exists($provider, $this->networkChecker) && $this->networkChecker[$provider]);
		if (!$providerIsEnabled) {
			return redirect(UrlGen::loginPath(), 301);
		}
		
		// If previous page is not the Login page...
		if (!Str::contains(url()->previous(), UrlGen::loginPath())) {
			// Save the previous URL to retrieve it after success or failed login.
			session()->put('url.intended', url()->previous());
		}
		
		// Redirect to the Provider's website
		try {
			return Socialite::driver($provider)->redirect();
		} catch (\Throwable $e) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = $this->serviceError;
			}
			flash($message)->error();
			
			return redirect($this->loginPath);
		}
	}
	
	/**
	 * Obtain the user information from Provider.
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function handleProviderCallback()
	{
		// Get the Provider and verify that if it's supported
		$provider = request()->segment(2);
		if (!in_array($provider, $this->network)) {
			abort(404);
		}
		
		// Check and retrieve previous URL to show the login error on it.
		if (session()->has('url.intended')) {
			$this->loginPath = session()->get('url.intended');
		}
		
		// Get the Country Code
		$countryCode = config('country.code', config('ipCountry.code'));
		
		// API CALL - GET USER FROM PROVIDER
		try {
			$userData = Socialite::driver($provider)->user();
			
			// Data not found
			if (!$userData) {
				$message = t("unknown_error_please_try_again");
				flash($message)->error();
				
				return redirect($this->loginPath);
			}
			
			// Email not found
			if (!$userData || !filter_var($userData->getEmail(), FILTER_VALIDATE_EMAIL)) {
				$message = t('email_not_found_at_provider', ['provider' => mb_ucfirst($provider)]);
				flash($message)->error();
				
				return redirect($this->loginPath);
			}
		} catch (\Exception $e) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = $this->serviceError;
			}
			flash($message)->error();
			
			return redirect($this->loginPath);
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
				$message = t('This user has been banned');
				flash($message)->error();
				
				return redirect()->guest(UrlGen::loginPath());
			}
			
			// GET LOCAL USER
			$user = User::withoutGlobalScopes([VerifiedScope::class])->where('provider', $provider)->where('provider_id', $userData->getId())->first();
			
			// CREATE LOCAL USER IF DON'T EXISTS
			if (empty($user)) {
				// Before... Check if user has not sign up with an email
				$user = User::withoutGlobalScopes([VerifiedScope::class])->where('email', $userData->getEmail())->first();
				if (empty($user)) {
					// Generate random password
					$randomPassword = getRandomPassword(8);
					
					// Register the User (As New User)
					$userInfo = [
						'country_code'   => $countryCode,
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
					} catch (\Exception $e) {
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
						} catch (\Exception $e) {
							flash($e->getMessage())->error();
						}
					}
					
					/*
					// Send Confirmation Email or SMS
					if (config('settings.mail.confirmation') == 1) {
						try {
							$user->notify(new UserActivated($user));
						} catch (\Exception $e) {
							flash($e->getMessage())->error();
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
			if (auth()->loginUsingId($user->id)) {
				// Create the API access token
				$deviceName = ucfirst($provider);
				$token = $user->createToken($deviceName);
				session()->put('authToken', $token->plainTextToken);
				
				// JobClass
				// If the user has not yet specified the type of account, redirect him to his user area where he can do so.
				if (empty($user->userType)) {
					$this->redirectTo = $this->myAccountPath;
				}
				
				return redirect()->intended($this->redirectTo);
			} else {
				$message = t("Error on user's login.");
				flash($message)->error();
				
				return redirect($this->loginPath);
			}
		} catch (\Exception $e) {
			$message = $e->getMessage();
			if (empty($message)) {
				$message = $this->serviceError;
			}
			flash($message)->error();
			
			return redirect($this->loginPath);
		}
	}
}

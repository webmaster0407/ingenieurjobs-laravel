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

namespace App\Http\Controllers\Web\Auth\Traits;

use App\Http\Requests\LoginRequest;
use App\Models\Permission;
use App\Models\User;

trait WebBasedLoginTrait
{
	/**
	 * @param \App\Http\Requests\LoginRequest $request
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function webBasedLogin(LoginRequest $request)
	{
		$errorMessage = trans('auth.failed');
		
		try {
			// If the class is using the ThrottlesLogins trait, we can automatically throttle
			// the login attempts for this application. We'll key this by the username and
			// the IP address of the client making these requests into this application.
			if (method_exists($this, 'hasTooManyLoginAttempts') && $this->hasTooManyLoginAttempts($request)) {
				$this->fireLockoutEvent($request);
				
				return $this->sendLockoutResponse($request);
			}
			
			// Get the right login field
			$loginField = getLoginField($request->input('login'));
			
			// Get credentials values
			$credentials = [
				$loginField => $request->input('login'),
				'password'  => $request->input('password'),
				'blocked'   => 0,
			];
			if (in_array($loginField, ['email', 'phone'])) {
				$credentials['verified_' . $loginField] = 1;
			} else {
				$credentials['verified_email'] = 1;
				$credentials['verified_phone'] = 1;
			}
			
			// Auth the User
			if (auth()->attempt($credentials, $request->has('remember_me'))) {
				$user = User::find(auth()->user()->getAuthIdentifier());
				
				// Redirect admin users to the Admin panel
				if ($user->hasAllPermissions(Permission::getStaffPermissions())) {
					return redirect(admin_uri());
				}
				
				return redirect()->intended($this->redirectTo);
			}
		} catch (\Throwable $e) {
			$errorMessage = $e->getMessage();
		}
		
		// If the login attempt was unsuccessful we will increment the number of attempts
		// to log in and redirect the user back to the login form. Of course, when this
		// user surpasses their maximum number of attempts they will get locked out.
		$this->incrementLoginAttempts($request);
		
		// Check and retrieve previous URL to show the login error on it.
		if (session()->has('url.intended')) {
			$this->loginPath = session()->get('url.intended');
		}
		
		return redirect($this->loginPath)->withErrors(['error' => $errorMessage])->withInput();
	}
}

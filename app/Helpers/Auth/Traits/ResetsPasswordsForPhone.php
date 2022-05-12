<?php

namespace App\Helpers\Auth\Traits;

use App\Helpers\UrlGen;
use App\Models\PasswordReset;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

trait ResetsPasswordsForPhone
{
	/**
	 * URL: Token Form
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showTokenRequestForm()
	{
		return view('token');
	}
	
	/**
	 * Reset password token
	 *
	 * Reset password token verification
	 *
	 * @param Request $request
	 * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function sendResetToken(Request $request)
	{
		// Form validation
		// $this->validate($request, ['code' => 'required']);
		$request->validate(['code' => 'required']);
		
		// Check if the token exists
		$passwordReset = PasswordReset::where('token', $request->input('code'))->first();
		if (empty($passwordReset)) {
			$msg = t('The entered code is invalid');
			if (isFromApi()) {
				return $this->respondError($msg);
			} else {
				return back()->withErrors(['code' => $msg])->withInput();
			}
		}
		
		if (isFromApi()) {
			return $this->respondSuccess();
		} else {
			// Go to Reset Password Form
			return redirect('password/reset/' . $request->input('code'));
		}
	}
	
	/**
	 * Reset the given user's password.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function resetForPhone(Request $request)
	{
		// Form validation
		$rules = [
			'token'    => ['required'],
			'login'    => ['required'],
			'password' => [
				'required',
				'between:' . config('larapen.core.passwordLength.min', 6) . ',' . config('larapen.core.passwordLength.max', 60),
				'confirmed'
			],
		];
		$request->validate($rules);
		
		// Check if Password request exists
		$passwordReset = PasswordReset::query()
			->where('token', $request->input('token'))
			->where('phone', $request->input('login'))
			->first();
		if (empty($passwordReset)) {
			$msg = t('The code does not match your email or phone number');
			if (isFromApi()) {
				return $this->respondError($msg);
			} else {
				return redirect()->back()->withErrors(['token' => $msg])->withInput();
			}
		}
		
		// Get User
		$user = User::where('phone', $passwordReset->phone)->first();
		if (empty($passwordReset)) {
			$msg = t('The entered value is not registered with us');
			if (isFromApi()) {
				return $this->respondError($msg);
			} else {
				return redirect()->back()->withErrors(['phone' => $msg])->withInput();
			}
		}
		
		// Update the User
		$user->password = Hash::make($request->input('password'));
		
		$user->verified_phone = 1;
		if ($user->can(Permission::getStaffPermissions())) {
			// Email address auto-verified (for Admin Users)
			$user->verified_email = 1;
		}
		
		$user->save();
		
		// Remove password reset data
		$passwordReset->delete();
		
		// Response
		if (isFromApi()) {
			// Auto-Auth the User (API)
			// By creating an API token for the User
			return $this->createUserApiToken($user, $request->input('device_name'));
		} else {
			// Auto-Auth the User (WEB)
			if (auth()->guard()->loginUsingId($user->id)) {
				return redirect()->intended('account');
			} else {
				$msg = t('These credentials do not match our records');
				flash($msg)->error();
				
				return redirect(UrlGen::loginPath());
			}
		}
	}
}

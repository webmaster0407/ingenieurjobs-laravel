<?php

namespace App\Helpers\Auth\Traits;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

trait ResetsPasswordsForEmail
{
	use RedirectsUsers;
	
	/**
	 * Display the password reset view for the given token.
	 *
	 * If no token is present, display the link request form.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param string|null $token
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showResetForm(Request $request, $token = null)
	{
		return view('auth.passwords.reset')->with([
			'token' => $token,
			'email' => $request->email,
		]);
	}
	
	/**
	 * Reset the given user's password.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
	 */
	public function resetForEmail(Request $request)
	{
		$rules = [
			'token'    => ['required'],
			'email'    => ['required', 'email'],
			'password' => [
				'required',
				'between:' . config('larapen.core.passwordLength.min', 6) . ',' . config('larapen.core.passwordLength.max', 60),
				'confirmed'
			],
		];
		$request->validate($rules);
		
		$credentials = $request->only('email', 'password', 'password_confirmation', 'token');
		
		// Here we will attempt to reset the user's password. If it is successful we
		// will update the password on an actual user model and persist it to the
		// database. Otherwise we will parse the error and return the response.
		$status = Password::reset(
			$credentials,
			function ($user, $password) use ($request) {
				$user->password = Hash::make($password);
				
				$user->setRememberToken(Str::random(60));
				
				$user->verified_email = 1;
				if ($user->can(Permission::getStaffPermissions())) {
					// Phone auto-verified (for Admin Users)
					$user->verified_phone = 1;
				}
				
				$user->save();
				
				event(new PasswordReset($user));
				
				// Auto-Auth the User (WEB)
				if (!isFromApi()) {
					auth()->guard()->login($user);
				}
			}
		);
		
		if (isFromApi()) {
			if ($status == Password::PASSWORD_RESET) {
				$user = User::where('email', $request->input('email'))
					->where('password', Hash::make($request->input('password')))
					->first();
				
				// Auto-Auth the User (API)
				// By creating an API token for the User
				if (!empty($user)) {
					return $this->createUserApiToken($user, $request->input('device_name'), trans($status));
				}
				
				return $this->respondSuccess(trans($status));
			} else {
				return $this->respondError(trans($status));
			}
		} else {
			// If the password was successfully reset, we will redirect the user back to
			// the application's home authenticated view. If there is an error we can
			// redirect them back to where they came from with their error message.
			return $status == Password::PASSWORD_RESET
				? redirect($this->redirectPath())->with('status', trans($status))
				: redirect()->back()
					->withInput($request->only('email'))
					->withErrors(['email' => trans($status)]);
		}
	}
}

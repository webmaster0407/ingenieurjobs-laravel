<?php

namespace App\Helpers\Auth\Traits;

use App\Models\PasswordReset;
use App\Models\User;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Http\Request;

trait SendsPasswordResetSms
{
	/**
	 * Send a reset code to the given user.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function sendResetTokenSms(Request $request)
	{
		// Form validation
		// $this->validate($request, ['login' => 'required']);
		$request->validate(['login' => 'required']);
		
		// Check if the phone exists
		$user = User::where('phone', $request->input('phone'))->first();
		if (empty($user)) {
			$msg = t('The entered value is not registered with us');
			if (isFromApi()) {
				return $this->respondError($msg);
			} else {
				return back()->withErrors(['phone' => $msg])->withInput();
			}
		}
		
		// Create the token in database
		$token = mt_rand(100000, 999999);
		$passwordReset = PasswordReset::where('phone', $request->input('phone'))->first();
		if (empty($passwordReset)) {
			$passwordResetInfo = [
				'email'      => null,
				'phone'      => $request->input('phone'),
				'token'      => $token,
				'created_at' => date('Y-m-d H:i:s'),
			];
			$passwordReset = new PasswordReset($passwordResetInfo);
		} else {
			$passwordReset->token = $token;
			$passwordReset->created_at = date('Y-m-d H:i:s');
		}
		$passwordReset->save();
		
		try {
			// Send the token by SMS
			$passwordReset->notify(new ResetPasswordNotification($user, $token, 'phone'));
		} catch (\Throwable $e) {
			$msg = $e->getMessage();
			if (isFromApi()) {
				return $this->respondError($msg);
			} else {
				flash($msg)->error();
			}
		}
		
		if (isFromApi()) {
			return $this->respondSuccess();
		} else {
			// Got to Token verification Form
			return redirect('password/token');
		}
	}
}

<?php

namespace App\Helpers\Auth\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

trait SendsPasswordResetEmails
{
	/**
	 * Display the form to request a password reset link.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showLinkRequestForm()
	{
		return view('auth.passwords.email');
	}
	
	/**
	 * Send a reset link to the given user.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
	 */
	public function sendResetLinkEmail(Request $request)
	{
		$request->validate(['email' => 'required|email']);
		
		$credentials = $request->only('email');
		
		// We will send the password reset link to this user. Once we have attempted
		// to send the link, we will examine the response then see the message we
		// need to show to the user. Finally, we'll send out a proper response.
		$status = Password::sendResetLink($credentials);
		
		if (isFromApi()) {
			return $status === Password::RESET_LINK_SENT
				? $this->respondSuccess(trans($status))
				: $this->respondError(trans($status));
		} else {
			return $status === Password::RESET_LINK_SENT
				? back()->with(['status' => trans($status)])
				: back()->withInput($credentials)->withErrors(['email' => trans($status)]);
		}
	}
}

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

namespace App\Http\Middleware;

use App\Helpers\UrlGen;
use App\Http\Controllers\Api\Base\ApiResponseTrait;
use App\Models\Scopes\VerifiedScope;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class IsVerifiedUser
{
	use ApiResponseTrait;
	
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next)
	{
		$guard = isFromApi() ? 'sanctum' : null;
		
		if (auth($guard)->check()) {
			if (
				auth($guard)->user()->verified_email != 1
				|| auth($guard)->user()->verified_phone != 1
			) {
				$userId = auth($guard)->user()->id;
				$user = null;
				$apiPath = isFromApi() ? 'api/' : '';
				
				if (auth($guard)->user()->verified_phone != 1) {
					if (empty($user->phone_token)) {
						if (empty($user)) {
							$user = User::withoutGlobalScopes([VerifiedScope::class])->where('id', $userId)->first();
						}
						$user->phone_token = mt_rand(100000, 999999);
					}
					
					$url = url($apiPath . 'users/' . $userId . '/verify/resend/sms');
					
					$message = t('need_to_confirm_your_account_text_phone');
					$message .= ' ' . t('Resend the verification message to verify your phone number');
					$message .= ' <a href="' . $url . '" class="btn btn-sm btn-danger">' . t('Re-send') . '</a>';
				}
				
				if (auth($guard)->user()->verified_email != 1) {
					if (empty($user->email_token)) {
						if (empty($user)) {
							$user = User::withoutGlobalScopes([VerifiedScope::class])->where('id', $userId)->first();
						}
						$user->email_token = md5(microtime() . mt_rand());
					}
					
					$url = url($apiPath . 'users/' . $userId . '/verify/resend/email');
					
					$message = t('need_to_confirm_your_account_text_email');
					$message .= ' ' . t('Resend the verification message to verify your email address');
					$message .= ' <a href="' . $url . '" class="btn btn-sm btn-danger">' . t('Re-send') . '</a>';
				}
				
				$message = $message ?? 'Error: Unauthorized';
				
				// Fill the fields tokens (If they are missed)
				if (
					!empty($user)
					&& (
						$user->phone_token != auth($guard)->user()->phone_token
						|| $user->email_token != auth($guard)->user()->email_token
					)
				) {
					$user->save();
				}
				
				// Log out and Display an (Unauthorized) error message
				if (isFromApi()) {
					
					// Revoke all tokens
					request()->user()->tokens()->delete();
					
					return $this->respondUnAuthorized($message);
					
				} else {
					
					// Get the current Country
					if (session()->has('country_code')) {
						$countryCode = session('country_code');
					}
					if (session()->has('allowMeFromReferrer')) {
						$allowMeFromReferrer = session('allowMeFromReferrer');
					}
					
					// Remove all session vars
					auth($guard)->logout();
					$request->session()->flush();
					$request->session()->regenerate();
					
					// Retrieve the current Country
					if (isset($countryCode) && !empty($countryCode)) {
						session()->put('country_code', $countryCode);
					}
					if (isset($allowMeFromReferrer) && !empty($allowMeFromReferrer)) {
						session()->put('allowMeFromReferrer', $allowMeFromReferrer);
					}
					
					if ($request->expectsJson()) {
						abort(403, $message);
					} else {
						flash($message)->error();
						
						if ($request->url() != UrlGen::login()) {
							return redirect(UrlGen::login());
						}
					}
					
				}
			}
		}
		
		return $next($request);
	}
}

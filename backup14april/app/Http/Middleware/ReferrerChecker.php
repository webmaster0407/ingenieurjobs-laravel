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

use Closure;

class ReferrerChecker
{
	/**
	 * Restrict access for demo referrers only (If the option is enabled).
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (env('ENABLE_ACCESS_BY_REFERRERS') == true) {
			return $this->allowOnlyDemoReferrers($request, $next);
		}
		
		return $next($request);
	}
	
	/**
	 * Allow only demo referrers
	 *
	 * @param $request
	 * @param \Closure $next
	 * @return \Illuminate\Http\JsonResponse|mixed
	 */
	private function allowOnlyDemoReferrers($request, Closure $next)
	{
		if (!isDemoDomain()) {
			return $next($request);
		}
		
		// Referrers patterns
		$domainPattern = str_replace('.', '\.', config('larapen.core.demo.domain'));
		$referrersPatterns = [
			'.*codecanyon\.net.*',
			'.*themeforest\.net.*',
			'.*envato\.com.*',
			'https?://' . $domainPattern,
			'https?://demo\.' . $domainPattern,
		];
		
		// First we check to see if a valid session exists
		if (!session()->has('allowMeFromReferrer')) {
			$goodReferrer = false;
			$userReferrer = request()->server('HTTP_REFERER');
			foreach ($referrersPatterns as $referrerPattern) {
				// Check to see what the referrer is
				if (preg_match('|' . $referrerPattern . '|ui', $userReferrer)) {
					session()->put('allowMeFromReferrer', 1);
					$goodReferrer = true;
					
					break;
				}
			}
			// If the user comes from a bad referrer...
			if (!$goodReferrer) {
				$message = 'Access Forbidden. Please try later.';
				if (request()->ajax()) {
					$result = [
						'success' => false,
						'msg'     => $message,
					];
					
					return response()->json($result, 401, [], JSON_UNESCAPED_UNICODE);
				} else {
					// Solution #1: Invite to come from a good referrer
					$url = 'https://codecanyon.net/item/' . strtolower(config('app.name')) . '/' . config('larapen.core.itemId');
					redirectUrl($url, 302, config('larapen.core.noCacheHeaders'));
					
					// Solution #2: Block access bad referrer and no session
					$this->accessForbidden($message);
				}
			}
		}
		
		return $next($request);
	}
	
	/**
	 * Print Access Forbidden message and exit
	 *
	 * @param $message
	 */
	private function accessForbidden($message = 'Unauthorized')
	{
		echo '<pre>';
		print_r($message);
		echo '</pre>';
		exit();
	}
}

<?php
/*
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

namespace App\Helpers;

use Illuminate\Http\Response;

class Cookie
{
	/**
	 * Set cookie
	 *
	 * @param string $name
	 * @param string|null $value
	 * @param int|null $expires
	 * @return void
	 */
	public static function set(string $name, ?string $value, ?int $expires = 0)
	{
		$expires = !empty($expires) ? $expires : (int)config('settings.other.cookie_expiration');
		$path = !empty(config('session.path')) ? config('session.path') : '/'; // string
		$domain = !empty(config('session.domain')) ? config('session.domain') : getCookieDomain(); // string
		$secure = config('session.secure'); // bool
		$httpOnly = config('session.http_only'); // bool
		$sameSite = config('session.same_site'); // string
		
		try {
			$cookieObj = cookie()->make($name, $value, $expires, $path, $domain, $secure, $httpOnly, false, $sameSite);
			cookie()->queue($cookieObj);
		} catch (\Throwable $e) {
			abort(400, $e->getMessage());
		}
	}
	
	/**
	 * Get cookie
	 *
	 * @param string $name
	 * @return array|string|null
	 */
	public static function get(string $name)
	{
		return request()->cookie($name);
	}
	
	/**
	 * Check if cookie exists
	 *
	 * @param string $name
	 * @return bool
	 */
	public static function has(string $name): bool
	{
		return request()->hasCookie($name);
	}
	
	/**
	 * Delete cookie
	 *
	 * @param string $name
	 * @return void
	 */
	public static function forget(string $name)
	{
		if (self::has($name)) {
			$path = !empty(config('session.path')) ? config('session.path') : '/'; // string
			$domain = !empty(config('session.domain')) ? config('session.domain') : getCookieDomain(); // string
			
			$cookieObj = cookie()->forget($name, $path, $domain);
			cookie()->queue($cookieObj);
		}
	}
	
	/**
	 * Delete all cookies (for current domain)
	 */
	public static function forgetAll()
	{
		$cookies = request()->cookies->all();
		if (!empty($cookies)) {
			foreach ($cookies as $name => $value) {
				self::forget($name);
			}
		}
	}
	
	/**
	 * Send redirect and setting cookie in Laravel
	 *
	 * @param $url
	 * @param $cookie
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\Response
	 */
	public static function redirect($url, $cookie = null, int $status = 302, array $headers = []): Response
	{
		if (in_array($status, [301, 302])) {
			$status = 302;
		}
		
		$response = new Response('', $status);
		
		if (!empty($cookie)) {
			$response->withCookie($cookie);
		}
		if (!empty($headers)) {
			$response->withHeaders($headers);
		}
		$response->header('Location', $url);
		
		return $response;
	}
}

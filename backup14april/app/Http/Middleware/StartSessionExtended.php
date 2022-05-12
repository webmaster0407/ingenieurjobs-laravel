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
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Session\Middleware\StartSession;

class StartSessionExtended extends StartSession
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		return parent::handle($request, $next); // Defer to the right stuff
	}
	
	/**
	 * Store the current URL for the request if necessary.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Illuminate\Contracts\Session\Session $session
	 * @return void
	 */
	protected function storeCurrentUrl(Request $request, $session)
	{
		if (
			$request->method() === 'GET'
			&& $request->route() instanceof Route
			&& !$request->ajax()
			&& !$request->prefetch()
			&& !str_contains($request->fullUrl(), 'captcha')
			&& !str_contains($request->fullUrl(), 'js/')
			&& !str_contains($request->fullUrl(), 'lang/')
			&& !str_contains($request->fullUrl(), 'sitemaps.xml')
			&& !str_contains($request->fullUrl(), 'sitemaps/')
			&& !str_contains($request->fullUrl(), 'file')
			&& !str_contains($request->fullUrl(), 'ajax/')
			&& !str_contains($request->fullUrl(), 'common/')
		) {
			$session->setPreviousUrl($request->fullUrl());
		}
	}
}

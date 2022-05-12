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

use App\Helpers\Date;
use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class LastUserActivity
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
		// Exception for Install & Upgrade Routes
		if (
			Str::contains(Route::currentRouteAction(), 'InstallController')
			|| Str::contains(Route::currentRouteAction(), 'UpgradeController')
		) {
			return $next($request);
		}
		
		// Waiting time in minutes
		$waitingTime = 5;
		
		$guard = (isFromApi()) ? 'sanctum' : null;
		if (auth($guard)->check()) {
			if (config('settings.optimization.cache_driver') == 'array') {
				if (Schema::hasColumn('users', 'last_activity')) {
					$user = auth($guard)->user();
					if ($user->last_activity < Carbon::now(Date::getAppTimeZone())->subMinutes($waitingTime)->format('Y-m-d H:i:s')) {
						$user = auth($guard)->user();
						$user->last_activity = new Carbon;
						$user->timestamps = false;
						$user->save();
					}
				}
			} else {
				$expiresAt = Carbon::now(Date::getAppTimeZone())->addMinutes($waitingTime);
				Cache::store('file')->put('user-is-online-' . auth()->user()->id, true, $expiresAt);
			}
		}
		
		return $next($request);
	}
}

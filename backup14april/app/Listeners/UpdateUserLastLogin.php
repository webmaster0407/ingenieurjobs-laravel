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

namespace App\Listeners;

use App\Events\UserWasLogged;
use App\Helpers\Date;
use Illuminate\Support\Carbon;

class UpdateUserLastLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    /**
     * Handle the event.
     *
     * @param  UserWasLogged $event
     * @return void
     */
    public function handle(UserWasLogged $event)
    {
		try {
			$event->user->last_login_at = Carbon::now(Date::getAppTimeZone());
			$event->user->save();
		} catch (\Throwable $e) {
		}
    }
}

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

namespace App\Http\Controllers\Admin\Traits\Charts;

use App\Helpers\Arr;
use App\Helpers\Date;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Carbon;

trait MorrisTrait
{
	/**
	 * @param int $statDayNumber
	 * @return array
	 */
	private function getLatestPostsForMorris($statDayNumber = 30)
	{
		// Init.
		$statDayNumber = (is_numeric($statDayNumber)) ? $statDayNumber : 30;
		$currentDate = Carbon::now(Date::getAppTimeZone());
		
		$stats = [];
		for ($i = 1; $i <= $statDayNumber; $i++) {
			$dateObj = ($i == 1) ? $currentDate : $currentDate->subDay();
			$date = $dateObj->toDateString();
			
			// Ads Stats
			$countActivatedPosts = Post::verified()
				->where('created_at', '>=', $date)
				->where('created_at', '<=', $date . ' 23:59:59')
				->count();
			
			$countUnactivatedPosts = Post::unverified()
				->where('created_at', '>=', $date)
				->where('created_at', '<=', $date . ' 23:59:59')
				->count();
			
			$stats['posts'][$i]['y'] = mb_ucfirst(Date::format($dateObj, 'stats'));
			$stats['posts'][$i]['activated'] = $countActivatedPosts;
			$stats['posts'][$i]['unactivated'] = $countUnactivatedPosts;
		}
		
		$stats['posts'] = array_reverse($stats['posts'], true);
		
		$data = json_encode(array_values($stats['posts']), JSON_NUMERIC_CHECK);
		
		$boxData = [
			'title' => trans('admin.Ads Stats'),
			'data'  => $data,
		];
		$boxData = Arr::toObject($boxData);
		
		return $boxData;
	}
	
	/**
	 * @param int $statDayNumber
	 * @return array
	 */
	private function getLatestUsersForMorris($statDayNumber = 30)
	{
		// Init.
		$statDayNumber = (is_numeric($statDayNumber)) ? $statDayNumber : 30;
		$currentDate = Carbon::now(Date::getAppTimeZone());
		
		$stats = [];
		for ($i = 1; $i <= $statDayNumber; $i++) {
			$dateObj = ($i == 1) ? $currentDate : $currentDate->subDay();
			$date = $dateObj->toDateString();
			
			// Users Stats
			$countActivatedUsers = User::doesntHave('permissions')
				->verified()
				->where('created_at', '>=', $date)
				->where('created_at', '<=', $date . ' 23:59:59')
				->count();
			
			$countUnactivatedUsers = User::doesntHave('permissions')
				->unverified()
				->where('created_at', '>=', $date)
				->where('created_at', '<=', $date . ' 23:59:59')
				->count();
			
			$stats['users'][$i]['y'] = mb_ucfirst(Date::format($dateObj, 'stats'));
			$stats['users'][$i]['activated'] = $countActivatedUsers;
			$stats['users'][$i]['unactivated'] = $countUnactivatedUsers;
		}
		
		$stats['users'] = array_reverse($stats['users'], true);
		
		$data = json_encode(array_values($stats['users']), JSON_NUMERIC_CHECK);
		
		$boxData = [
			'title' => trans('admin.Users Stats'),
			'data'  => $data,
		];
		$boxData = Arr::toObject($boxData);
		
		return $boxData;
	}
}

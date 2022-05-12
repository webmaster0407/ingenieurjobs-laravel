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

namespace App\Observers;

use App\Models\City;
use App\Models\Post;

class CityObserver
{
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param City $city
	 * @return void
	 */
	public function deleting(City $city)
	{
		// Get Posts
		$posts = Post::where('city_id', $city->id);
		if ($posts->count() > 0) {
			foreach ($posts->cursor() as $post) {
				$post->delete();
			}
		}
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param City $city
	 * @return void
	 */
	public function updated(City $city)
	{
		// Update all the City's Posts
		$posts = Post::where('city_id', $city->id);
		if ($posts->count() > 0) {
			foreach ($posts->cursor() as $post) {
				$post->lon = $city->longitude;
				$post->lat = $city->latitude;
				$post->save();
			}
		}
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param City $city
	 * @return void
	 */
	public function saved(City $city)
	{
		// Removing Entries from the Cache
		$this->clearCache($city);
	}
	
	/**
	 * Listen to the Entry deleted event.
	 *
	 * @param City $city
	 * @return void
	 */
	public function deleted(City $city)
	{
		// Removing Entries from the Cache
		$this->clearCache($city);
	}
	
	/**
	 * Removing the Entity's Entries from the Cache
	 *
	 * @param $city
	 */
	private function clearCache($city)
	{
		try {
			cache()->flush();
		} catch (\Exception $e) {
		}
	}
}

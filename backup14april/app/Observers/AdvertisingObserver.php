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

use App\Models\Advertising;

class AdvertisingObserver
{
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param Advertising $advertising
	 * @return void
	 */
	public function saved(Advertising $advertising)
	{
		// Removing Entries from the Cache
		$this->clearCache($advertising);
	}
	
	/**
	 * Listen to the Entry deleted event.
	 *
	 * @param Advertising $advertising
	 * @return void
	 */
	public function deleted(Advertising $advertising)
	{
		// Removing Entries from the Cache
		$this->clearCache($advertising);
	}
	
	/**
	 * Removing the Entity's Entries from the Cache
	 *
	 * @param $advertising
	 */
	private function clearCache($advertising)
	{
		try {
			cache()->forget('advertising.top');
			cache()->forget('advertising.bottom');
			cache()->forget('advertising.auto');
		} catch (\Exception $e) {}
	}
}

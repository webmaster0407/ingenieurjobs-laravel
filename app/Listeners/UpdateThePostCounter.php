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

use App\Events\PostWasVisited;

class UpdateThePostCounter
{
	/**
	 * Create the event listener.
	 */
	public function __construct()
	{
		//
	}
	
	/**
	 * Handle the event.
	 *
	 * @param \App\Events\PostWasVisited $event
	 * @return bool
	 */
	public function handle(PostWasVisited $event)
	{
		$isFromApi = isFromApi();
		
		// Don't count the self-visits
		$guard = $isFromApi ? 'sanctum' : null;
		if (auth($guard)->check()) {
			if (auth($guard)->user()->id == $event->post->user_id) {
				return false;
			}
		}
		
		if ($isFromApi) {
			return $this->updateCounter($event->post, true);
		}
		
		if (!session()->has('postIsVisited')) {
			return $this->updateCounter($event->post);
		}
		
		if (session()->get('postIsVisited') != $event->post->id) {
			return $this->updateCounter($event->post);
		}
		
		return false;
	}
	
	/**
	 * @param $post
	 * @param bool $isFromApi
	 * @return bool
	 */
	public function updateCounter($post, bool $isFromApi = false): bool
	{
		try {
			// Remove|unset the 'pictures' attribute (added to limit pictures number related to a selected package)
			$attributes = $post->getAttributes();
			if (isset($attributes['pictures'])) {
				unset($attributes['pictures']);
				$post->setRawAttributes($attributes, true);
			}
			
			$post->visits = $post->visits + 1;
			$post->save();
			
			if (!$isFromApi) {
				session()->put('postIsVisited', $post->id);
			}
		} catch (\Throwable $e) {
			return false;
		}
		
		return true;
	}
}

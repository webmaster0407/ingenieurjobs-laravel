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

namespace App\Models\Thread\ThreadTrait;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Carbon;

trait LastReadTrait
{
	/**
	 * Mark a thread as read for a user.
	 *
	 * @param int $userId
	 *
	 * @return void
	 */
	public function markTheThreadAsRead($userId)
	{
		try {
			$participant = $this->getParticipantFromUser($userId);
			$participant->last_read = new Carbon();
			$participant->save();
		} catch (ModelNotFoundException $e) { // @codeCoverageIgnore
			// do nothing
		}
	}
	
	/**
	 * Mark a thread as unread for a user.
	 *
	 * @param int $userId
	 *
	 * @return void
	 */
	public function markTheThreadAsUnread($userId)
	{
		try {
			$participant = $this->getParticipantFromUser($userId);
			$participant->last_read = null;
			$participant->save();
		} catch (ModelNotFoundException $e) { // @codeCoverageIgnore
			// do nothing
		}
	}
	
	/**
	 * See if the current thread is unread by the user.
	 *
	 * @param int $userId
	 *
	 * @return bool
	 */
	public function isUnread($userId = null)
	{
		if (isset($this->updated_at) && $this->updated_at instanceof Carbon) {
			if (is_null($userId)) {
				try {
					if (collect($this)->has('last_read')) {
						if ($this->last_read === null || $this->updated_at->gt($this->last_read)) {
							return true;
						}
					}
				} catch (\Throwable $e) {
				}
			} else {
				try {
					$participant = $this->getParticipantFromUser($userId);
					
					if ($participant->last_read === null || $this->updated_at->gt($participant->last_read)) {
						return true;
					}
				} catch (ModelNotFoundException $e) { // @codeCoverageIgnore
					// do nothing
				}
			}
		}
		
		return false;
	}
	
	/**
	 * Returns array of unread messages in thread for given user.
	 *
	 * @param int $userId
	 *
	 * @return \Illuminate\Support\Collection
	 */
	public function userUnreadMessages($userId)
	{
		$messages = $this->messages()->where('user_id', '!=', $userId)->get();
		
		try {
			$participant = $this->getParticipantFromUser($userId);
		} catch (ModelNotFoundException $e) {
			return collect();
		}
		
		if (!$participant->last_read) {
			return $messages;
		}
		
		return $messages->filter(function ($message) use ($participant) {
			return $message->updated_at->gt($participant->last_read);
		});
	}
	
	/**
	 * Returns count of unread messages in thread for given user.
	 *
	 * @param int $userId
	 *
	 * @return int
	 */
	public function userUnreadMessagesCount($userId)
	{
		return $this->userUnreadMessages($userId)->count();
	}
}

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

trait IsImportantTrait
{
	/**
	 * Mark a thread as important for a user.
	 *
	 * @param int $userId
	 *
	 * @return void
	 */
	public function markAsImportant($userId)
	{
		try {
			$participant = $this->getParticipantFromUser($userId);
			$participant->is_important = 1;
			$participant->save();
		} catch (ModelNotFoundException $e) { // @codeCoverageIgnore
			// do nothing
		}
	}
	
	/**
	 * Mark a thread as not important for a user.
	 *
	 * @param int $userId
	 *
	 * @return void
	 */
	public function markAsNotImportant($userId)
	{
		try {
			$participant = $this->getParticipantFromUser($userId);
			$participant->is_important = 0;
			$participant->save();
		} catch (ModelNotFoundException $e) { // @codeCoverageIgnore
			// do nothing
		}
	}
	
	/**
	 * See if the current thread is marked as important by the user.
	 *
	 * @param null $userId
	 * @return bool
	 */
	public function isImportant($userId = null)
	{
		if (is_null($userId)) {
			try {
				if (collect($this)->has('is_important')) {
					if ($this->is_important == 1) {
						return true;
					}
				}
			} catch (\Throwable $e) {
			}
		} else {
			try {
				$participant = $this->getParticipantFromUser($userId);
				
				if ($participant->is_important == 1) {
					return true;
				}
			} catch (ModelNotFoundException $e) { // @codeCoverageIgnore
				// do nothing
			}
		}
		
		return false;
	}
}

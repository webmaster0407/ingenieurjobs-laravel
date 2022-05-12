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

use App\Models\Thread;
use App\Models\ThreadMessage;
use App\Models\ThreadParticipant;

class ThreadObserver
{
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param Thread $thread
	 * @return void
	 */
	public function deleting(Thread $thread)
	{
		$messages = ThreadMessage::where('thread_id', $thread->id);
		if ($messages->count() > 0) {
			foreach ($messages->cursor() as $message) {
				$message->forceDelete();
			}
		}
		
		$participants = ThreadParticipant::where('thread_id', $thread->id);
		if ($participants->count() > 0) {
			foreach ($participants->cursor() as $participant) {
				$participant->forceDelete();
			}
		}
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param Thread $thread
	 * @return void
	 */
	public function updated(Thread $thread)
	{
		// Update all the Thread's Messages
		if (!empty($thread->deleted_by)) {
			$messages = ThreadMessage::where('thread_id', $thread->id);
			if ($messages->count() > 0) {
				foreach ($messages->cursor() as $message) {
					$message->deleted_by = $thread->deleted_by;
					$message->timestamps = false;
					$message->save();
				}
			}
		}
	}
}

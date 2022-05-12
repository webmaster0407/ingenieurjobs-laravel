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

use App\Helpers\Files\Storage\StorageDisk;
use App\Models\ThreadMessage;
use Illuminate\Support\Str;

class ThreadMessageObserver
{
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param ThreadMessage $message
	 * @return void
	 */
	public function deleting(ThreadMessage $message)
	{
		if (!empty($message->filename)) {
			// Storage Disk Init.
			$pDisk = StorageDisk::getDisk();
			if (Str::startsWith($message->filename, 'resumes/')) {
				$pDisk = StorageDisk::getDisk('private');
			}
			
			// Delete the message's file
			if ($pDisk->exists($message->filename)) {
				$pDisk->delete($message->filename);
			}
		}
	}
}

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

use App\Models\Post;
use App\Models\PostType;

class PostTypeObserver
{
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param PostType $postType
	 * @return void
	 */
	public function deleting($postType)
	{
		// Delete all the postType's posts
		$posts = Post::where('post_type_id', $postType->id);
		if ($posts->count() > 0) {
			foreach ($posts->cursor() as $post) {
				$post->delete();
			}
		}
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param PostType $postType
	 * @return void
	 */
	public function saved(PostType $postType)
	{
		// Removing Entries from the Cache
		$this->clearCache($postType);
	}
	
	/**
	 * Listen to the Entry deleted event.
	 *
	 * @param PostType $postType
	 * @return void
	 */
	public function deleted(PostType $postType)
	{
		// Removing Entries from the Cache
		$this->clearCache($postType);
	}
	
	/**
	 * Removing the Entity's Entries from the Cache
	 *
	 * @param $postType
	 */
	private function clearCache($postType)
	{
		try {
			cache()->flush();
		} catch (\Exception $e) {
		}
	}
}

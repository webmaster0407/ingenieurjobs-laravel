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

use App\Models\Language;
use App\Models\Payment;
use App\Models\Post;
use App\Models\Scopes\ActiveScope;
use App\Notifications\PaymentApproved;

class PaymentObserver
{
	/**
	 * Listen to the Entry updating event.
	 *
	 * @param Payment $payment
	 * @return void
	 */
	public function updating(Payment $payment)
	{
		// Get the original object values
		$original = $payment->getOriginal();
		
		if (config('settings.mail.confirmation') == 1) {
			// The Payment was not approved
			if ($original['active'] != 1) {
				if ($payment->active == 1) {
					$post = Post::find($payment->post_id);
					if (!empty($post)) {
						try {
							$post->notify(new PaymentApproved($payment, $post));
						} catch (\Throwable $e) {
							flash($e->getMessage())->error();
						}
					}
				}
			}
		}
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param Payment $payment
	 * @return void
	 */
	public function saved(Payment $payment)
	{
		// Removing Entries from the Cache
		$this->clearCache($payment);
	}
	
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param Payment $payment
	 * @return void
	 */
	public function deleting(Payment $payment)
	{
		// Un-feature the payment's post if it haven't other payments
		$postOtherPayments = Payment::where('post_id', $payment->post_id);
		if ($postOtherPayments->count() <= 0) {
			$post = Post::find($payment->post_id);
			if (!empty($post)) {
				$post->featured = 0;
				$post->save();
			}
		}
	}
	
	/**
	 * Listen to the Entry deleted event.
	 *
	 * @param Payment $payment
	 * @return void
	 */
	public function deleted(Payment $payment)
	{
		// Removing Entries from the Cache
		$this->clearCache($payment);
	}
	
	/**
	 * Removing the Entity's Entries from the Cache
	 *
	 * @param $payment
	 */
	private function clearCache($payment)
	{
		if (empty($payment->post)) {
			return;
		}
		
		try {
			$post = $payment->post;
			
			cache()->forget($post->country_code . '.sitemaps.posts.xml');
			
			cache()->forget($post->country_code . '.home.getPosts.sponsored');
			cache()->forget($post->country_code . '.home.getPosts.latest');
			cache()->forget($post->country_code . '.home.getFeaturedPostsCompanies');
			
			cache()->forget('post.withoutGlobalScopes.with.city.pictures.' . $post->id);
			cache()->forget('post.with.city.pictures.' . $post->id);
			
			// Need to be caught (Independently)
			$languages = Language::withoutGlobalScopes([ActiveScope::class])->get(['abbr']);
			
			if ($languages->count() > 0) {
				foreach ($languages as $language) {
					cache()->forget('post.withoutGlobalScopes.with.city.pictures.' . $post->id . '.' . $language->abbr);
					cache()->forget('post.with.city.pictures.' . $post->id . '.' . $language->abbr);
				}
			}
			
			cache()->forget('posts.similar.category.' . $post->category_id . '.post.' . $post->id);
			cache()->forget('posts.similar.city.' . $post->city_id . '.post.' . $post->id);
		} catch (\Throwable $e) {
		}
	}
}

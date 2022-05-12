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

use App\Models\Country;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Scopes\ActiveScope;
use App\Models\Scopes\LocalizedScope;
use App\Models\Scopes\StrictActiveScope;

class PaymentMethodObserver
{
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param PaymentMethod $paymentMethod
	 * @return void
	 */
	public function deleting(PaymentMethod $paymentMethod)
	{
		/*
		// Delete the payments of this PaymentMethod
		$payments = Payment::withoutGlobalScope(StrictActiveScope::class)->where('payment_method_id', $paymentMethod->id);
		if ($payments->count() > 0) {
			foreach ($payments->cursor() as $payment) {
				// NOTE: Take account the payment plugins install/uninstall
				$payment->delete();
			}
		}
		*/
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param PaymentMethod $paymentMethod
	 * @return void
	 */
	public function saved(PaymentMethod $paymentMethod)
	{
		// Removing Entries from the Cache
		$this->clearCache($paymentMethod);
	}
	
	/**
	 * Listen to the Entry deleted event.
	 *
	 * @param PaymentMethod $paymentMethod
	 * @return void
	 */
	public function deleted(PaymentMethod $paymentMethod)
	{
		// Removing Entries from the Cache
		$this->clearCache($paymentMethod);
	}
	
	/**
	 * Removing the Entity's Entries from the Cache
	 *
	 * @param $paymentMethod
	 */
	private function clearCache($paymentMethod)
	{
		try {
			// Need to be caught (Independently)
			$countries = Country::withoutGlobalScopes([ActiveScope::class, LocalizedScope::class])->get(['code']);
			
			if ($countries->count() > 0) {
				foreach ($countries as $country) {
					cache()->forget($country->code . '.paymentMethods.all');
				}
			}
		} catch (\Throwable $e) {
		}
	}
}

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

use App\Helpers\Lang\LangManager;
use App\Models\Language;
use App\Observers\Traits\LanguageTrait;
use Prologue\Alerts\Facades\Alert;

class LanguageObserver
{
	use LanguageTrait;
	
	/**
	 * Listen to the Entry created event.
	 *
	 * @param Language $language
	 * @return void
	 */
	public function created(Language $language)
	{
		// Check Demo Website
		$this->isDemo();
		
		// Get the current Default Language
		$defaultLang = Language::where('default', 1)->first();
		
		if (!empty($defaultLang)) {
			$manager = new LangManager();
			
			// Copy the default language files
			$manager->copyFiles($defaultLang->abbr, $language->abbr);
		}
	}
	
	/**
	 * Listen to the Entry updating event.
	 *
	 * @param Language $language
	 * @return bool
	 */
	public function updating(Language $language): bool
	{
		// Check Demo Website
		$this->isDemo();
		
		// Get the original object values
		$original = $language->getOriginal();
		
		// Set default language
		if ($language->default != $original['default']) {
			if ($language->default == 1 || $language->default == 'on') {
				// The current language is updated as default language
				
				// Set default language
				self::setDefaultLanguage($language->abbr);
				
			} else {
				// The current language is updated as non-default language
				
				// Make sure a default language is set,
				// If not don't perform the update and go back.
				$existingDefaultLang = Language::where('default', 1)->where('abbr', '!=', $language->abbr);
				if ($existingDefaultLang->count() <= 0) {
					Alert::warning(trans('admin.The app requires a default language'))->flash();
					
					return false;
				}
				
			}
		} else {
			if ($language->default == 1 && $language->active != 1) {
				Alert::warning(trans('admin.You cannot disable the default language'))->flash();
				
				return false;
			}
		}
		
		return true;
	}
	
	/**
	 * Listen to the Entry deleting event.
	 *
	 * @param Language $language
	 * @return bool
	 */
	public function deleting(Language $language): bool
	{
		// Check Demo Website
		$this->isDemo();
		
		// Don't delete the default language
		if ($language->abbr == config('appLang.abbr')) {
			Alert::warning(trans('admin.You cannot delete the default language'))->flash();
			
			return false;
		}
		
		// Forgetting all DB translations for a specific locale
		$this->forgetAllTranslations($language->abbr);
		
		// Remove all language files
		$manager = new LangManager();
		$manager->removeFiles($language->abbr);
		
		return true;
	}
	
	/**
	 * Listen to the Entry saved event.
	 *
	 * @param Language $language
	 * @return void
	 */
	public function saved(Language $language)
	{
		// Removing Entries from the Cache
		$this->clearCache($language);
	}
	
	/**
	 * Listen to the Entry deleted event.
	 *
	 * @param Language $language
	 * @return void
	 */
	public function deleted(Language $language)
	{
		// Removing Entries from the Cache
		$this->clearCache($language);
	}
	
	
	// PRIVATE METHODS
	
	
	/**
	 * Removing the Entity's Entries from the Cache
	 *
	 * @param $language
	 */
	private function clearCache($language)
	{
		try {
			cache()->flush();
		} catch (\Exception $e) {
		}
	}
	
	/**
	 * Check Demo Website
	 *
	 * @return bool|\Illuminate\Http\RedirectResponse
	 */
	private function isDemo()
	{
		if (isDemoDomain()) {
			Alert::error(t('demo_mode_message'))->flash();
			
			return back();
		}
		
		return false;
	}
}

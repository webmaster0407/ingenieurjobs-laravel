<?php
/*
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 *  -------
 *  This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 *  of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Helpers;

use Illuminate\Support\Carbon;

class SystemLocale
{
	/**
	 * Set locale for the system (Override the PHP setlocale() function)
	 *
	 * USAGE: Call this method in Laravel 'AppServiceProvider'
	 *
	 * IMPORTANT: Prevent issue in Laravel Blade
	 * The Blade @if(...) statement doesn't convert to <?php if(...): ?> in Turkish language (for example).
	 *
	 * RESOURCES
	 * - https://www.php.net/manual/en/function.setlocale.php
	 * - https://stackoverflow.com/questions/43589501/if-statements-not-working-correctly-on-laravel-blade
	 * - https://docs.moodle.org/dev/Table_of_locales
	 * - https://stackoverflow.com/questions/3191664/list-of-all-locales-and-their-short-codes
	 * - https://github.com/umpirsky/locale-list
	 * - Get locales list in Terminal on MAC/Linux: locale -a
	 *
	 * NOTE: $category can be:
	 * LC_ALL for all of the below
	 * LC_COLLATE for string comparison, see strcoll()
	 * LC_CTYPE for character classification and conversion, for example strtoupper()
	 * LC_MONETARY for localeconv()
	 * LC_NUMERIC for decimal separator (See also localeconv())
	 * LC_TIME for date and time formatting with strftime()
	 * LC_MESSAGES for system responses (available if PHP was compiled with libintl)
	 *
	 * @param $locale
	 * @param int|null $category
	 * @return mixed|string
	 */
	public static function setLocale($locale, int $category = null)
	{
		$categories = [LC_ALL, LC_COLLATE, LC_CTYPE, LC_MONETARY, LC_NUMERIC, LC_TIME];
		if (defined('LC_MESSAGES')) {
			$categories[] = LC_MESSAGES;
		}
		if (empty($category) || !in_array($category, $categories)) {
			$category = LC_ALL;
		}
		
		// Note from \Carbon\Carbon:
		// isoFormat() use ISO format rather than PHP-specific format
		// and use inner translations rather than language packages you need to install
		// on every machine where you deploy your application.
		if (!config('settings.app.php_specific_date_format')) {
			Carbon::setLocale($locale);
			
			return $locale;
		}
		
		$localeFound = false;
		
		// Get available locales from the server
		try {
			exec('locale -a', $locales);
		} catch (\Throwable $e) {
		}
		
		if (!isset($locales) || empty($locales)) {
			$locales = array_keys((array)config('locales'));
		}
		
		if (is_array($locales) && in_array($locale, $locales)) {
			$definedLocales = setlocale($category, $locale);
			if ($definedLocales !== false) {
				Carbon::setLocale($locale);
				$localeFound = true;
			}
		}
		
		// If not found, try to use locale with codeset (If it exists)
		if (!$localeFound) {
			if (is_array($locales)) {
				foreach ($locales as $sysLocale) {
					/*
					 * Check if $locale exists on the server with a codeset (locale.codeset)
					 * e.g. tr_TR.UTF-8, ru_RU.UTF-8, ru_RU.ISO8859-5, fr_CH.ISO8859-15, ...
					 * More Info: https://stackoverflow.com/a/24355529
					 */
					$pattern = '#' . $locale . '\.#i';
					if (preg_match($pattern, $sysLocale)) {
						$definedLocales = setlocale($category, $locale);
						if ($definedLocales !== false) {
							Carbon::setLocale($locale);
							$localeFound = true;
						}
					}
				}
			}
			
			// If not found, force to use a fixed locale
			if (!$localeFound) {
				$locale = 'en_US';
				setlocale($category, $locale);
				Carbon::setLocale($locale);
			}
		}
		
		// Reset the decimal separator
		if ($category == LC_ALL) {
			$currentNumericLocales = setlocale(LC_NUMERIC, 0);
			if ($currentNumericLocales !== false) {
				if (!in_array($currentNumericLocales, ['C', 'en_US'])) {
					self::resetLcNumeric();
				}
			} else {
				self::resetLcNumeric();
			}
		}
		
		return $locale;
	}
	
	/**
	 * Fix for float number with incorrect decimal separator.
	 * e.g. Reset the decimal separator after having set the locale
	 *
	 * NOTE
	 * This reset to 'C' locale for numerical values tell the operating system and PHP,
	 * that the C/C++ type of decimal separator has to be used which is defined as '.' for programming languages.
	 * Now you get your locale based month names if you are using the ordinary PHP date() function,
	 * but you get also correct calculated and converted numerical values (but you lose your locale known decimal sep char).
	 *
	 * RESOURCES
	 * - https://stackoverflow.com/a/26649200
	 *
	 * @return void
	 */
	public static function resetLcNumeric()
	{
		$definedLocales = setlocale(LC_NUMERIC, 'C');
		if ($definedLocales === false) {
			setlocale(LC_NUMERIC, 'en_US');
		}
	}
}

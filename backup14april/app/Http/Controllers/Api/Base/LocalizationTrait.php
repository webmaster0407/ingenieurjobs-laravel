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

namespace App\Http\Controllers\Api\Base;

use App\Helpers\Localization\Country as CountryLocalization;
use App\Helpers\Localization\Language as LanguageLocalization;

trait LocalizationTrait
{
	/**
	 * Get Localization
	 * Get Locale from User's Account or from Country spoken Language
	 * and get Country by user IP
	 */
	private function loadLocalizationData()
	{
		// Language
		$langObj = new LanguageLocalization();
		$lang = $langObj->find();
		
		// Country
		$countryObj = new CountryLocalization();
		$countryObj->find();
		
		// Fix for the vars
		$lang = (!empty($lang)) ? $lang : collect([]);
		$country = (!empty($countryObj->country)) ? $countryObj->country : collect([]);
		$ipCountry = (!empty($countryObj->ipCountry)) ? $countryObj->ipCountry : collect([]);
		
		// Config: Country
		if (!$country->isEmpty() && $country->has('code')) {
			$countryLangExists = $country->has('lang') && $country->get('lang')->has('abbr');
			config()->set('country.locale', ($countryLangExists) ? $country->get('lang')->get('abbr') : config('app.locale'));
			config()->set('country.lang', ($country->has('lang')) ? $country->get('lang')->toArray() : []);
			config()->set('country.code', $country->get('code'));
			config()->set('country.icode', $country->get('icode'));
			config()->set('country.iso3', $country->get('iso3'));
			config()->set('country.name', $country->get('name'));
			config()->set('country.currency', $country->get('currency_code'));
			config()->set('country.time_zone', ($country->has('time_zone')) ? $country->get('time_zone') : config('app.timezone'));
			config()->set('country.date_format', ($country->has('date_format')) ? $country->get('date_format') : null);
			config()->set('country.datetime_format', ($country->has('datetime_format')) ? $country->get('datetime_format') : null);
			config()->set('country.admin_type', $country->get('admin_type'));
			config()->set('country.admin_field_active', $country->get('admin_field_active'));
			config()->set('country.background_image', $country->get('background_image'));
		}
		// Config: IP Country
		if (!$ipCountry->isEmpty() && $ipCountry->has('code')) {
			config()->set('ipCountry.code', $ipCountry->get('code'));
			config()->set('ipCountry.name', $ipCountry->get('name'));
			config()->set('ipCountry.time_zone', ($ipCountry->has('time_zone')) ? $ipCountry->get('time_zone') : null);
		}
		// Config: Currency
		if (!$country->isEmpty() && $country->has('currency') && !empty($country->get('currency'))) {
			config()->set('currency', $country->get('currency')->toArray());
		}
		// Config: Language
		if (!$lang->isEmpty()) {
			config()->set('lang.abbr', $lang->get('abbr'));
			config()->set('lang.locale', $lang->get('locale'));
			config()->set('lang.direction', $lang->get('direction'));
			config()->set('lang.russian_pluralization', $lang->get('russian_pluralization'));
			config()->set('lang.date_format', $lang->get('date_format') ?? null);
			config()->set('lang.datetime_format', $lang->get('datetime_format') ?? null);
			
			// Apply the Language
			app()->setLocale(config('lang.abbr'));
		}
	}
}

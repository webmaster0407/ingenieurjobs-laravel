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

namespace App\Observers\Traits\Setting;

use App\Helpers\Files\Storage\StorageDisk;
use App\Models\Country;
use App\Models\Language;
use App\Models\Scopes\ActiveScope;
use App\Models\Scopes\LocalizedScope;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait AppTrait
{
	/**
	 * Updating
	 *
	 * @param $setting
	 * @param $original
	 */
	public function appUpdating($setting, $original)
	{
		// Storage Disk Init.
		$disk = StorageDisk::getDisk();
		
		$this->removeOldLogoFile($setting, $original, $disk);
		$this->removeOldFaviconFile($setting, $original, $disk);
		$this->removeAutoLanguageDetectedSession($setting, $original);
		
		if (array_key_exists('php_specific_date_format', $setting->value)) {
			if (
				is_array($original['value'])
				&& isset($original['value']['php_specific_date_format'])
				&& $setting->value['php_specific_date_format'] != $original['value']['php_specific_date_format']
			) {
				request()->request->add(['formatTypeFieldWasChanged' => 1]);
			}
		}
	}
	
	/**
	 * Updated
	 *
	 * @param $setting
	 */
	public function appUpdated($setting)
	{
		$this->clearOldDateFormats($setting);
	}
	
	/**
	 * Remove old logo from disk (Don't remove the default logo)
	 *
	 * @param $setting
	 * @param $original
	 * @param $disk
	 */
	private function removeOldLogoFile($setting, $original, $disk)
	{
		if (array_key_exists('logo', $setting->value)) {
			if (
				is_array($original['value'])
				&& isset($original['value']['logo'])
				&& $setting->value['logo'] != $original['value']['logo']
			) {
				if (
					!Str::contains($original['value']['logo'], config('larapen.core.logo'))
					&& $disk->exists($original['value']['logo'])
				) {
					$disk->delete($original['value']['logo']);
				}
			}
		}
	}
	
	/**
	 * Remove old favicon from disk (Don't remove the default favicon)
	 *
	 * @param $setting
	 * @param $original
	 * @param $disk
	 */
	private function removeOldFaviconFile($setting, $original, $disk)
	{
		if (array_key_exists('favicon', $setting->value)) {
			if (
				is_array($original['value'])
				&& isset($original['value']['favicon'])
				&& $setting->value['favicon'] != $original['value']['favicon']
			) {
				if (
					!Str::contains($original['value']['favicon'], config('larapen.core.favicon'))
					&& $disk->exists($original['value']['favicon'])
				) {
					$disk->delete($original['value']['favicon']);
				}
			}
		}
	}
	
	/**
	 * Remove the language detection created sessions
	 *
	 * @param $setting
	 * @param $original
	 */
	private function removeAutoLanguageDetectedSession($setting, $original)
	{
		if (array_key_exists('auto_detect_language', $setting->value)) {
			if (
				empty($original['value'])
				|| (
					is_array($original['value'])
					&& !isset($original['value']['auto_detect_language'])
				)
				|| (
					is_array($original['value'])
					&& isset($original['value']['auto_detect_language'])
					&& $setting->value['auto_detect_language'] != $original['value']['auto_detect_language']
				)
			) {
				if (session()->has('browserLangCode')) {
					session()->forget('browserLangCode');
				}
				if (session()->has('countryLangCode')) {
					session()->forget('countryLangCode');
				}
				$countries = Country::all();
				if ($countries->count() > 0) {
					foreach ($countries as $country) {
						$sessionName = strtolower($country->code) . 'CountryLangCode';
						if (session()->has($sessionName)) {
							session()->forget($sessionName);
						}
					}
				}
			}
		}
	}
	
	/**
	 * Clear all Date formats when the format type has changed
	 *
	 * @param $setting
	 */
	private function clearOldDateFormats($setting)
	{
		if (request()->has('formatTypeFieldWasChanged') && request()->input('formatTypeFieldWasChanged') == 1) {
			$settingTable = (new Setting)->getTable();
			$appSetting = DB::table($settingTable)->where('key', 'app')->first();
			if (!empty($appSetting)) {
				$appSetting->value = $setting->value;
				$value = jsonToArray($appSetting->value);
				if (array_key_exists('date_format', $value)) {
					unset($value['date_format']);
				}
				if (array_key_exists('datetime_format', $value)) {
					unset($value['datetime_format']);
				}
				$value = json_encode($value);
				DB::table($settingTable)->where('key', 'app')->update([
					'value' => $value,
				]);
			}
			
			$languages = Language::withoutGlobalScopes([ActiveScope::class])->get();
			if ($languages->count() > 0) {
				foreach($languages as $language) {
					$language->date_format = null;
					$language->datetime_format = null;
					$language->save();
				}
			}
			
			$countries = Country::withoutGlobalScopes([ActiveScope::class, LocalizedScope::class])->get();
			if ($countries->count() > 0) {
				foreach($countries as $country) {
					$country->date_format = null;
					$country->datetime_format = null;
					$country->save();
				}
			}
		}
	}
}

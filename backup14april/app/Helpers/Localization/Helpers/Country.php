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

namespace App\Helpers\Localization\Helpers;

use App\Helpers\Arr;
use Illuminate\Support\Collection;

class Country
{
	/**
	 * The URL of the country list package (default package is umpirsky/country-list)
	 *
	 * @var   string
	 */
	protected $dataDir;
	
	/**
	 * @var array
	 * Available data sources.
	 */
	protected $dataSources = ['icu', 'icu'];
	
	/**
	 * The name of the country list file
	 *
	 * @var   string
	 */
	protected $filename = 'country.php';
	
	/**
	 * Variable holding the country list
	 *
	 * @var   array
	 */
	protected $countries = [];
	
	public function __construct($dataDir = null)
	{
		if (isset($dataDir)) {
			if (!is_dir($dataDir)) {
				die(sprintf('Unable to locate the country data directory at "%s"', $dataDir));
			}
			$this->dataDir = $dataDir;
		} else {
			$this->dataDir = base_path('database/umpirsky/country');
		}
	}
	
	/**
	 * Returns one country.
	 *
	 * @param string $countryCode The country
	 * @param string|null $locale The locale (default: en)
	 * @param string|null $source Data source: "icu" or "cldr"
	 * @return mixed|null
	 */
	public function get(string $countryCode, string $locale = null, string $source = null)
	{
		$countryCode = mb_strtoupper($countryCode);
		
		if (!$this->has($countryCode, $locale, $source)) {
			return null;
		}
		
		$countryExists = isset($this->countries[$countryCode]);
		if (!$countryExists) {
			$countryCode = ($countryCode == 'GB') ? 'UK' : $countryCode;
			$countryExists = isset($this->countries[$countryCode]);
		}
		
		return ($countryExists) ? $this->countries[$countryCode] : null;
	}
	
	/**
	 * Indicates whether a given $country_code matches a country.
	 *
	 * @param string $countryCode A 2-letter country code
	 * @param string|null $locale The locale (default: en)
	 * @param string|null $source Data source: "icu" or "cldr"
	 * @return bool                <code>true</code> if a match was found, <code>false</code> otherwise
	 */
	public function has(string $countryCode, string $locale = null, string $source = null): bool
	{
		// Language Code
		if (empty($locale)) {
			$locale = config('app.locale');
		}
		
		$countries = $this->all('php', $locale, $source);
		if (count($countries) <= 0) {
			return false;
		}
		
		$countryCode = mb_strtoupper($countryCode);
		
		$countryExists = isset($countries[$countryCode]);
		if (!$countryExists) {
			$countryCode = ($countryCode == 'GB') ? 'UK' : $countryCode;
			$countryExists = isset($countries[$countryCode]);
		}
		
		return $countryExists;
	}
	
	/**
	 * Returns a list of countries.
	 *
	 * @param string $format
	 * @param string|null $locale
	 * @param string|null $source
	 * @return array
	 */
	public function all(string $format = 'php', string $locale = null, string $source = null): array
	{
		return $this->loadData($format, $locale, $source);
	}
	
	/**
	 * This function is used as a quick way for
	 * the user to return an array with countries
	 * and their corresponding ISO codes in a
	 * specific language.
	 *
	 * @param string $format The format (default: php)
	 * @param string|null $locale The locale (default: en)
	 * @param string|null $source Data source: "icu" or "cldr"
	 * @return array
	 */
	public function loadData(string $format = 'php', string $locale = null, string $source = null): array
	{
		// Language Code
		if (empty($locale)) {
			$locale = config('app.locale');
		}
		
		$source = (!empty($source)) ? mb_strtolower($source) . '/' : '';
		
		if (!empty($source) && !in_array($source, $this->dataSources)) {
			return [];
		}
		
		$file = $this->dataDir . '/' . $source . $locale . '/' . $this->filename;
		if (!file_exists($file)) {
			return [];
		}
		$this->countries = ($format == 'php') ? require($file) : file_get_contents($file);
		if (!is_array($this->countries)) {
			return [];
		}
		
		// Update some countries code (eg. UK => GB)
		if (!empty($this->countries)) {
			$countries = [];
			foreach ($this->countries as $code => $name) {
				$code = ($code == 'UK') ? 'GB' : $code;
				$countries[$code] = $name;
			}
			$this->countries = $countries;
		}
		
		return $this->sortData($locale, $this->countries);
	}
	
	/**
	 * Sorts the data array for a given locale, using the locale translations.
	 * It is UTF-8 aware if the Collator class is available (requires the intl extension).
	 *
	 * @param string $locale The locale whose collation rules should be used.
	 * @param array $data Array of strings to sort.
	 * @return array          The $data array, sorted.
	 */
	protected function sortData(string $locale, array $data): array
	{
		if (is_array($data)) {
			if (class_exists('Collator')) {
				$collator = new \Collator($locale);
				$collator->asort($data);
			} else {
				asort($data);
			}
		}
		
		return $data;
	}
	
	/**
	 * @param $countries
	 * @param string|null $locale
	 * @param string|null $source
	 * @return array|\Illuminate\Support\Collection|\stdClass
	 */
	public static function transAll($countries, string $locale = null, string $source = null)
	{
		// Language Code
		if (empty($locale)) {
			$locale = config('app.locale');
		}
		
		// Security
		if (!$countries instanceof Collection) {
			return collect([]);
		}
		
		// Load translated file
		$countryLang = new self();
		
		$tab = [];
		foreach ($countries as $code => $country) {
			$tab[$code] = $country;
			if ($name = $countryLang->get($code, $locale, $source)) {
				$tab[$code]['name'] = $name;
			}
		}
		
		$tab = collect($tab);
		
		return Arr::mbSortBy($tab, 'name', $locale);
	}
	
	/**
	 * @param \Illuminate\Support\Collection $country
	 * @param string|null $locale
	 * @param string|null $source
	 * @return \Illuminate\Support\Collection
	 */
	public static function trans(Collection $country, string $locale = null, string $source = null): Collection
	{
		//$locale = 'en'; // Debug
		$countryLang = new Country();
		if ($name = $countryLang->get($country->get('code'), $locale, $source)) {
			return $country->merge(['name' => $name]);
		} else {
			return $country;
		}
	}
}

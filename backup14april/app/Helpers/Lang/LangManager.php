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

namespace App\Helpers\Lang;

use App\Helpers\Lang\Traits\LangFilesTrait;
use App\Helpers\Lang\Traits\LangLinesTrait;

class LangManager
{
	use LangFilesTrait, LangLinesTrait;
	
	/**
	 * The path to the language files.
	 *
	 * @var string
	 */
	protected $path;
	
	/**
	 * The master language code
	 *
	 * @var string
	 */
	protected $masterLangCode = 'en';
	
	/**
	 * Included languages files
	 *
	 * @var array
	 */
	protected $includedLanguagesFiles = [
		'en', // English
		'fr', // French - Français
		'es', // Spanish - Español
		'ar', // Arabic - ‫العربية
	];
	
	/**
	 * LangManager constructor.
	 */
	public function __construct()
	{
		$this->path = resource_path('lang/');
	}
	
	/**
	 * Get all codes of the included languages
	 *
	 * @return array
	 */
	public function getIncludedLanguages(): array
	{
		return $this->includedLanguagesFiles;
	}
	
	/**
	 * Get all the codes of included and existing languages
	 *
	 * @return array
	 */
	public function getTranslatedLanguages(): array
	{
		$languages = [];
		
		if (!empty($this->includedLanguagesFiles)) {
			foreach($this->includedLanguagesFiles as $code) {
				$path = $this->path . $code;
				if (file_exists($path) && is_dir($path)) {
					$languages[] = $code;
				}
			}
		}
		
		return $languages;
	}
}

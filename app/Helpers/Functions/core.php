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

/**
 * Check if a Model has translation fields
 *
 * @param $model
 * @return bool
 */
function isTranslatableModel($model): bool
{
	$isTranslatable = false;
	
	try {
		if (!($model instanceof \Illuminate\Database\Eloquent\Model)) {
			return false;
		}
		
		$isTranslatableModel = (
			property_exists($model, 'translatable')
			&& (
				isset($model->translatable)
				&& is_array($model->translatable)
				&& !empty($model->translatable)
			)
		);
		
		if ($isTranslatableModel) {
			$isTranslatable = true;
		}
	} catch (\Exception $e) {
		return false;
	}
	
	return $isTranslatable;
}

/**
 * The App's version of Laravel view() function
 *
 * @param string $view
 * @param array $data
 * @param array $mergeData
 * @return \Illuminate\Contracts\View\View
 */
function appView(string $view, array $data = [], array $mergeData = []): \Illuminate\Contracts\View\View
{
	return view()->first([
		config('larapen.core.customizedViewPath') . $view,
		$view
	], $data, $mergeData);
}

/**
 * Get View Content
 *
 * @param string $view
 * @param array $data
 * @param array $mergeData
 * @return string
 */
function getViewContent(string $view, array $data = [], array $mergeData = []): string
{
	if (view()->exists(config('larapen.core.customizedViewPath') . $view)) {
		$view = view(config('larapen.core.customizedViewPath') . $view, $data, $mergeData);
	} else {
		$view = view($view, $data, $mergeData);
	}
	
	return $view->render();
}

/**
 * Hide part of email addresses
 *
 * @param string|null $value
 * @param int $escapedChars
 * @return string|null
 */
function hidePartOfEmail(?string $value, int $escapedChars = 1): ?string
{
	$atPos = mb_stripos($value, '@');
	if ($atPos === false) {
		return $value;
	}
	
	$emailUsername = mb_substr($value, 0, $atPos);
	$emailDomain = mb_substr($value, ($atPos + 1));
	
	if (!empty($emailUsername) && !empty($emailDomain)) {
		$value = Str::mask($emailUsername, 'x', $escapedChars) . '@' . $emailDomain;
	}
	
	return $value;
}

/**
 * Default translator (e.g. en/global.php)
 *
 * @param string|null $key
 * @param array $replace
 * @param string $file
 * @param string|null $locale
 * @return array|\Illuminate\Contracts\Translation\Translator|string|null
 */
function t(string $key = null, array $replace = [], string $file = 'global', string $locale = null)
{
	if (is_null($locale)) {
		$locale = config('app.locale');
	}
	
	return trans($file . '.' . $key, $replace, $locale);
}

/**
 * Get default max file upload size (from PHP.ini)
 *
 * @return mixed
 */
function maxUploadSize()
{
	$maxUpload = (int)(ini_get('upload_max_filesize'));
	$maxPost = (int)(ini_get('post_max_size'));
	
	return min($maxUpload, $maxPost);
}

/**
 * Get max file upload size
 *
 * @return int|mixed
 */
function maxApplyFileUploadSize()
{
	$size = maxUploadSize();
	if ($size >= 5) {
		return 5;
	}
	
	return $size;
}

/**
 * Escape JSON string
 *
 * Escape this:
 * \b  Backspace (ascii code 08)
 * \f  Form feed (ascii code 0C)
 * \n  New line
 * \r  Carriage return
 * \t  Tab
 * \"  Double quote
 * \\  Backslash caracter
 *
 * @param string|null $value
 * @return string|null
 */
function escapeJsonString(?string $value): ?string
{
	// list from www.json.org: (\b backspace, \f formfeed)
	$escapers = ["\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c"];
	$replacements = ["\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b"];
	$value = str_replace($escapers, $replacements, trim($value));
	
	return trim($value);
}

/**
 * @param string|null $defaultIp
 * @return string
 */
function getIp(?string $defaultIp = ''): string
{
	return \App\Helpers\Ip::get($defaultIp);
}

/**
 * @return string
 */
function getScheme(): string
{
	if (isset($_SERVER['HTTPS']) && in_array($_SERVER['HTTPS'], ['on', 1])) {
		$protocol = 'https://';
	} else if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$protocol = 'https://';
	} else if (stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true) {
		$protocol = 'https://';
	} else {
		$protocol = 'http://';
	}
	
	return $protocol;
}


/**
 * Get host (domain with subdomain)
 *
 * @param string|null $url
 * @return array|mixed|string
 */
function getHost(string $url = null)
{
	if (!empty($url)) {
		$host = parse_url($url, PHP_URL_HOST);
	} else {
		$host = (trim(request()->server('HTTP_HOST')) != '') ? request()->server('HTTP_HOST') : ($_SERVER['HTTP_HOST'] ?? '');
	}
	
	if ($host == '') {
		$host = parse_url(url()->current(), PHP_URL_HOST);
	}
	
	return $host;
}

/**
 * Get domain (host without subdomain)
 *
 * @param string|null $url
 * @return string
 */
function getDomain(string $url = null): string
{
	if (!empty($url)) {
		$host = parse_url($url, PHP_URL_HOST);
	} else {
		$host = getHost();
	}
	
	$tmp = explode('.', $host);
	if (count($tmp) > 2) {
		$itemsToKeep = count($tmp) - 2;
		$tlds = config('tlds');
		if (isset($tmp[$itemsToKeep]) && isset($tlds[$tmp[$itemsToKeep]])) {
			$itemsToKeep = $itemsToKeep - 1;
		}
		for ($i = 0; $i < $itemsToKeep; $i++) {
			\Illuminate\Support\Arr::forget($tmp, $i);
		}
		$domain = implode('.', $tmp);
	} else {
		$domain = @implode('.', $tmp);
	}
	
	return $domain;
}

/**
 * Get sub-domain name
 *
 * @return string
 */
function getSubDomainName(): string
{
	$host = getHost();
	
	return (substr_count($host, '.') > 1) ? trim(current(explode('.', $host))) : '';
}

/**
 * @return string
 */
function getCookieDomain(): string
{
	return (getSubDomainName() != '') ? getSubDomainName() . '.' . getDomain() : getDomain();
}

/**
 * @return bool
 */
function doesCountriesPageCanBeHomepage(): bool
{
	return (
		file_exists(storage_path('framework/plugins/domainmapping'))
		&& (env('DM_COUNTRIES_PAGE_AS_HOMEPAGE') == true)
		&& (getHost() == getHost(env('APP_URL')))
	);
}

/**
 * @return bool
 */
function doesCountriesPageCanBeLinkedToTheHomepage(): bool
{
	return (
		file_exists(storage_path('framework/plugins/domainmapping'))
		&& (env('DM_COUNTRIES_PAGE_AS_HOMEPAGE') == true)
		&& (getHost() != getHost(env('APP_URL')))
	);
}

/**
 * Generate a URL with query string for the application.
 *
 * Assumes that you want a URL with a querystring rather than route params
 * (which is what the default url() helper does)
 *
 * @param string|null $path
 * @param array|null $queryArray
 * @param $secure
 * @param bool $localized
 * @return string
 */
function qsUrl(string $path = null, ?array $queryArray = [], $secure = null, bool $localized = true): string
{
	$url = getUrlWithoutQuery($path, $secure);
	
	// $queryArray = array_merge(getUrlQuery($path), $queryArray);
	
	if (config('plugins.domainmapping.installed')) {
		if (isset($queryArray['d'])) {
			unset($queryArray['d']);
		}
		$queryArray = array_filter($queryArray, function ($v, $k) {
			if ($k == 'distance') {
				return !empty($v) || $v == 0;
			} else {
				return !empty($v);
			}
		}, ARRAY_FILTER_USE_BOTH);
	}
	
	if (!empty($queryArray)) {
		$url = $url . '?' . \App\Helpers\Arr::query($queryArray);
	}
	
	return $url;
}

/**
 * Get the URL (no query string) for the given URL or for the request
 *
 * @param string|null $url
 * @param bool|null $secure
 * @return string
 */
function getUrlWithoutQuery(?string $url, bool $secure = null): string
{
	if (empty($url)) {
		$url = request()->fullUrl();
		if (empty($url)) return '';
	} else {
		// Accepts URI|Path as URL
		$url = url()->to($url, [], $secure);
	}
	
	$url = preg_replace('/\?.*/ui', '', $url);
	
	return is_string($url) ? rtrim($url, '/') : '';
}

/**
 * Get query string from a given URL
 * NOTE: Possibility to except some query
 *
 * @param string|null $url
 * @param array|string|null $except
 * @return array
 */
function getUrlQuery(?string $url, $except = null): array
{
	if (empty($url)) {
		$url = request()->fullUrl();
		if (empty($url)) return [];
	}
	
	$queryArray = [];
	
	$parsedUrl = mb_parse_url($url);
	if (isset($parsedUrl['query'])) {
		mb_parse_str($parsedUrl['query'], $queryArray);
		
		if (!empty($except)) {
			if (is_array($except)) {
				foreach ($except as $item) {
					if (isset($queryArray[$item])) {
						unset($queryArray[$item]);
					}
				}
			}
			if (is_string($except) || is_numeric($except)) {
				if (isset($queryArray[$except])) {
					unset($queryArray[$except]);
				}
			}
		}
	}
	
	return $queryArray;
}

/**
 * @info: Depreciated - This function will be removed in the next updated
 *
 * @param string|null $path
 * @param array|null $attributes
 * @param $locale
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
 */
function lurl(string $path = null, ?array $attributes = [], $locale = null)
{
	return url($path);
}

/**
 * @info: Depreciated - This function will be removed in the next updated
 * @param $country
 * @param string|null $path
 * @param bool $forceCountry
 * @param bool $forceLocale
 * @return \Illuminate\Contracts\Routing\UrlGenerator|string
 */
function localUrl($country, ?string $path = '/', bool $forceCountry = false, bool $forceLocale = false)
{
	return dmUrl($country, $path, $forceCountry, $forceLocale);
}

/**
 * Get URL (based on Country Domain) related to the given country (or country code)
 * This is the url() function to match countries domains
 *
 * @param string|\Illuminate\Support\Collection $country
 * @param string|null $path
 * @param bool $forceCountry
 * @param bool $forceLocale
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
 */
function dmUrl($country, ?string $path = '/', bool $forceCountry = false, bool $forceLocale = false)
{
	if (empty($path)) {
		$path = '/';
	}
	
	$country = getValidCountry($country);
	if (empty($country)) {
		return url($path);
	}
	
	// Clear the path
	$path = ltrim($path, '/');
	
	// Get the country main language code
	$langCode = getCountryMainLangCode($country);
	
	// Get the country main language path
	$langPath = '';
	if ($forceLocale) {
		if (!empty($langCode)) {
			$parseUrl = mb_parse_url(url($path));
			if (!isset($parseUrl['path']) || ($parseUrl['path'] == '/')) {
				$langPath = '/lang/' . $langCode;
			}
			if (isFromUrlAlwaysContainingCountryCode($path)) {
				$langPath = '/' . $langCode;
			}
		}
	}
	
	// Get the country domain data from the Domain Mapping plugin,
	// And get a new URL related to domain, country language & given path
	$domain = collect((array)config('domains'))->firstWhere('country_code', $country->get('code'));
	if (isset($domain['url']) && !empty($domain['url'])) {
		$path = preg_replace('#' . $country->get('code') . '/#ui', '', $path, 1);
		
		$url = rtrim($domain['url'], '/') . $langPath;
		$url = $url . ((!empty($path)) ? '/' . $path : '');
	} else {
		$url = rtrim(env('APP_URL', ''), '/') . $langPath;
		$url = $url . ((!empty($path)) ? '/' . $path : '');
		if ($forceCountry) {
			$url = $url . ('?d=' . $country->get('code'));
		}
	}
	
	return $url;
}

/**
 * Get Valid Country's Object (as Laravel Collection)
 *
 * @param string|\Illuminate\Support\Collection $country
 * @return \Illuminate\Support\Collection|null
 */
function getValidCountry($country): ?\Illuminate\Support\Collection
{
	// If given country value is a string & having 2 characters (like country code),
	// Get the country collection by the country code.
	if (is_string($country)) {
		if (strlen($country) == 2) {
			$country = \App\Helpers\Localization\Country::getCountryInfo($country);
			if ($country->isEmpty() || !$country->has('code')) {
				return null;
			}
		} else {
			return null;
		}
	}
	
	// Country collection is required to continue
	if (!($country instanceof \Illuminate\Support\Collection)) {
		return null;
	}
	
	// Country collection code is required to continue
	if (!$country->has('code')) {
		return null;
	}
	
	return $country;
}

/**
 * Get Country Main Language Code
 *
 * @param string|\Illuminate\Support\Collection $country
 * @return string|null
 */
function getCountryMainLangCode($country): ?string
{
	$country = getValidCountry($country);
	if (empty($country)) {
		return null;
	}
	
	// Get the country main language code
	$langCode = null;
	if ($country->has('lang') && $country->get('lang')->has('abbr')) {
		$langCode = $country->get('lang')->get('abbr');
	} else {
		if ($country->has('languages')) {
			$countryLang = \App\Helpers\Localization\Country::getLangFromCountry($country->get('languages'));
			if ($countryLang->has('abbr')) {
				$langCode = $countryLang->get('abbr');
			}
		} else {
			// From XML Sitemaps
			if ($country->has('locale')) {
				$langCode = $country->get('locale');
			}
		}
	}
	
	return $langCode;
}

/**
 * If the Domain Mapping plugin is installed, apply its configs.
 * NOTE: Don't apply them if the session is shared.
 *
 * @param $countryCode
 */
function applyDomainMappingConfig($countryCode)
{
	if (empty($countryCode)) {
		return;
	}
	
	if (config('plugins.domainmapping.installed')) {
		/*
		 * When the session is shared, the domains name and logo columns are disabled.
		 * The dashboard per country feature is also disabled.
		 * So, it is recommended to access to the Admin panel through the main URL from the /.env file (i.e. APP_URL/admin)
		 */
		if (!config('settings.domainmapping.share_session')) {
			$domain = collect((array)config('domains'))->firstWhere('country_code', $countryCode);
			if (!empty($domain)) {
				if (isset($domain['url']) && !empty($domain['url'])) {
					//\URL::forceRootUrl($domain['url']);
				}
			}
		}
	}
}

function isFromAdminPanel($url = null): bool
{
	return isAdminPanel($url);
}

/**
 * Check if user is located in the Admin panel
 * NOTE: Please see the provider of the package: lab404/laravel-impersonate
 *
 * @param string|null $url
 * @return bool
 */
function isAdminPanel(string $url = null): bool
{
	if (empty($url)) {
		$isValid = (
			request()->segment(1) == admin_uri()
			|| request()->segment(1) == 'impersonate'
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), '\Admin\\')
		);
	} else {
		try {
			$urlPath = '/' . ltrim(parse_url($url, PHP_URL_PATH), '/');
			$adminUri = '/' . ltrim(admin_uri(), '/');
			
			$isValid = (
				Str::startsWith($urlPath, $adminUri)
				|| Str::startsWith($urlPath, '/impersonate')
			);
		} catch (\Exception $e) {
			$isValid = false;
		}
	}
	
	return $isValid;
}

/**
 * Check the demo website domain
 *
 * @param string|null $url
 * @return bool
 */
function isDemoDomain(string $url = null): bool
{
	$isDemoDomain = (
		getDomain($url) == config('larapen.core.demo.domain')
		|| in_array(getHost($url), (array)config('larapen.core.demo.hosts'))
	);
	
	if ($isDemoDomain) {
		if (auth()->check()) {
			if (
				auth()->user()->can(\App\Models\Permission::getStaffPermissions())
				&& md5(auth()->user()->id) == 'c4ca4238a0b923820dcc509a6f75849b'
			) {
				$isDemoDomain = false;
			}
		}
	}
	
	return $isDemoDomain;
}

/**
 * Human-readable file size
 *
 * @param $bytes
 * @param int $decimals
 * @param string $system (metric OR binary)
 * @return string
 */
function readableBytes($bytes, int $decimals = 2, string $system = 'binary'): string
{
	$mod = ($system === 'binary') ? 1024 : 1000;
	
	$units = [
		'binary' => [
			'B',
			'KiB',
			'MiB',
			'GiB',
			'TiB',
			'PiB',
			'EiB',
			'ZiB',
			'YiB',
		],
		'metric' => [
			'B',
			'kB',
			'MB',
			'GB',
			'TB',
			'PB',
			'EB',
			'ZB',
			'YB',
		],
	];
	
	if (is_numeric($bytes)) {
		$factor = floor((strlen($bytes) - 1) / 3);
		$unit = isset($units[$system]) ? $units[$system][$factor] : $units['binary'][$factor];
		$bytes = $bytes / pow($mod, $factor);
		
		$bytes = \App\Helpers\Number::format($bytes, $decimals);
		$bytes = $bytes . $unit;
	}
	
	return $bytes;
}

/**
 * Get the Country Code from URI Path
 *
 * @return string|null
 */
function getCountryCodeFromPath(): ?string
{
	$countryCode = null;
	
	// With these URLs, the language code and the country code can be available in the segments
	// (If the "Multi-countries URLs Optimization" is enabled)
	if (isFromUrlThatCanContainCountryCode()) {
		$countryCode = request()->segment(1);
	}
	
	// With these URLs, the language code and the country code are available in the segments
	if (isFromUrlAlwaysContainingCountryCode()) {
		$countryCode = request()->segment(2);
	}
	
	return $countryCode;
}

/**
 * Check if user is coming from a URL that can contain the country code
 * With these URLs, the language code and the country code can be available in the segments
 * (If the "Multi-countries URLs Optimization" is enabled)
 *
 * @return bool
 */
function isFromUrlThatCanContainCountryCode(): bool
{
	if (config('settings.seo.multi_countries_urls')) {
		if (
			Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'SearchController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'CategoryController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'CityController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'UserController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'TagController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'CompanyController')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'SitemapController')
		) {
			return true;
		}
	}
	
	return false;
}

/**
 * Check if called page can always have the country code
 * With these URLs, the language code and the country code are available in the segments
 *
 * @param string|null $url
 * @return bool
 */
function isFromUrlAlwaysContainingCountryCode(string $url = null): bool
{
	if (empty($url)) {
		$isValid = (
			Str::endsWith(request()->url(), '.xml')
			|| Str::contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'SitemapsController')
		);
	} else {
		$isValid = (Str::endsWith($url, '.xml'));
	}
	
	return $isValid;
}

/**
 * Check if file is uploaded
 *
 * @param $value
 * @return bool
 */
function fileIsUploaded($value): bool
{
	$isUploaded = false;
	
	if (
		(is_string($value) && Str::startsWith($value, 'data:image'))
		|| ($value instanceof \Illuminate\Http\UploadedFile)
	) {
		$isUploaded = true;
	}
	
	return $isUploaded;
}

/**
 * Get the uploaded file mime type
 *
 * @param $value
 * @return string|null
 */
function getUploadedFileMimeType($value): ?string
{
	$mimeType = null;
	
	if (!is_string($value)) {
		if ($value instanceof \Illuminate\Http\UploadedFile) {
			$mimeType = $value->getMimeType();
		}
	} else {
		if (Str::startsWith($value, 'data:image')) {
			try {
				$mimeType = mime_content_type($value);
			} catch (\Exception $e) {
			}
		}
		
		if (empty($mimeType)) {
			$mimeType = 'image/jpeg';
		}
	}
	
	return strtolower($mimeType);
}

/**
 * Get the uploaded file extension
 *
 * @param $value
 * @return string|null
 */
function getUploadedFileExtension($value): ?string
{
	$extension = null;
	
	if (!is_string($value)) {
		if ($value instanceof \Illuminate\Http\UploadedFile) {
			$extension = $value->getClientOriginalExtension();
		}
	} else {
		if (Str::startsWith($value, 'data:image')) {
			$matches = [];
			preg_match('#data:image/([^;]+);base64#', $value, $matches);
			$extension = (isset($matches[1]) && !empty($matches[1])) ? $matches[1] : 'png';
		} else {
			$extension = getExtension($value);
		}
	}
	
	return strtolower($extension);
}

/**
 * Get file extension
 *
 * @param string|null $filename
 * @return false|mixed|string
 */
function getExtension(?string $filename)
{
	$tmp = explode('?', $filename);
	$tmp = explode('.', current($tmp));
	
	return end($tmp);
}

/**
 * Transform Description column before displaying it
 *
 * @param $string
 * @return mixed|string
 */
function transformDescription($string)
{
	if (config('settings.single.wysiwyg_editor') != 'none') {
		
		try {
			$string = \Mews\Purifier\Facades\Purifier::clean($string);
		} catch (\Exception $e) {
			// Nothing.
		}
		$string = createAutoLink($string);
		
	} else {
		$string = nl2br(createAutoLink(strCleaner($string)));
	}
	
	return $string;
}

/**
 * String strip
 *
 * @param string|null $string
 * @return string|null
 */
function str_strip(?string $string): ?string
{
	return trim(preg_replace('/\s\s+/u', ' ', $string));
}

/**
 * String cleaner
 *
 * @param string|null $string
 * @return string|null
 */
function strCleaner(?string $string): ?string
{
	$string = strip_tags($string, '<br><br/>');
	$string = str_replace(['<br>', '<br/>', '<br />'], "\n", $string);
	$string = preg_replace("/[\r\n]+/", "\n", $string);
	/*
	Remove 4(+)-byte characters from a UTF-8 string
	It seems like MySQL does not support characters with more than 3 bytes in its default UTF-8 charset.
	NOTE: you should not just strip, but replace with replacement character U+FFFD to avoid unicode attacks, mostly XSS:
	http://unicode.org/reports/tr36/#Deletion_of_Noncharacters
	*/
	$string = preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $string);
	$string = mb_ucfirst(trim($string));
	
	return $string;
}

/**
 * String cleaner (Lite version)
 *
 * @param string|null $string
 * @return array|string|string[]|null
 */
function strCleanerLite(?string $string)
{
	$string = strip_tags($string);
	$string = html_entity_decode($string);
	$string = strip_tags($string);
	$string = preg_replace('/[\'"]*(<|>)[\'"]*/us', '', $string);
	$string = trim($string);
	
	/*
	Remove non-breaking spaces
	In HTML, the common non-breaking space, which is the same width as the ordinary space character, is encoded as &nbsp; or &#160;.
	In Unicode, it is encoded as U+00A0.
	https://en.wikipedia.org/wiki/Non-breaking_space
	https://graphemica.com/00A0
	*/
	$string = preg_replace('~\x{00a0}~siu', '', $string);
	
	return $string;
}

/**
 * Title cleaner
 *
 * @todo: Code not tested. Test it!
 *
 * @param string|null $string
 * @return array|string|string[]|null
 */
function titleCleaner(?string $string)
{
	$string = strip_tags($string);
	$string = html_entity_decode($string);
	$string = str_replace('º', '', $string);
	$string = str_replace('ª', '', $string);
	
	/*
	Match a single character not present in the list below
	[^\p{L}\p{M}\p{Z}\p{N}\p{Sc}\%\'\"!?¿¡-]
	\p{L} matches any kind of letter from any language
	\p{M} matches a character intended to be combined with another character (e.g. accents, umlauts, enclosing boxes, etc.)
	\p{Z} matches any kind of whitespace or invisible separator
	\p{N} matches any kind of numeric character in any script
	\p{Sc} matches any currency sign
	\% matches the character % literally (case sensitive)
	\' matches the character ' literally (case sensitive)
	\" matches the character " literally (case sensitive)
	!?¿¡- matches a single character in the list !?¿¡- (case sensitive)
	
	Global pattern flags
	g modifier: global. All matches (don't return after first match)
	m modifier: multi line. Causes ^ and $ to match the begin/end of each line (not only begin/end of string)
	*/
	$string = preg_replace('/[^\p{L}\p{M}\p{Z}\p{N}\p{Sc}\%\'\"\!\?¿¡\-]/u', ' ', $string);
	
	$string = preg_replace('/[\'"]*(<|>)[\'"]*/us', '', $string);
	$string = str_replace(' ', ' ', $string); // do NOT remove, first is NOT blank space.
	$string = str_replace('️', ' ', $string); // do NOT remove, there is a ghost.
	$string = preg_replace('/-{2,}/', '-', $string);
	$string = preg_replace('/"{2,}/', '"', $string);
	$string = preg_replace("/'{2,}/", "'", $string);
	$string = preg_replace('/!{2,}/', '!', $string);
	$string = preg_replace("/[\?]+/", "?", $string);
	$string = preg_replace("/[%]+/", "%", $string);
	$string = str_replace('- -', ' - ', $string);
	$string = str_replace('! !', ' ! ', $string);
	$string = str_replace('? ?', ' ? ', $string);
	$string = rtrim($string, '-');
	$string = ltrim($string, '-');
	$string = trim(preg_replace('/\s+/', ' ', $string)); // strip blank spaces, tabs
	$string = trim($string);
	
	/*
	Remove non-breaking spaces
	In HTML, the common non-breaking space, which is the same width as the ordinary space character, is encoded as &nbsp; or &#160;.
	In Unicode, it is encoded as U+00A0.
	https://en.wikipedia.org/wiki/Non-breaking_space
	https://graphemica.com/00A0
	*/
	$string = preg_replace('~\x{00a0}~siu', '', $string);
	
	return $string;
}

/**
 * Tags Cleaner
 * Prevent problem with the #hashtags when they are only numeric
 *
 * @param $tagString
 * @param bool $forceArrayReturn
 * @return array|string|null
 */
function tagCleaner($tagString, bool $forceArrayReturn = false)
{
	$limit = (int)config('settings.single.tags_limit', 15);
	
	if (!is_array($tagString) && !is_string($tagString)) {
		return $forceArrayReturn ? [] : null;
	}
	
	$arrayExpected = false;
	
	if (is_array($tagString)) {
		$tagsArray = $tagString;
		$arrayExpected = true;
	} else {
		$tagsArray = preg_split('|[:,;#_\|\n\t]+|ui', $tagString);
	}
	
	$tags = [];
	$i = 0;
	foreach ($tagsArray as $tag) {
		$tag = strCleanerLite($tag);
		
		// Remove all tags (simultaneously) staring and ending by a number
		$tag = preg_replace('/\b\d+\b/ui', '', $tag);
		
		// Remove special characters
		$tag = str_replace([':', ',', ';', '_', '\\', '/', '|', '+'], '', $tag);
		
		// Change the tag case (lowercase)
		$tag = mb_strtolower(trim($tag));
		
		if ($tag != '') {
			if (mb_strlen($tag) > 1) {
				if ($i <= $limit) {
					$tags[] = $tag;
				}
				$i++;
			}
		}
	}
	$tags = array_unique($tags);
	
	if ($arrayExpected || $forceArrayReturn) {
		return $tags;
	}
	
	return !empty($tags) ? implode(',', $tags) : null;
}

function tagRegexPattern(): string
{
	/*
	 * Tags (Only allow letters, numbers, spaces and ',;_-' symbols)
	 *
	 * Explanation:
	 * [] 	=> character class definition
	 * p{L} => matches any kind of letter character from any language
	 * p{N} => matches any kind of numeric character
	 * _- 	=> matches underscore and hyphen
	 * + 	=> Quantifier — Matches between one to unlimited times (greedy)
	 * /u 	=> Unicode modifier. Pattern strings are treated as UTF-16. Also causes escape sequences to match unicode characters
	 */
	
	$regex = '/^[\p{L}\p{N} ,;_-]+$/u';
	
	return $regex;
}

/**
 * Only numeric string cleaner
 *
 * @param string|null $string
 * @return string|null
 */
function onlyNumCleaner(?string $string): ?string
{
	$tmpString = preg_replace('/\d/u', '', strip_tags($string));
	if ($tmpString == '') {
		$string = null;
	}
	
	return $string;
}

/**
 * Extract emails from string, and get the first
 *
 * @param string|null $string
 * @return string|null
 */
function extractEmailAddress(?string $string): ?string
{
	$tmp = [];
	preg_match_all('/([a-z0-9\-\._%\+]+@[a-z0-9\-\.]+\.[a-z]{2,4}\b)/i', $string, $tmp);
	$emails = (isset($tmp[1])) ? $tmp[1] : [];
	$email = head($emails);
	if ($email == '') {
		$tmp = [];
		preg_match('/[a-z0-9\-_]+(\.[a-z0-9\-_]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)*(\.[a-z]{2,3})/i', $string, $tmp);
		$email = (isset($tmp[0])) ? trim($tmp[0]) : '';
		if ($email == '') {
			$tmp = [];
			preg_match('/[a-z0-9\-\._%\+]+@[a-z0-9\-\.]+\.[a-z]{2,4}\b/i', $string, $tmp);
			$email = (isset($tmp[0])) ? trim($tmp[0]) : '';
		}
	}
	
	return strtolower($email);
}

/**
 * Return an array of all supported Languages
 *
 * @return array
 */
function getSupportedLanguages(): array
{
	$supportedLanguages = [];
	
	$cacheExpiration = (int)config('settings.optimization.cache_expiration', 86400);
	
	// Get supported languages from database
	try {
		// Get all DB Languages
		$activeLanguages = \Illuminate\Support\Facades\Cache::remember('languages.active.array', $cacheExpiration, function () {
			try {
				$activeLanguages = \App\Models\Language::where('active', 1)->orderBy('lft', 'ASC')->get()->toArray();
			} catch (\Exception $e) {
				$activeLanguages = \App\Models\Language::where('active', 1)->get()->toArray();
			}
			return $activeLanguages;
		});
		
		if (count($activeLanguages)) {
			foreach ($activeLanguages as $key => $lang) {
				$lang['regional'] = $lang['locale'];
				$supportedLanguages[$lang['abbr']] = $lang;
			}
		}
	} catch (\Exception $e) {
		/*
		 * Database or tables don't exists.
		 * The script will display an error or will start the installation.
		 * Please don't change anything here.
		 */
	}
	
	return $supportedLanguages;
}

/**
 * Check if language code is available
 *
 * @param string|null $abbr
 * @return bool
 */
function isAvailableLang(?string $abbr): bool
{
	$cacheExpiration = (int)config('settings.optimization.cache_expiration', 86400);
	$lang = \Illuminate\Support\Facades\Cache::remember('language.' . $abbr, $cacheExpiration, function () use ($abbr) {
		return \App\Models\Language::where('abbr', $abbr)->first();
	});
	
	return (!empty($lang));
}

function getHostByUrl($url)
{
	if (empty($url)) {
		return null;
	}
	
	// in case scheme relative URI is passed, e.g., //www.google.com/
	$url = trim($url, '/');
	
	// If scheme not included, prepend it
	if (!preg_match('#^http(s)?://#', $url)) {
		$url = 'http://' . $url;
	}
	
	$urlParts = parse_url($url);
	
	// remove www
	$domain = preg_replace('/^www\./', '', $urlParts['host']);
	
	return $domain;
}

/**
 * Add rel="nofollow" to links
 *
 * @param string|null $html
 * @param string|null $skip
 * @return array|string|string[]|null
 */
function noFollow(?string $html, string $skip = null)
{
	$callback = function ($mach) use ($skip) {
		return (!($skip && strpos($mach[1], $skip) !== false) && strpos($mach[1], 'rel=') === false)
			? $mach[1] . ' rel="nofollow">'
			: $mach[0];
	};
	
	return preg_replace_callback("#(<a[^>]+?)>#is", $callback, $html);
}

/**
 * Create auto-links for URLs in string
 *
 * @param string|null $str
 * @param array $attributes
 * @return array|string|string[]|null
 */
function createAutoLink(?string $str, array $attributes = [])
{
	// Transform URL to HTML link
	$attrs = '';
	foreach ($attributes as $attribute => $value) {
		$attrs .= " {$attribute}=\"{$value}\"";
	}
	
	$str = ' ' . $str;
	$str = preg_replace('`([^"=\'>])((http|https|ftp)://[^\s<]+[^\s<\.)])`i', '$1<a rel="nofollow" href="$2"' . $attrs . ' target="_blank">$2</a>', $str);
	$str = substr($str, 1);
	
	// Add rel=”nofollow” to links
	$parse = parse_url('http://' . $_SERVER['HTTP_HOST']);
	$str = noFollow($str, $parse['host']);
	
	// Find and attach target="_blank" to all href links from text
	$str = openLinksInNewWindow($str);
	
	return $str;
}

/**
 * Find and attach target="_blank" to all href links from text
 *
 * @param string|null $content
 * @return array|string|string[]
 */
function openLinksInNewWindow(?string $content)
{
	// Find all links
	preg_match_all('/<a ((?!target)[^>])+?>/ui', $content, $hrefMatches);
	
	// Loop only first array to modify links
	if (is_array($hrefMatches) && isset($hrefMatches[0])) {
		foreach ($hrefMatches[0] as $key => $value) {
			// Take orig link
			$origLink = $value;
			
			// Does it have target="_blank"
			if (!preg_match('/target="_blank"/ui', $origLink)) {
				// Add target = "_blank"
				$newLink = preg_replace("/<a(.*?)>/ui", "<a$1 target=\"_blank\">", $origLink);
				
				// Replace old link in content with new link
				$content = str_replace($origLink, $newLink, $content);
			}
		}
	}
	
	return $content;
}

/**
 * Add target=_blank to outside links
 *
 * @param string|null $content
 * @return null|string|string[]
 */
function openOutsideLinksInNewWindow(?string $content)
{
	// Remove existing "target" attribute
	$content = preg_replace('# target=[\'"]?[^\'"]*[\'"]?#ui', '', $content);
	
	// Add target=_blank to outside links
	$pattern = '#(<a\\b[^<>]*href=[\'"]?http[^<>]+)>#ui';
	$replace = '$1 target="_blank">';
	$content = preg_replace($pattern, $replace, $content);
	
	return $content;
}

/**
 * Check tld is a valid tld
 *
 * @param string|null $url
 * @return bool|int
 */
function checkTld(?string $url)
{
	if (empty($url)) {
		return null;
	}
	
	$parsedUrl = parse_url($url);
	if ($parsedUrl === false) {
		return false;
	}
	
	$tldArray = config('tlds');
	$patten = implode('|', array_keys($tldArray));
	
	return preg_match('/\.(' . $patten . ')$/i', $parsedUrl['host']);
}

/**
 * Function to convert hex value to rgb array
 *
 * @param string|null $colour
 * @return array|bool
 *
 * @todo: improve this function
 */
function hex2rgb(?string $colour)
{
	if ($colour[0] == '#') {
		$colour = substr($colour, 1);
	}
	if (strlen($colour) == 6) {
		[$r, $g, $b] = [$colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]];
	} elseif (strlen($colour) == 3) {
		[$r, $g, $b] = [$colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]];
	} else {
		return false;
	}
	$r = hexdec($r);
	$g = hexdec($g);
	$b = hexdec($b);
	
	return ['r' => $r, 'g' => $g, 'b' => $b];
}

/**
 * Convert hexdec color string to rgb(a) string
 *
 * @param $color
 * @param bool $opacity
 * @return string
 *
 * @todo: improve this function
 */
function hex2rgba($color, bool $opacity = false): string
{
	$default = 'rgb(0,0,0)';
	
	// Return default if no color provided
	if (empty($color)) {
		return $default;
	}
	
	// Sanitize $color if "#" is provided
	if ($color[0] == '#') {
		$color = substr($color, 1);
	}
	
	// Check if color has 6 or 3 characters and get values
	if (strlen($color) == 6) {
		$hex = [$color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]];
	} elseif (strlen($color) == 3) {
		$hex = [$color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]];
	} else {
		return $default;
	}
	
	// Convert hexadec to rgb
	$rgb = array_map('hexdec', $hex);
	
	// Check if opacity is set(rgba or rgb)
	if ($opacity) {
		if (abs($opacity) > 1) {
			$opacity = 1.0;
		}
		$output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
	} else {
		$output = 'rgb(' . implode(",", $rgb) . ')';
	}
	
	// Return rgb(a) color string
	return $output;
}

/**
 * ucfirst() function for multibyte character encodings
 *
 * @param string|null $string
 * @param string $encoding
 * @return string|null
 */
function mb_ucfirst(?string $string, string $encoding = 'utf-8'): ?string
{
	if (empty($string)) {
		return null;
	}
	
	$strLen = mb_strlen($string, $encoding);
	$firstChar = mb_substr($string, 0, 1, $encoding);
	$then = mb_substr($string, 1, $strLen - 1, $encoding);
	
	return mb_strtoupper($firstChar, $encoding) . $then;
}

/**
 * ucwords() function for multibyte character encodings
 *
 * @param string|null $string
 * @param string $encoding
 * @return string|null
 */
function mb_ucwords(?string $string, string $encoding = 'utf-8'): ?string
{
	if (empty($string)) {
		return null;
	}
	
	$tab = [];
	
	// Split the phrase by any number of space characters, which include " ", \r, \t, \n and \f
	$words = preg_split('/[\s]+/ui', $string);
	if (!empty($words)) {
		foreach ($words as $key => $word) {
			$tab[$key] = mb_ucfirst($word, $encoding);
		}
	}
	
	return (!empty($tab)) ? implode(' ', $tab) : null;
}

/**
 * parse_url() function for multibyte character encodings
 *
 * @param string|null $url
 * @param int $component
 * @return mixed
 */
function mb_parse_url(?string $url, int $component = -1)
{
	$callback = function ($matches) { return urlencode($matches[0]); };
	$encodedUrl = preg_replace_callback('%[^:/@?&=#]+%usD', $callback, $url);
	
	if (empty($encodedUrl)) {
		return null;
	}
	
	$parts = parse_url($encodedUrl, $component);
	
	if ($parts === false) {
		throw new \InvalidArgumentException('Malformed URL: ' . $url);
	}
	
	if (is_array($parts) && count($parts) > 0) {
		foreach ($parts as $name => $value) {
			$parts[$name] = urldecode($value);
		}
	}
	
	return $parts;
}

/**
 * Friendly UTF-8 URL for all languages
 *
 * @param string|null $string
 * @param string $separator
 * @return array|string|string[]|null
 */
function slugify(?string $string, string $separator = '-')
{
	// Remove accents using WordPress API method.
	$string = remove_accents($string);
	
	// Slug
	$string = mb_strtolower($string);
	$string = @trim($string);
	$replace = "/(\\s|\\" . $separator . ")+/mu";
	$subst = $separator;
	$string = preg_replace($replace, $subst, $string);
	
	// Remove unwanted punctuation, convert some to '-'
	$puncTable = [
		// remove
		"'"  => '',
		'"'  => '',
		'`'  => '',
		'='  => '',
		'+'  => '',
		'*'  => '',
		'&'  => '',
		'^'  => '',
		''   => '',
		'%'  => '',
		'$'  => '',
		'#'  => '',
		'@'  => '',
		'!'  => '',
		'<'  => '',
		'>'  => '',
		'?'  => '',
		// convert to minus
		'['  => '-',
		']'  => '-',
		'{'  => '-',
		'}'  => '-',
		'('  => '-',
		')'  => '-',
		' '  => '-',
		','  => '-',
		';'  => '-',
		':'  => '-',
		'/'  => '-',
		'|'  => '-',
		'\\' => '-',
	];
	$string = str_replace(array_keys($puncTable), array_values($puncTable), $string);
	
	// Clean up multiple '-' characters
	$string = preg_replace('/-{2,}/', '-', $string);
	
	// Remove trailing '-' character if string not just '-'
	if ($string != '-') {
		$string = rtrim($string, '-');
	}
	
	if ($separator != '-') {
		$string = str_replace('-', $separator, $string);
	}
	
	return $string;
}

/**
 * @return mixed|string
 */
function detectLocale()
{
	$lang = detectLanguage();
	
	return (!$lang->isEmpty()) ? $lang->get('locale') : 'en_US';
}

/**
 * @return \Illuminate\Support\Collection
 */
function detectLanguage(): \Illuminate\Support\Collection
{
	$obj = new App\Helpers\Localization\Language();
	
	return $obj->find();
}

/**
 * Get file/folder permissions.
 *
 * @param string $path
 * @return string
 */
function getPerms(string $path): string
{
	return substr(sprintf('%o', fileperms($path)), -4);
}

/**
 * Get all countries from PHP array (umpirsky)
 *
 * @return array|null
 */
function getCountriesFromArray(): ?array
{
	$countries = new App\Helpers\Localization\Helpers\Country();
	$countries = $countries->all();
	
	if (empty($countries)) return null;
	
	$arr = [];
	foreach ($countries as $code => $value) {
		if (!file_exists(storage_path('database/geonames/countries/' . strtolower($code) . '.sql'))) {
			continue;
		}
		$row = ['value' => $code, 'text' => $value];
		$arr[] = $row;
	}
	
	return $arr;
}

/**
 * Get all countries from DB (Geonames) & Translate them
 *
 * @param bool $includeNonActive
 * @return array
 */
function getCountries(bool $includeNonActive = false): array
{
	$arr = [];
	
	// Get installed countries list
	$countries = \App\Helpers\Localization\Country::getCountries($includeNonActive);
	
	if ($countries->count() > 0) {
		foreach ($countries as $code => $country) {
			// The country entry must be a Laravel Collection object
			if (!$country instanceof \Illuminate\Support\Collection) {
				$country = collect($country);
			}
			
			// Get the country data
			$code = ($country->has('code')) ? $country->get('code') : $code;
			$name = ($country->has('name')) ? $country->get('name') : '';
			$arr[$code] = $name;
		}
	}
	
	return $arr;
}

/**
 * Pluralization
 *
 * @param $number
 * @return int
 */
function getPlural($number)
{
	if (!is_numeric($number)) {
		$number = (int) $number;
	}
	
	if (config('lang.russian_pluralization')) {
		// Russian pluralization rules
		$typeOfPlural = (($number % 10 == 1) && ($number % 100 != 11))
			? 0
			: ((($number % 10 >= 2)
				&& ($number % 10 <= 4)
				&& (($number % 100 < 10)
					|| ($number % 100 >= 20)))
				? 1
				: 2
			);
	} else {
		// No rule for other languages
		$typeOfPlural = $number;
	}
	
	return $typeOfPlural;
}

/**
 * Get URL of Page by page's type
 *
 * @param string|null $type
 * @param string|null $locale
 * @return string
 */
function getUrlPageByType(?string $type, string $locale = null): string
{
	if (is_null($locale)) {
		$locale = config('app.locale');
	}
	
	$cacheExpiration = (int)config('settings.optimization.cache_expiration', 86400);
	$cacheId = 'page.' . $locale . '.type.' . $type;
	$page = \Cache::remember($cacheId, $cacheExpiration, function () use ($type, $locale) {
		$page = \App\Models\Page::type($type)->first();
		
		if (!empty($page)) {
			$page->setLocale($locale);
		}
		
		return $page;
	});
	
	$linkTarget = '';
	$linkRel = '';
	if (!empty($page)) {
		if ($page->target_blank == 1) {
			$linkTarget = ' target="_blank"';
		}
		if (!empty($page->external_link)) {
			$linkRel = ' rel="nofollow"';
			$url = $page->external_link;
		} else {
			$url = \App\Helpers\UrlGen::page($page);
		}
	} else {
		$url = '#';
	}
	
	// Get attributes
	return 'href="' . $url . '"' . $linkRel . $linkTarget;
}

/**
 * @param string|null $uploadType
 * @param bool $jsFormat
 * @return array|false|\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed|string|string[]
 */
function getUploadFileTypes(?string $uploadType = 'file', bool $jsFormat = false)
{
	if ($uploadType == 'image') {
		$types = config('settings.upload.image_types', 'jpg,jpeg,gif,png');
	} else {
		$types = config('settings.upload.file_types', 'pdf,doc,docx,word,rtf,rtx,ppt,pptx,odt,odp,wps,jpeg,jpg,bmp,png');
	}
	
	$separators = ['|', '-', ';', '.', '/', '_', ' '];
	$types = str_replace($separators, ',', $types);
	
	if ($jsFormat) {
		$types = explode(',', $types);
		$types = array_filter($types, function ($value) { return $value !== ''; });
		$types = json_encode($types);
	}
	
	return $types;
}

/**
 * @param string|null $uploadType
 * @return array|mixed|string
 */
function showValidFileTypes(?string $uploadType = 'file')
{
	$formats = getUploadFileTypes($uploadType);
	
	return str_replace(',', ', ', $formats);
}

/**
 * Json To Array
 * NOTE: Used for MySQL Json and Laravel array (casts) columns
 *
 * @param array|object|string $string
 * @return array|mixed
 */
function jsonToArray($string)
{
	if (is_array($string)) {
		return $string;
	}
	
	if (is_object($string)) {
		return \App\Helpers\Arr::fromObject($string);
	}
	
	if (isValidJson($string)) {
		$array = json_decode($string, true);
		// If the JSON was encoded in JSON by mistake
		if (!is_array($array)) {
			return jsonToArray($array);
		}
	} else {
		$array = [];
	}
	
	return $array;
}

/**
 * Check if variable contains valid JSON data
 *
 * @param $string
 * @return bool
 */
function isValidJson($string): bool
{
	if (!is_string($string)) return false;
	
	try {
		$object = json_decode($string);
	} catch (\Throwable $e) {
		return false;
	}
	
	return (json_last_error() == JSON_ERROR_NONE);
}

/**
 * Check if the string is a valid date
 *
 * @param string|null $value
 * @return bool
 */
function isValidDate(?string $value): bool
{
	$isValid = false;
	
	if (strtotime($value) !== false) {
		$value = date('Y-m-d H:i', strtotime($value));
	}
	
	$value = str_replace('/', '-', $value);
	$value = str_replace('.', '-', $value);
	
	if (\DateTime::createFromFormat('Y-m-d H:i:s', $value) !== false) {
		$isValid = true;
	} else {
		if (\DateTime::createFromFormat('Y-m-d H:i', $value) !== false) {
			$isValid = true;
		} else {
			if (\DateTime::createFromFormat('Y-m-d', $value) !== false) {
				$isValid = true;
			}
		}
	}
	
	return $isValid;
}

/**
 * Check if exec() function is available
 *
 * @return boolean
 */
function phpExecFuncEnabled(): bool
{
	try {
		// make a small test
		exec("ls");
		
		return function_exists('exec') && !in_array('exec', array_map('trim', explode(',', ini_get('disable_functions'))));
	} catch (\Throwable $e) {
		return false;
	}
}

/**
 * Check if function is enabled
 *
 * @param string $name
 * @return bool
 */
function phpFuncEnabled(string $name): bool
{
	try {
		$disabled = array_map('trim', explode(',', ini_get('disable_functions')));
		
		return !in_array($name, $disabled);
	} catch (\Throwable $e) {
		return false;
	}
}

/**
 * Run artisan config cache
 *
 * @return mixed
 */
function artisanConfigCache()
{
	// Artisan config:cache generate the following two files
	// Since config:cache runs in the background
	// to determine if it is done, we just check if the files modified time have been changed
	$files = ['bootstrap/cache/config.php', 'bootstrap/cache/services.php'];
	
	// get the last modified time of the files
	$last = 0;
	foreach ($files as $file) {
		$path = base_path($file);
		if (file_exists($path)) {
			if (filemtime($path) > $last) {
				$last = filemtime($path);
			}
		}
	}
	
	// Prepare to run (5 seconds for $timeout)
	$timeout = 5;
	$start = time();
	
	// Actually call the Artisan command
	$exitCode = \Artisan::call('config:cache');
	
	// Check if Artisan call is done
	while (true) {
		// Just finish if timeout
		if (time() - $start >= $timeout) {
			echo "Timeout\n";
			break;
		}
		
		// If any file is still missing, keep waiting
		// If any file is not updated, keep waiting
		// @todo: services.php file keeps unchanged after artisan config:cache
		foreach ($files as $file) {
			$path = base_path($file);
			if (!file_exists($path)) {
				sleep(1);
				continue;
			} else {
				if (filemtime($path) == $last) {
					sleep(1);
					continue;
				}
			}
		}
		
		// Just wait another extra 3 seconds before finishing
		sleep(3);
		break;
	}
	
	return $exitCode;
}

/**
 * Run artisan migrate
 *
 * @return mixed
 */
function artisanMigrate()
{
	return \Artisan::call('migrate', ["--force" => true]);
}

/**
 * Check if the PHP Exif component is enabled
 *
 * @return bool
 */
function exifExtIsEnabled(): bool
{
	try {
		if (extension_loaded('exif') && function_exists('exif_read_data')) {
			return true;
		}
		
		return false;
	} catch (\Exception $e) {
		return false;
	}
}

/**
 * @param string|null $purchaseCode
 * @param string|null $itemId
 * @return string
 */
function getPurchaseCodeApiEndpoint(?string $purchaseCode, string $itemId = null): string
{
	return config('larapen.core.purchaseCodeCheckerUrl') . $purchaseCode . '&domain=' . getDomain() . '&item_id=' . $itemId;
}

/**
 * Get Public File's URL
 *
 * @param string|null $filePath
 * @return \Illuminate\Contracts\Routing\UrlGenerator|string
 */
function fileUrl(?string $filePath)
{
	// Storage Disk Init.
	$disk = \App\Helpers\Files\Storage\StorageDisk::getDisk();
	
	try {
		return $disk->url($filePath);
	} catch (\Exception $e) {
		return url('common/file?path=' . $filePath);
	}
}

/**
 * Get Private File's URL
 *
 * @param string|null $filePath
 * @param string|null $diskName
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
 */
function privateFileUrl(?string $filePath, ?string $diskName = 'private')
{
	$queryString = 'path=' . $filePath;
	
	// For JC
	if (Str::startsWith($filePath, 'resumes/')) {
		$diskName = 'private';
	}
	
	if (!empty($diskName)) {
		$queryString = 'disk=' . $diskName . '&' . $queryString;
	}
	
	return url('common/file?' . $queryString);
}

/**
 * Build HTML attributes with PHP array
 *
 * @param array|null $attributes
 * @return string
 */
function buildAttributes(?array $attributes): string
{
	if (empty($attributes)) {
		return '';
	}
	
	$attributePairs = [];
	foreach ($attributes as $key => $val) {
		if (is_int($key)) {
			$attributePairs[] = $val;
		} else {
			$val = htmlspecialchars($val, ENT_QUOTES);
			$attributePairs[] = "{$key}=\"{$val}\"";
		}
	}
	
	$out = trim(implode(' ', $attributePairs));
	
	if (!empty($out)) {
		$out = ' ' . $out;
	}
	
	return $out;
}

/**
 * @param string|null $filePath
 * @param string|null $preConfigSize
 * @param array|null $attr
 * @return string
 */
function imgTag(?string $filePath, ?string $preConfigSize = 'big', ?array $attr = []): string
{
	$src = imgUrl($filePath, $preConfigSize);
	$attr = buildAttributes($attr);
	
	$out = '';
	if (config('settings.optimization.webp_format')) {
		$srcWebp = imgUrl($filePath, $preConfigSize, true);
		
		if (!Str::endsWith($srcWebp, '.webp')) {
			$out .= '<img src="' . $src . '"' . $attr . '>';
		} else {
			$out .= '<picture>';
			$out .= '<source srcset="' . $srcWebp . '" type="image/webp">';
			$out .= '<img src="' . $src . '"' . $attr . '>';
			$out .= '</picture>';
		}
	} else {
		$out .= '<img src="' . $src . '"' . $attr . '>';
	}
	
	return $out;
}

/**
 * @param string|null $filePath
 * @param string|null $preConfigSize
 * @param bool $webpFormat
 * @return string
 */
function imgUrl(?string $filePath, ?string $preConfigSize = 'big', bool $webpFormat = false): string
{
	// Check if this is the default picture
	if (
		Str::contains($filePath, config('larapen.core.logo'))
		|| Str::contains($filePath, config('larapen.core.favicon'))
		|| Str::contains($filePath, config('larapen.core.picture.default'))
		|| Str::contains($filePath, config('larapen.admin.logo.dark'))
		|| Str::contains($filePath, config('larapen.admin.logo.light'))
	) {
		return \Storage::disk(config('filesystems.default'))->url($filePath) . getPictureVersion();
	}
	
	// Storage Disk Init.
	$disk = \App\Helpers\Files\Storage\StorageDisk::getDisk();
	
	// Get pre-resized picture URL
	$picTypesAdmin = ['logo', 'cat', 'small', 'medium', 'big'];
	$picTypesOther = array_keys((array)config('larapen.core.picture.otherTypes'));
	$picTypesGlobal = array_merge($picTypesAdmin, $picTypesOther);
	if (!in_array($preConfigSize, $picTypesGlobal)) {
		try {
			return $disk->url($filePath) . getPictureVersion();
		} catch (\Exception $e) {
			return url('common/file?path=' . $filePath) . getPictureVersion(true);
		}
	}
	
	// Check, Create thumbnail and Get its URL
	if ($webpFormat) {
		return resizeWebp($disk, $filePath, $preConfigSize);
	} else {
		return resize($disk, $filePath, $preConfigSize);
	}
}

/**
 * @param $disk
 * @param string|null $filePath
 * @param string|null $preConfigSize
 * @param bool $webpFormat
 * @return string
 */
function resize($disk, ?string $filePath, ?string $preConfigSize = 'big', bool $webpFormat = false): string
{
	// Image Quality
	$imageQuality = config('settings.upload.image_quality', 90);
	
	// Get Dimensions
	$defaultWidth = config('larapen.core.picture.otherTypes.' . $preConfigSize . '.width', 816);
	$defaultHeight = config('larapen.core.picture.otherTypes.' . $preConfigSize . '.height', 460);
	$width = (int)config('settings.upload.img_resize_' . $preConfigSize . '_width', $defaultWidth);
	$height = (int)config('settings.upload.img_resize_' . $preConfigSize . '_height', $defaultHeight);
	
	$filename = (!Str::endsWith($filePath, DIRECTORY_SEPARATOR)) ? basename($filePath) : '';
	$fileDir = str_replace($filename, '', $filePath);
	$fileDir = rtrim($fileDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
	
	// WebP
	$filenameWithoutExtension = substr($filename, 0, strrpos($filename, '.'));
	$webpFilename = $filenameWithoutExtension . '.webp';
	if ($webpFormat) {
		$filename = $webpFilename;
	}
	
	// Thumb file name
	$sizeLabel = $width . 'x' . $height;
	$thumbFilename = 'thumb-' . $sizeLabel . '-' . $filename;
	$thumbFilePath = $fileDir . $thumbFilename;
	
	// Check if thumb image exists
	if ($disk->exists($thumbFilePath)) {
		// Get the image URL
		try {
			return $disk->url($thumbFilePath) . getPictureVersion();
		} catch (\Exception $e) {
			return url('common/file?path=' . $thumbFilePath) . getPictureVersion();
		}
	} else {
		// Create thumb image if it not exists
		try {
			// Get file extension
			if ($webpFormat) {
				$extension = 'webp';
			} else {
				$extension = (is_png($disk->get($filePath))) ? 'png' : 'jpg';
			}
			
			// Init. Intervention
			$image = \Image::make($disk->get($filePath));
			
			// Get the image original dimensions
			$imgWidth = (int)$image->width();
			$imgHeight = (int)$image->height();
			
			// Manage Image By Type
			
			// Get Other Types Parameters
			if (in_array($preConfigSize, array_keys((array)config('larapen.core.picture.otherTypes')))) {
				// Get image manipulation settings
				$width = (int)config('larapen.core.picture.otherTypes.' . $preConfigSize . '.width', 900);
				$height = (int)config('larapen.core.picture.otherTypes.' . $preConfigSize . '.height', 900);
				$ratio = config('larapen.core.picture.otherTypes.' . $preConfigSize . '.ratio', '1');
				$upSize = config('larapen.core.picture.otherTypes.' . $preConfigSize . '.upsize', '0');
				
				// If the original dimensions are higher than the resize dimensions
				// OR the 'upsize' option is enable, then resize the image
				if ($imgWidth > $width || $imgHeight > $height) {
					// Resize
					$image = $image->resize($width, $height, function ($constraint) use ($ratio, $upSize) {
						if ($ratio == '1') {
							$constraint->aspectRatio();
						}
						if ($upSize == '1') {
							$constraint->upsize();
						}
					});
				}
			} else if (in_array($preConfigSize, ['logo', 'cat'])) {
				// Get image manipulation settings
				$ratio = config('settings.upload.img_resize_logo_ratio', '1');
				$upSize = config('settings.upload.img_resize_logo_upsize', '0');
				
				// If the original dimensions are higher than the resize dimensions
				// OR the 'upsize' option is enable, then resize the image
				if ($imgWidth > $width || $imgHeight > $height || $upSize == '1') {
					// Resize
					$image = $image->resize($width, $height, function ($constraint) use ($ratio, $upSize) {
						if ($ratio == '1') {
							$constraint->aspectRatio();
						}
						if ($upSize == '1') {
							$constraint->upsize();
						}
					});
				}
			} else if (in_array($preConfigSize, ['large', 'big', 'medium', 'small'])) {
				// Get image manipulation settings
				$resizeType = config('settings.upload.img_resize_' . $preConfigSize . '_resize_type', '0');
				$ratio = config('settings.upload.img_resize_' . $preConfigSize . '_ratio', '1');
				$upSize = config('settings.upload.img_resize_' . $preConfigSize . '_upsize', '0');
				$position = config('settings.upload.img_resize_' . $preConfigSize . '_position', 'center');
				$relative = config('settings.upload.img_resize_' . $preConfigSize . '_relative', false);
				$bgColor = config('settings.upload.img_resize_' . $preConfigSize . '_bg_color', 'ffffff');
				
				if ($resizeType == '0') {
					if ($imgWidth > $width || $imgHeight > $height || $upSize == '1') {
						// Resize
						$image = $image->resize($width, $height, function ($constraint) use ($ratio, $upSize) {
							if ($ratio == '1') {
								$constraint->aspectRatio();
							}
							if ($upSize == '1') {
								$constraint->upsize();
							}
						});
					}
				} else if ($resizeType == '1') {
					// Fit
					$image = $image->fit($width, $height, function ($constraint) use ($ratio, $upSize) {
						if ($ratio == '1') {
							$constraint->aspectRatio();
						}
						if ($upSize == '1') {
							$constraint->upsize();
						}
					});
				} else if ($resizeType == '2') {
					if ($imgWidth > $width || $imgHeight > $height || $upSize == '1') {
						// Resize (for ResizeCanvas)
						$image = $image->resize($width, $height, function ($constraint) use ($ratio, $upSize) {
							if ($ratio == '1') {
								$constraint->aspectRatio();
							}
							if ($upSize == '1') {
								$constraint->upsize();
							}
						});
					}
					// ResizeCanvas
					$image = $image->resizeCanvas($width, $height, $position, $relative, $bgColor)->resize($width, $height);
				} else {
					if ($imgWidth > $width || $imgHeight > $height) {
						// Resize (with hard parameters)
						$image = $image->resize($width, $height, function ($constraint) {
							$constraint->aspectRatio();
						});
					}
				}
			} else {
				if ($imgWidth > $width || $imgHeight > $height) {
					// Resize (with hard parameters)
					$image = $image->resize($width, $height, function ($constraint) {
						$constraint->aspectRatio();
					});
				}
			}
			
			// Encode the Image!
			$image = $image->encode($extension, $imageQuality);
			
		} catch (\Exception $e) {
			return \Storage::disk(config('filesystems.default'))->url($filePath) . getPictureVersion();
		}
		
		// Store the image on disk.
		$disk->put($thumbFilePath, $image->stream()->__toString());
		
		// Now delete temporary intervention image as we have moved it to Storage folder with Laravel filesystem.
		$image->destroy();
		
		// Get the image URL
		try {
			return $disk->url($thumbFilePath) . getPictureVersion();
		} catch (\Exception $e) {
			return url('common/file?path=' . $thumbFilePath) . getPictureVersion();
		}
	}
}

/**
 * @param $disk
 * @param string|null $filePath
 * @param string|null $type
 * @return string
 */
function resizeWebp($disk, ?string $filePath, ?string $type = 'big'): string
{
	return resize($disk, $filePath, $type, true);
}

/**
 * @param $path
 * @param $file
 * @return string|null
 */
function uploadPostLogo($path, $file): ?string
{
	if (!$file instanceof \Illuminate\Http\UploadedFile) {
		return null;
	}
	
	$disk = \App\Helpers\Files\Storage\StorageDisk::getDisk();
	
	try {
		// Get file original infos
		$fileOrigName = $file->getClientOriginalName();
		$fileOrigExtension = $file->getClientOriginalExtension();
		if (empty($fileOrigExtension)) {
			$fileOrigExtension = 'jpg';
		}
		
		// Image quality
		$imageQuality = config('settings.upload.image_quality', 90);
		
		// Image default dimensions
		$width = (int)config('settings.upload.img_resize_width', 1000);
		$height = (int)config('settings.upload.img_resize_height', 1000);
		
		// Other parameters
		$ratio = config('settings.upload.img_resize_ratio', '1');
		$upSize = config('settings.upload.img_resize_upsize', '1');
		
		// Init. Intervention
		$image = \Intervention\Image\Facades\Image::make($file);
		
		// Get the image original dimensions
		$imgWidth = (int)$image->width();
		$imgHeight = (int)$image->height();
		
		// If the original dimensions are higher than the resize dimensions
		// OR the 'upsize' option is enable, then resize the image
		if ($imgWidth > $width || $imgHeight > $height || $upSize == '1') {
			// Resize
			$image = $image->resize($width, $height, function ($constraint) use ($ratio, $upSize) {
				if ($ratio == '1') {
					$constraint->aspectRatio();
				}
				if ($upSize == '1') {
					$constraint->upsize();
				}
			});
		}
		
		// Encode the Image!
		$image = $image->encode($fileOrigExtension, $imageQuality);
		
		// Generate a filename.
		$filename = md5($fileOrigName . time()) . '.' . $fileOrigExtension;
		
		// Get filepath
		$filePath = $path . '/' . $filename;
		
		// Store the image on disk.
		$disk->put($filePath, $image->stream()->__toString());
		
		// Save the path to the database
		return $filePath;
	} catch (\Exception $e) {
	}
	
	return null;
}

/**
 * Get pictures version
 *
 * @param bool $queryStringExists
 * @return string
 */
function getPictureVersion(bool $queryStringExists = false): string
{
	$pictureVersion = '';
	if (config('larapen.core.picture.versioned') && !empty(config('larapen.core.picture.version'))) {
		$pictureVersion .= ($queryStringExists) ? '&' : '?';
		$pictureVersion .= 'v=' . config('larapen.core.picture.version');
	}
	
	return $pictureVersion;
}

/**
 * @return string
 */
function vTime(): string
{
	$timeStamp = '?v=' . time();
	if (app()->environment(['staging', 'production'])) {
		$timeStamp = '';
	}
	
	return $timeStamp;
}

/**
 * Get image extension from base64 string
 *
 * @param string|null $bufferImg
 * @param bool $recursive
 * @return bool
 */
function is_png(?string $bufferImg, bool $recursive = true): bool
{
	$f = finfo_open();
	$result = finfo_buffer($f, $bufferImg, FILEINFO_MIME_TYPE);
	
	if (!Str::contains($result, 'image') && $recursive) {
		// Plain Text
		return Str::contains($bufferImg, 'image/png');
	}
	
	return $result == 'image/png';
}

/**
 * Get the login field
 *
 * @param string|null $value
 * @return string
 */
function getLoginField(?string $value): string
{
	$field = 'username';
	if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
		$field = 'email';
	} else if (preg_match('/^((\+|00)\d{1,3})?[\s\d]+$/', $value)) {
		$field = 'phone';
	}
	
	return $field;
}

/**
 * Get Phone's National Format
 *
 * @param string|null $phone
 * @param string|null $countryCode
 * @param int $format
 * @return array|string|string[]|null
 */
function phoneFormat(?string $phone, string $countryCode = null, int $format = \libphonenumber\PhoneNumberFormat::NATIONAL)
{
	// Set the phone format
	try {
		$phone = phone($phone, $countryCode, $format);
	} catch (\Exception $e) {
		// Keep the default value
	}
	
	// Keep only numeric characters
	return preg_replace('/[^0-9\+]/', '', $phone);
}

/**
 * Get Phone's International Format
 *
 * @param string|null $phone
 * @param $countryCode
 * @param int $format
 * @return array|string|string[]|null
 */
function phoneFormatInt(?string $phone, $countryCode = null, int $format = \libphonenumber\PhoneNumberFormat::INTERNATIONAL)
{
	return phoneFormat($phone, $countryCode, $format);
}

/**
 * @param string|null $phone
 * @param string|null $provider
 * @return array|string|string[]
 */
function setPhoneSign(?string $phone, string $provider = null)
{
	if ($provider == 'nexmo') {
		// Nexmo doesn't support the sign '+'
		if (Str::startsWith($phone, '+')) {
			$phone = str_replace('+', '', $phone);
		}
	}
	
	if ($provider == 'twilio') {
		// Twilio requires the sign '+'
		if (!Str::startsWith($phone, '+')) {
			$phone = '+' . $phone;
		}
	}
	
	return $phone;
}

/**
 * @param string|null $countryCode
 * @return string
 */
function getPhoneIcon(?string $countryCode): string
{
	if (file_exists(public_path() . '/images/flags/16/' . strtolower($countryCode) . '.png')) {
		$phoneIcon = '<img src="' . url('images/flags/16/' . strtolower($countryCode) . '.png') . getPictureVersion() . '" style="padding: 2px;">';
	} else {
		$phoneIcon = '<i class="fas fa-mobile-alt"></i>';
	}
	
	return $phoneIcon;
}

/**
 * @param string|null $field
 * @return bool
 */
function isEnabledField(?string $field): bool
{
	$isEnabled = true;
	
	// Front Register Form
	if ($field == 'phone') {
		$isEnabled = !config('larapen.core.disable.phone');
	}
	if ($field == 'email') {
		$isEnabled = !config('larapen.core.disable.email') ||
			(config('larapen.core.disable.email') && config('larapen.core.disable.phone'));
	}
	if ($field == 'username') {
		$isEnabled = !config('larapen.core.disable.username');
	}
	
	return $isEnabled;
}

/**
 * @return array|\Illuminate\Contracts\Translation\Translator|string|null
 */
function getLoginLabel()
{
	if (isEnabledField('email') && isEnabledField('phone')) {
		$loginLabel = t('Email or Phone');
	} else {
		if (isEnabledField('phone')) {
			$loginLabel = t('phone');
		} else {
			$loginLabel = t('Email address');
		}
	}
	
	return $loginLabel;
}

/**
 * @return array|\Illuminate\Contracts\Translation\Translator|string|null
 */
function getTokenLabel()
{
	if (isEnabledField('email') && isEnabledField('phone')) {
		$loginLabel = t('Code received by SMS or Email');
	} else {
		if (isEnabledField('phone')) {
			$loginLabel = t('Code received by SMS');
		} else {
			$loginLabel = t('Code received by Email');
		}
	}
	
	return $loginLabel;
}

/**
 * @return array|\Illuminate\Contracts\Translation\Translator|string|null
 */
function getTokenMessage()
{
	if (isEnabledField('email') && isEnabledField('phone')) {
		$loginLabel = t('Enter the code you received by SMS or Email in the field below');
	} else {
		if (isEnabledField('phone')) {
			$loginLabel = t('Enter the code you received by SMS in the field below');
		} else {
			$loginLabel = t('Enter the code you received by Email in the field below');
		}
	}
	
	return $loginLabel;
}

/**
 * Replace global variables patterns from string
 *
 * @param string|null $string
 * @param bool $removeUnmatchedPatterns
 * @return string|string[]
 */
function replaceGlobalPatterns(?string $string, bool $removeUnmatchedPatterns = true)
{
	$string = str_replace('{app.name}', config('app.name'), $string);
	$string = str_replace('{country.name}', config('country.name'), $string);
	$string = str_replace('{country}', config('country.name'), $string);
	
	if (config('settings.app.slogan')) {
		$string = str_replace('{app.slogan}', config('settings.app.slogan'), $string);
	}
	
	if (Str::contains($string, '{count.ads}')) {
		try {
			$countPosts = \App\Models\Post::whereHas('country')->currentCountry()->unarchived()->count();
		} catch (\Exception $e) {
			$countPosts = 0;
		}
		$string = str_replace('{count.ads}', $countPosts, $string);
	}
	if (Str::contains($string, '{count.users}')) {
		try {
			$countUsers = \App\Models\User::count();
		} catch (\Exception $e) {
			$countUsers = 0;
		}
		$string = str_replace('{count.users}', $countUsers, $string);
	}
	
	if ($removeUnmatchedPatterns) {
		$string = removeUnmatchedPatterns($string);
	}
	
	return $string;
}

/**
 * Remove all unmatched variables patterns (e.g. {foo}) from a string
 *
 * @param string|null $string
 * @return string
 */
function removeUnmatchedPatterns(?string $string): string
{
	$string = preg_replace('|\{[^\}]+\}|ui', '', $string);
	$string = preg_replace('|,([\s]*,)+|ui',  ',', $string);
	$string = preg_replace('|\s\s+|ui', ' ', $string);
	
	return trim($string, " \n\r\t\v\0,-");
}

/**
 * Get meta tag from settings
 *
 * @param string|null $page
 * @return array
 */
function getMetaTag(?string $page): array
{
	$metaTag = ['title' => '', 'description' => '', 'keywords' => ''];
	
	// Check if the Domain Mapping plugin is available
	if (config('plugins.domainmapping.installed')) {
		$metaTag = \extras\plugins\domainmapping\Domainmapping::getMetaTag($page);
		if (!empty($metaTag) && !arrayItemsAreEmpty($metaTag)) {
			return $metaTag;
		}
	}
	
	// Get the current Language
	$languageCode = config('lang.abbr', config('app.locale'));
	
	// Get the Page's MetaTag
	$model = null;
	try {
		$cacheExpiration = (int)config('settings.optimization.cache_expiration', 86400);
		$cacheId = 'metaTag.' . $languageCode . '.' . $page;
		$model = cache()->remember($cacheId, $cacheExpiration, function () use ($languageCode, $page) {
			$model = \App\Models\MetaTag::where('page', $page)->first(['title', 'description', 'keywords']);
			
			if (!empty($model)) {
				$model->setLocale($languageCode);
				$model = $model->toArray();
			}
			
			return $model;
		});
	} catch (\Exception $e) {
	}
	
	if (!empty($model)) {
		$metaTag = $model;
		
		$metaTag['title'] = getColumnTranslation($metaTag['title'], $languageCode);
		$metaTag['description'] = getColumnTranslation($metaTag['description'], $languageCode);
		$metaTag['keywords'] = getColumnTranslation($metaTag['keywords'], $languageCode);
		
		$metaTag['title'] = replaceGlobalPatterns($metaTag['title'], false);
		$metaTag['description'] = replaceGlobalPatterns($metaTag['description'], false);
		$metaTag['keywords'] = mb_strtolower(replaceGlobalPatterns($metaTag['keywords'], false));
		
		return array_values($metaTag);
	}
	
	$pagesThatHaveTheirOwnDefaultMetaTags = [
		'search',
		'searchCategory',
		'searchLocation',
		'searchProfile',
		'searchTag',
		'listingDetails',
		'staticPage'
	];
	
	if (!in_array($page, $pagesThatHaveTheirOwnDefaultMetaTags)) {
		if (config('settings.app.slogan')) {
			$metaTag['title'] = config('app.name') . ' - ' . config('settings.app.slogan');
		} else {
			$metaTag['title'] = config('app.name') . ' - ' . config('country.name');
		}
		$metaTag['description'] = $metaTag['title'];
	}
	
	if (!is_array($metaTag)) {
		$metaTag = [];
	}
	$metaTag['title'] = $metaTag['title'] ?? null;
	$metaTag['description'] = $metaTag['description'] ?? null;
	$metaTag['keywords'] = $metaTag['keywords'] ?? null;
	
	return array_values($metaTag);
}

/**
 * Check if an array contains only empty items/elements
 *
 * @param array|null $array
 * @return bool
 * @todo: Make it recursive
 */
function arrayItemsAreEmpty(?array $array): bool
{
	if (empty($array)) {
		return true;
	}
	
	// Check if the array contains a non-empty element
	$newArray = $array;
	foreach ($array as $key => $value) {
		if (empty($value) && array_key_exists($key, $newArray)) {
			unset($newArray[$key]);
		}
	}
	if (!empty($newArray)) {
		return false;
	} else {
		return true;
	}
}

/**
 * Redirect (Prevent Browser cache)
 *
 * @param string $url
 * @param int $code (301 => Moved Permanently | 302 => Moved Temporarily)
 * @param array $headers
 */
function redirectUrl(string $url, int $code = 301, array $headers = [])
{
	if (is_array($headers) && !empty($headers)) {
		foreach ($headers as $key => $value) {
			if (strpos($value, 'post-check') !== false || strpos($value, 'pre-check') !== false) {
				header($key . ": " . $value, false);
			} else {
				header($key . ": " . $value);
			}
		}
	}
	
	header("Location: " . $url, true, $code);
	exit();
}

/**
 * Split a name into the first name and last name
 *
 * @param string|null $input
 * @return array
 */
function splitName(?string $input): array
{
	$output = [];
	
	$space = mb_strpos($input, ' ');
	if ($space !== false) {
		$output['firstName'] = mb_substr($input, 0, $space);
		$output['lastName'] = mb_substr($input, $space, strlen($input));
	} else {
		$output['firstName'] = '';
		$output['lastName'] = $input;
	}
	
	return $output;
}

/**
 * Zero leading for numeric values
 *
 * @param string|null $value
 * @param int $padLength
 * @return string|null
 */
function zeroLead(?string $value, int $padLength = 2): ?string
{
	if (is_numeric($value)) {
		$value = str_pad($value, $padLength, '0', STR_PAD_LEFT);
	}
	
	return $value;
}

/**
 * Get the Distance Calculation Unit
 *
 * @param string|null $countryCode
 * @return string
 */
function getDistanceUnit(string $countryCode = null)
{
	if (empty($countryCode)) {
		$countryCode = config('country.code');
	}
	$unit = \Larapen\LaravelDistance\Helper::getDistanceUnit($countryCode);
	
	return t($unit);
}

/**
 * Check if the app's installation files exist
 *
 * @return bool
 */
function appInstallFilesExist(): bool
{
	// Check if the '.env' and 'storage/installed' files exist
	if (file_exists(base_path('.env')) && file_exists(storage_path('installed'))) {
		return true;
	}
	
	return false;
}

/**
 * Check if the app is installed
 *
 * @return bool
 */
function appIsInstalled(): bool
{
	// Check if the app's installation files exist
	return appInstallFilesExist();
}

/**
 * Check if an update is available
 *
 * @return bool
 */
function updateIsAvailable(): bool
{
	// Check if the '.env' file exists
	if (!file_exists(base_path('.env'))) {
		return false;
	}
	
	$updateIsAvailable = false;
	
	// Get eventual new version value & the current (installed) version value
	$lastVersion = getLatestVersion();
	$currentVersion = getCurrentVersion();
	
	// Check the update
	if (version_compare($lastVersion, $currentVersion, '>')) {
		$updateIsAvailable = true;
	}
	
	return $updateIsAvailable;
}

/**
 * Get the script possible URL base
 *
 * @return string
 */
function getRawBaseUrl(): string
{
	// Get the Laravel App public path name
	$laravelPublicPath = trim(public_path(), '/');
	$laravelPublicPathLabel = last(explode('/', $laravelPublicPath));
	
	// Get Server Variables
	$httpHost = (trim(request()->server('HTTP_HOST')) != '') ? request()->server('HTTP_HOST') : ($_SERVER['HTTP_HOST'] ?? '');
	$requestUri = (trim(request()->server('REQUEST_URI')) != '') ? request()->server('REQUEST_URI') : ($_SERVER['REQUEST_URI'] ?? '');
	
	// Clear the Server Variables
	$httpHost = trim($httpHost, '/');
	$requestUri = trim($requestUri, '/');
	$requestUri = (mb_substr($requestUri, 0, strlen($laravelPublicPathLabel)) === $laravelPublicPathLabel) ? '/' . $laravelPublicPathLabel : '';
	
	// Get the Current URL
	$currentUrl = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://') . $httpHost . strtok($requestUri, '?');
	$currentUrl = head(explode('/' . admin_uri(), $currentUrl));
	
	// Get the Base URL
	$baseUrl = head(explode('/install', $currentUrl));
	$baseUrl = rtrim($baseUrl, '/');
	
	return $baseUrl;
}

/**
 * Get the installed version value
 *
 * @return null|string
 */
function getCurrentVersion(): ?string
{
	// Get the Current Version
	$version = null;
	if (\Jackiedo\DotenvEditor\Facades\DotenvEditor::keyExists('APP_VERSION')) {
		try {
			$version = \Jackiedo\DotenvEditor\Facades\DotenvEditor::getValue('APP_VERSION');
		} catch (\Exception $e) {
		}
	}
	$version = checkAndUseSemVer($version);
	
	return $version;
}

/**
 * Get the app's latest version
 *
 * @return string
 */
function getLatestVersion(): string
{
	return checkAndUseSemVer(config('app.appVersion'));
}

/**
 * Check and use semver version num format
 *
 * @param string $version
 * @return string
 */
function checkAndUseSemVer(string $version): string
{
	$semver = '0.0.0';
	if (!empty($version)) {
		$numPattern = '([0-9]+)';
		if (preg_match('#^' . $numPattern . '\.' . $numPattern . '\.' . $numPattern . '$#', $version)) {
			$semver = $version;
		} else {
			if (preg_match('#^' . $numPattern . '\.' . $numPattern . '$#', $version)) {
				$semver = $version . '.0';
			} else {
				if (preg_match('#^' . $numPattern . '$#', $version)) {
					$semver = $version . '.0.0';
				} else {
					$semver = '0.0.0';
				}
			}
		}
	}
	
	return $semver;
}

/**
 * Extract only digit characters
 *
 * @param string|null $value
 * @param int|null $default
 * @return string|int|null
 */
function strToDigit(?string $value, int $default = null)
{
	$value = trim(preg_replace('/[^0-9]/', '', $value));
	if (empty($value)) {
		$value = $default;
	}
	
	return $value;
}

/**
 * Extract only digit characters and Convert the result in integer
 *
 * @param string|null $value
 * @param int $default
 * @return int
 */
function strToInt(?string $value, int $default = 0): int
{
	return (int)strToDigit($value, $default);
}

/**
 * Change whitespace (\n and \r) to simple space in string
 * PHP_EOL catches newlines that \n, \r\n, \r miss.
 *
 * @param string|null $string
 * @return array|string|string[]
 */
function changeWhiteSpace(?string $string)
{
	return str_replace(PHP_EOL, ' ', $string);
}

/**
 * PHP round() function that always return a float value in any language
 *
 * @param float|int $val
 * @param int $precision
 * @param int $mode
 * @return string
 */
function round_val($val, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): string
{
	return number_format((float)round($val, $precision, $mode), $precision, '.', '');
}

/**
 * Print JavaScript code in HTML
 *
 * @param string|null $code
 * @return array|string|string[]
 */
function printJs(?string $code)
{
	// Get the External JS, and make for them a pattern
	$exRegex = '/<script([a-z0-9\-_ ]+)src=([^>]+)>(.*?)<\/script>/ius';
	$replace = '<#EXTERNALJS#$1src=$2>$3</#EXTERNALJS#>';
	$code = preg_replace($exRegex, $replace, $code);
	
	// Get the Inline JS, and make for them a pattern
	$inRegex = '/<script([^>]*)>(.*?)<\/script>/ius';
	$replace = '<#INLINEJS#$1>$2</#INLINEJS#>';
	while (preg_match($inRegex, $code)) {
		$code = preg_replace($inRegex, $replace, $code);
	}
	
	// Replace the patterns
	$code = str_replace(['#EXTERNALJS#', '#INLINEJS#'], 'script', $code);
	
	// The code doesn't contain a <script> tag
	if (!preg_match($inRegex, $code)) {
		$code = '<script type="text/javascript">' . "\n" . $code . "\n" . '</script>';
	}
	
	return $code;
}

/**
 * Print CSS codes in HTML
 *
 * @param string|null $code
 * @return string
 */
function printCss(?string $code): string
{
	$code = preg_replace('/<[^>]+>/i', '', $code);
	$code = '<style>' . "\n" . $code . "\n" . '</style>';
	
	return $code;
}

/**
 * Get Front Skin
 *
 * @param string|null $skin
 * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
 */
function getFrontSkin(string $skin = null)
{
	$savedSkin = config('settings.style.skin', 'default');
	
	if (!empty($skin)) {
		$skinsArray = config('larapen.core.skins');
		if (!is_array($skinsArray) || !array_key_exists($skin, $skinsArray)) {
			$skin = $savedSkin;
		}
	} else {
		$skin = $savedSkin;
	}
	
	return $skin;
}

/**
 * Count the total number of line of a given file without loading the entire file.
 * This is effective for large file
 *
 * @param string $path
 * @return int
 */
function lineCount(string $path): int
{
	$file = new \SplFileObject($path, 'r');
	$file->seek(PHP_INT_MAX);
	
	return $file->key() + 1;
}

/**
 * Escape characters with slashes like in C & Remove the double white spaces
 *
 * @param string|null $string
 * @param string $quote
 * @return null|string|string[]
 */
function addcslashesLite(?string $string, string $quote = '"')
{
	return preg_replace("/\s+/ui", " ", addcslashes($string, $quote));
}

/**
 * Get the current request path by pattern
 *
 * @param string|null $pattern
 * @return string
 */
function getRequestPath(string $pattern = null): string
{
	if (empty($pattern)) {
		return request()->path();
	}
	
	$pattern = '#(' . $pattern . ')#ui';
	
	$tmp = '';
	preg_match($pattern, request()->path(), $tmp);
	
	return (isset($tmp[1]) && !empty($tmp[1])) ? $tmp[1] : request()->path();
}

/**
 * Get random password
 *
 * @param int $length
 * @return false|string
 */
function getRandomPassword(int $length)
{
	$allowedCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%^&#!$%^&#';
	$random = str_shuffle($allowedCharacters);
	$password = substr($random, 0, $length);
	
	if (is_bool($password) || empty($password)) {
		$password = Str::random($length);
	}
	
	return $password;
}

/**
 * Get an unique code
 *
 * @param int $limit
 * @return false|string
 */
function uniqueCode(int $limit)
{
	$uniqueCode = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
	
	if (is_bool($uniqueCode) || empty($uniqueCode)) {
		$uniqueCode = Str::random($limit);
	}
	
	return $uniqueCode;
}

/**
 * Hashids is a small PHP library to generate YouTube-like ids from numbers.
 * Use it when you don't want to expose your database numeric ids to users
 *
 * @param $in
 * @param bool $toNum
 * @param bool $withPrefix
 * @param int $minHashLength
 * @param string $salt
 * @return array|mixed|string|null
 */
function hashId($in, bool $toNum = false, bool $withPrefix = true, int $minHashLength = 11, string $salt = '')
{
	if (!config('settings.seo.listing_hashed_id_enabled') && !isHashedId($in)) {
		return $in;
	}
	
	$hidPrefix = $withPrefix ? config('larapen.core.hashableIdPrefix') : '';
	$hidPrefix = is_string($hidPrefix) ? $hidPrefix : '';
	
	$hashIds = new \Hashids\Hashids($salt, $minHashLength);
	
	if (!$toNum) {
		$out = $hidPrefix . $hashIds->encode($in);
	} else {
		$in = ltrim($in, $hidPrefix);
		$out = $hashIds->decode($in);
		if (isset($out[0])) {
			$out = $out[0];
		}
	}
	
	return !empty($out) ? $out : null;
}

/**
 * @param $in
 * @param int $minHashLength
 * @return bool
 */
function isHashedId($in, int $minHashLength = 11): bool
{
	$hidPrefix = config('larapen.core.hashableIdPrefix');
	$hidPrefixLength = is_string($hidPrefix) ? strlen($hidPrefix) : 0;
	
	return (
		preg_match('/[a-z0-9A-Z]+/', $in)
		&& (strlen($in) == ($minHashLength + $hidPrefixLength))
	);
}

/**
 * Get routes prefixes to ban to match listing route's path
 *
 * @return array
 */
function regexSimilarRoutesPrefixes(): array
{
	$routes = (array)config('routes');
	
	$prefixes = [];
	foreach ($routes as $route) {
		$prefixes[] = head(explode('/', $route));
	}
	
	return array_unique($prefixes);
}

if (! function_exists('ietfLangTag')) {
	/**
	 * IETF language tag(s)
	 * Example: en-US, pt-BR, fr-CA, ... (Usage of "-" instead of "_")
	 *
	 * @param string|null $locale
	 * @return array|string|string[]|null
	 */
	function ietfLangTag(string $locale = null)
	{
		if (empty($locale)) {
			$locale = config('app.locale');
		}
		
		return str_replace('_', '-', $locale);
	}
}

if (! function_exists('head')) {
	/**
	 * Get the first element of an array. Useful for method chaining.
	 *
	 * @param array|null $array
	 * @return false|mixed
	 */
	function head(?array $array)
	{
		return reset($array);
	}
}

if (! function_exists('last')) {
	/**
	 * Get the last element from an array.
	 *
	 * @param array|null $array
	 * @return false|mixed
	 */
	function last(?array $array)
	{
		return end($array);
	}
}

if (! function_exists('class_basename')) {
	/**
	 * Get the class "basename" of the given object / class.
	 *
	 * @param  string|object  $class
	 * @return string
	 */
	function class_basename($class): string
	{
		$class = is_object($class) ? get_class($class) : $class;
		
		return basename(str_replace('\\', '/', $class));
	}
}

if (! function_exists('userBrowser')) {
	/**
	 * Check if the user browser is the given value.
	 * The given value can be:
	 * 'Firefox', 'Chrome', 'Safari', 'Opera', 'MSIE', 'Trident', 'Edge'
	 *
	 * Usage: userBrowser('Chrome') or userBrowser() == 'Chrome'
	 *
	 * @param string|null $browser
	 * @return bool|string|null
	 */
	function userBrowser(string $browser = null)
	{
		if (!empty($browser)) {
			return (strpos(request()->server('HTTP_USER_AGENT'), $browser) !== false);
		} else {
			$browsers = ['Firefox', 'Chrome', 'Safari', 'Opera', 'MSIE', 'Trident', 'Edge'];
			$agent = request()->server('HTTP_USER_AGENT');
			
			$userBrowser = null;
			foreach ($browsers as $browser) {
				if (strpos($agent, $browser) !== false) {
					$userBrowser = $browser;
					break;
				}
			}
			
			return $userBrowser;
		}
	}
}

/**
 * Get sitemaps indexes
 *
 * @param bool $htmlFormat
 * @return string
 */
function getSitemapsIndexes(bool $htmlFormat = false): string
{
	$out = '';
	
	$countries = \App\Helpers\Localization\Helpers\Country::transAll(\App\Helpers\Localization\Country::getCountries());
	if (!$countries->isEmpty()) {
		if ($htmlFormat) {
			$cmFieldStyle = ($countries->count() > 10) ? ' style="height: 205px; overflow-y: scroll;"' : '';
			$out .= '<ul' . $cmFieldStyle . '>';
		}
		foreach ($countries as $country) {
			$country = \App\Helpers\Localization\Country::getCountryInfo($country->get('code'));
			
			if ($country->isEmpty()) {
				continue;
			}
			
			// Get the Country's Language Code
			$countryLanguageCode = ($country->has('lang') && $country->get('lang')->has('abbr'))
				? $country->get('lang')->get('abbr')
				: config('app.locale');
			
			// Add the Sitemap Index
			if ($htmlFormat) {
				$out .= '<li>' . dmUrl($country, $country->get('icode') . '/sitemaps.xml') . '</li>';
			} else {
				$out .= 'Sitemap: ' . dmUrl($country, $country->get('icode') . '/sitemaps.xml') . "\n";
			}
		}
		if ($htmlFormat) {
			$out .= '</ul>';
		}
	}
	
	return $out;
}

/**
 * Default robots.txt content
 *
 * @return string
 */
function getDefaultRobotsTxtContent(): string
{
	$out = 'User-agent: *' . "\n";
	$out .= 'Disallow:' . "\n";
	$out .= "\n";
	$out .= 'Allow: /' . "\n";
	$out .= "\n";
	$out .= 'User-agent: *' . "\n";
	$out .= 'Disallow: /' . admin_uri() . '/' . "\n";
	$out .= 'Disallow: /ajax/' . "\n";
	$out .= 'Disallow: /assets/' . "\n";
	$out .= 'Disallow: /css/' . "\n";
	$out .= 'Disallow: /js/' . "\n";
	$out .= 'Disallow: /vendor/' . "\n";
	$out .= 'Disallow: /main.php' . "\n";
	$out .= 'Disallow: /index.php' . "\n";
	$out .= 'Disallow: /mix-manifest.json' . "\n";
	
	$languages = getSupportedLanguages();
	if (!empty($languages)) {
		foreach ($languages as $code => $lang) {
			$out .= 'Disallow: /lang/' . $code . "\n";
		}
	}
	
	$providers = ['facebook', 'linkedin', 'twitter', 'google'];
	foreach ($providers as $provider) {
		$out .= 'Disallow: /auth/' . $provider . "\n";
	}
	
	return $out;
}

/**
 * Generate the Email Form button
 *
 * @param null $post
 * @param bool $btnBlock
 * @return string
 */
function genEmailContactBtn($post = null, bool $btnBlock = false): string
{
	$out = '';
	
	if (!isVerifiedPost($post)) {
		return $out;
	}
	
	if (empty($post->email)) {
		return $out;
	}
	
	$btnLink = '#applyJob';
	$btnAttr = 'data-bs-toggle="modal"';
	$btnClass = '';
	if (isset($post->application_url) && !empty($post->application_url)) {
		$btnLink = $post->application_url;
		$btnAttr = '';
	}
	if (!auth()->check()) {
		if (config('settings.single.guests_can_contact_authors') != '1') {
			$btnLink = '#quickLogin';
			$btnAttr = 'data-bs-toggle="modal"';
		}
	}
	
	if ($btnBlock) {
		$btnClass = $btnClass . ' btn-block';
	}
	
	$out .= '<a href="' . $btnLink . '" class="btn btn-default' . $btnClass . '" ' . $btnAttr . '>';
	$out .= '<i class="far fa-envelope"></i> ';
	$out .= t('Apply Online');
	$out .= '</a>';
	
	return $out;
}

/**
 * Generate the Phone Number button
 *
 * @param $post
 * @param bool $btnBlock
 * @return string
 */
function genPhoneNumberBtn($post, bool $btnBlock = false): string
{
	$out = '';
	
	if (empty($post->phone) || $post->phone_hidden == 1) {
		return $out;
	}
	
	$btnLink = 'tel:' . $post->phone;
	$btnAttr = '';
	$btnClass = ' phoneBlock'; /* for the JS showPhone() function */
	$btnHint = t('Click to see');
	$phone = $post->phone;
	if (config('settings.single.hide_phone_number')) {
		if (config('settings.single.hide_phone_number') == '1') {
			$phone = Str::mask($phone, 'X', -Str::length($phone), Str::length($phone)-3);
		}
		if (config('settings.single.hide_phone_number') == '2') {
			$phone = Str::mask($phone, 'X', 3);
		}
		if (config('settings.single.hide_phone_number') == '3') {
			$phone = Str::mask($phone, 'X', 0);
		}
		$btnLink = '';
		$btnAttr = 'data-bs-toggle="tooltip" data-bs-placement="bottom" title="' . $btnHint . '"';
		$btnClass = $btnClass . '';
	} else {
		if (config('settings.single.convert_phone_number_to_img')) {
			try {
				$phone = \Larapen\TextToImage\Facades\TextToImage::make($phone, config('larapen.core.textToImage'));
			} catch (\Exception $e) {
				$phone = $post->phone;
			}
			$btnClass = '';
		}
	}
	if (!auth()->check()) {
		if (config('settings.single.guests_can_contact_authors') != '1') {
			$phone = $btnHint;
			$btnLink = '#quickLogin';
			$btnAttr = 'data-bs-toggle="modal"';
			$btnClass = '';
		}
	}
	
	if ($btnBlock) {
		$btnClass = $btnClass . ' btn-block';
	}
	
	// Generate the Phone Number button
	$out .= '<a href="' . $btnLink . '" ' . $btnAttr . ' class="btn btn-success' . $btnClass . '">';
	$out .= '<i class="fas fa-mobile-alt"></i> ';
	$out .= $phone;
	$out .= '</a>';
	
	return $out;
}

/**
 * Set the Backup config vars
 *
 * @param string|null $typeOfBackup
 */
function setBackupConfig(string $typeOfBackup = null)
{
	// Get the current version value
	$version = preg_replace('/[^0-9\+]/', '', config('app.appVersion'));
	
	// All backup filename prefix
	config()->set('backup.backup.destination.filename_prefix', 'site-v' . $version . '-');
	
	// Database backup
	if ($typeOfBackup == 'database') {
		config()->set('backup.backup.admin_flags', [
			'--disable-notifications' => true,
			'--only-db'               => true,
		]);
		config()->set('backup.backup.destination.filename_prefix', 'database-v' . $version . '-');
	}
	
	// Languages files backup
	if ($typeOfBackup == 'languages') {
		$include = [
			resource_path('lang'),
		];
		$pluginsDirs = glob(config('larapen.core.plugin.path') . '*', GLOB_ONLYDIR);
		if (!empty($pluginsDirs)) {
			foreach ($pluginsDirs as $pluginDir) {
				$pluginLangFolder = $pluginDir . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'lang';
				if (file_exists($pluginLangFolder)) {
					$include[] = $pluginLangFolder;
				}
			}
		}
		
		config()->set('backup.backup.admin_flags', [
			'--disable-notifications' => true,
			'--only-files'            => true,
		]);
		config()->set('backup.backup.source.files.include', $include);
		config()->set('backup.backup.source.files.exclude', [
			//...
		]);
		config()->set('backup.backup.destination.filename_prefix', 'languages-');
	}
	
	// Generated files backup
	if ($typeOfBackup == 'files') {
		config()->set('backup.backup.admin_flags', [
			'--disable-notifications' => true,
			'--only-files'            => true,
		]);
		config()->set('backup.backup.source.files.include', [
			base_path('.env'),
			storage_path('app/public'),
			storage_path('installed'),
		]);
		config()->set('backup.backup.source.files.exclude', [
			//...
		]);
		config()->set('backup.backup.destination.filename_prefix', 'files-');
	}
	
	// App files backup
	if ($typeOfBackup == 'app') {
		config()->set('backup.backup.admin_flags', [
			'--disable-notifications' => true,
			'--only-files'            => true,
		]);
		config()->set('backup.backup.source.files.include', [
			base_path(),
			// base_path('.gitattributes'),
			base_path('.gitignore'),
		]);
		config()->set('backup.backup.source.files.exclude', [
			base_path('node_modules'),
			base_path('.git'),
			base_path('.idea'),
			base_path('.env'),
			base_path('bootstrap/cache') . DIRECTORY_SEPARATOR . '*',
			public_path('robots.txt'),
			storage_path('app/backup-temp'),
			storage_path('app/database'),
			storage_path('app/public/app/categories/custom') . DIRECTORY_SEPARATOR . '*',
			storage_path('app/public/app/ico') . DIRECTORY_SEPARATOR . '*',
			storage_path('app/public/app/logo') . DIRECTORY_SEPARATOR . '*',
			storage_path('app/public/app/page') . DIRECTORY_SEPARATOR . '*',
			storage_path('app/public/files') . DIRECTORY_SEPARATOR . '*',
			storage_path('app/purifier') . DIRECTORY_SEPARATOR . '*',
			storage_path('database/demo'),
			storage_path('backups'),
			storage_path('dotenv-editor') . DIRECTORY_SEPARATOR . '*',
			storage_path('framework/cache') . DIRECTORY_SEPARATOR . '*',
			storage_path('framework/sessions') . DIRECTORY_SEPARATOR . '*',
			storage_path('framework/testing') . DIRECTORY_SEPARATOR . '*',
			storage_path('framework/views') . DIRECTORY_SEPARATOR . '*',
			storage_path('installed'),
			storage_path('laravel-backups'),
			storage_path('logs') . DIRECTORY_SEPARATOR . '*',
		]);
		config()->set('backup.backup.destination.filename_prefix', 'app-v' . $version . '-');
	}
}

/**
 * Add http:// if it doesn't exists in the URL
 * Recognizes ftp://, ftps://, http:// and https:// in a case insensitive way.
 *
 * @param string|null $url
 * @return string|null
 */
function addHttp(?string $url): ?string
{
	if (!empty($url)) {
		if (!preg_match('~^(?:f|ht)tps?://~i', $url)) {
			$url = 'http://' . $url;
		}
	}
	
	return $url;
}

/**
 * Determine if php is running at the command line
 *
 * @return bool
 */
function isCli(): bool
{
	if (defined('STDIN')) {
		return true;
	}
	
	if (php_sapi_name() === 'cli') {
		return true;
	}
	
	if (array_key_exists('SHELL', $_ENV)) {
		return true;
	}
	
	if (empty($_SERVER['REMOTE_ADDR']) and !isset($_SERVER['HTTP_USER_AGENT']) and count($_SERVER['argv']) > 0) {
		return true;
	}
	
	if (!array_key_exists('REQUEST_METHOD', $_SERVER)) {
		return true;
	}
	
	return false;
}

/**
 * Convert UTF-8 HTML to ANSI
 *
 * https://stackoverflow.com/a/7061511
 * https://onlinehelp.coveo.com/en/ces/7.0/administrator/what_is_the_difference_between_ansi_and_utf-8_uri_formats.htm
 * https://stackoverflow.com/questions/701882/what-is-ansi-format
 *
 * @param string|null $string
 * @return string|null
 */
function convertUTF8HtmlToAnsi(?string $string): ?string
{
	/*
	 * 1. Escaped Unicode characters to HTML hex references. E.g. \u00e9 => &#x00e9;
	 * 2. Convert HTML entities to their corresponding characters. E.g. &#x00e9; => é
	 */
	$string = preg_replace('/\\\\u([a-fA-F0-9]{4})/ui', '&#x\\1;', $string);
	$string = html_entity_decode($string);
	
	return $string;
}

/**
 * Remove all non UTF-8 characters
 *
 * Remove Emojis or 4 byte characters.
 * Emojis or BMP character have more than three bytes and maximum of four bytes per character.
 * To store this type of characters, UTF8mb4 character set is needed in MySQL.
 * And it is available only in MySQL 5.5.3 and above versions.
 * Otherwise, remove all 4 byte characters and store it in DB.
 *
 * @param string|null $string
 * @return string|string[]|null
 */
function stripNonUtf(?string $string)
{
	/*
	 * \p{L} matches any kind of letter from any language
	 * \p{N} matches any kind of numeric character in any script (Optional)
	 * \p{M} matches a character intended to be combined with another character (e.g. accents, umlauts, enclosing boxes, etc.)
	 * [:ascii:] matches a character with ASCII value 0 through 127
	 */
	return preg_replace('/[^\p{L}\p{N}\p{M}[:ascii:]]+/ui', '', $string);
}

/**
 * @param string $url
 * @param string $string
 * @param int $length
 * @param string $attributes
 * @return string
 */
function linkStrLimit(string $url, string $string, int $length = 0, string $attributes = ''): string
{
	if (!is_string($attributes)) {
		$attributes = '';
	}
	
	if (!empty($attributes)) {
		$attributes = ' ' . $attributes;
	}
	
	$tooltip = '';
	if (is_numeric($length) && $length > 0 && Str::length($string) > $length) {
		$tooltip = ' data-bs-toggle="tooltip" title="' . $string . '"';
	}
	
	$out = '<a href="' . $url . '"' . $attributes . $tooltip . '>';
	if ($length > 0) {
		$out .= Str::limit($string, $length);
	} else {
		$out .= $string;
	}
	$out .= '</a>';
	
	return $out;
}

/**
 * Check if User is online
 *
 * @param $user
 * @return bool
 * @throws \Psr\SimpleCache\InvalidArgumentException
 */
function isUserOnline($user): bool
{
	$isOnline = false;
	
	if (!empty($user) && isset($user->id)) {
		if (config('settings.optimization.cache_driver') == 'array') {
			$isOnline = $user->isOnline();
		} else {
			$isOnline = \Illuminate\Support\Facades\Cache::store('file')->has('user-is-online-' . $user->id);
		}
	}
	
	// Allow only logged users to get the other users status
	$isOnline = auth()->check() ? $isOnline : false;
	
	return $isOnline;
}

/**
 * @param string|null $string
 * @return string|null
 */
function nlToBr(?string $string): ?string
{
	// Replace multiple (one or more) line breaks with a single one.
	$string = preg_replace("/[\r\n]+/", "\n", $string);
	
	return nl2br($string);
}

/**
 * @param string $key
 * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
 */
function dynamicRoute(string $key)
{
	return config($key);
}

/**
 * Set the Db Fallback Locale
 *
 * @param string $fallbackLocale
 */
function setDbFallbackLocale(string $fallbackLocale)
{
	try {
		if (!\Jackiedo\DotenvEditor\Facades\DotenvEditor::keyExists('FALLBACK_LOCALE_FOR_DB')) {
			\Jackiedo\DotenvEditor\Facades\DotenvEditor::addEmpty();
		}
		\Jackiedo\DotenvEditor\Facades\DotenvEditor::setKey('FALLBACK_LOCALE_FOR_DB', $fallbackLocale);
		\Jackiedo\DotenvEditor\Facades\DotenvEditor::save();
	} catch (\Exception $e) {
	}
}

/**
 * Remove the Db Fallback Locale
 */
function removeDbFallbackLocale()
{
	try {
		if (!\Jackiedo\DotenvEditor\Facades\DotenvEditor::keyExists('FALLBACK_LOCALE_FOR_DB')) {
			\Jackiedo\DotenvEditor\Facades\DotenvEditor::addEmpty();
		}
		\Jackiedo\DotenvEditor\Facades\DotenvEditor::setKey('FALLBACK_LOCALE_FOR_DB', 'null');
		\Jackiedo\DotenvEditor\Facades\DotenvEditor::save();
	} catch (\Exception $e) {
	}
}

/**
 * Convert only the translations array to json in an array
 *
 * @param array|null $entry
 * @param bool $unescapedUnicode
 * @return array|null
 */
function arrayTranslationsToJson(?array $entry, bool $unescapedUnicode = true): ?array
{
	if (empty($entry)) {
		return $entry;
	}
	
	$neyEntry = [];
	foreach($entry as $key => $value) {
		if (is_array($value)) {
			$neyEntry[$key] = ($unescapedUnicode) ? json_encode($value, JSON_UNESCAPED_UNICODE) : json_encode($value);
		} else {
			$neyEntry[$key] = $value;
		}
	}
	
	return $neyEntry;
}

/**
 * Get Translation from Column (from Json, Array or String)
 *
 * @param $column
 * @param string|null $locale
 * @return false|mixed
 */
function getColumnTranslation($column, string $locale = null)
{
	if (empty($locale)) {
		$locale = app()->getLocale();
	}
	
	if (!is_array($column)) {
		if (isValidJson($column)) {
			$column = json_decode($column, true);
		} else {
			$column = [$column];
		}
	}
	
	return $column[$locale] ?? ($column[config('app.fallback_locale')] ?? head($column));
}

/**
 * SEO Website Verification using meta tags
 * Allow full HTML tag or content="" value
 *
 * @return string
 */
function seoSiteVerification(): string
{
	$engines = [
		'google' => [
			'name'    => 'google-site-verification',
			'content' => config('settings.seo.google_site_verification'),
		],
		'bing'   => [
			'name'    => 'msvalidate.01',
			'content' => config('settings.seo.msvalidate'),
		],
		'yandex' => [
			'name'    => 'yandex-verification',
			'content' => config('settings.seo.yandex_verification'),
		],
		'alexa'  => [
			'name'    => 'alexaVerifyID',
			'content' => config('settings.seo.alexa_verify_id'),
		],
	];
	
	$out = '';
	foreach ($engines as $engine) {
		if (isset($engine['name'], $engine['content']) && $engine['content']) {
			if (preg_match('|<meta[^>]+>|i', $engine['content'])) {
				$out .= $engine['content'] . "\n";
			} else {
				$out .= '<meta name="' . $engine['name'] . '" content="' . $engine['content'] . '" />' . "\n";
			}
		}
	}
	
	return $out;
}

/**
 * @param int|null $decimalPlaces
 * @return string
 */
function getInputNumberStep(int $decimalPlaces = null): string
{
	if (empty($decimalPlaces) || $decimalPlaces <= 0) {
		$decimalPlaces = 2;
	}
	
	return '0.' . (str_pad('1', $decimalPlaces, '0', STR_PAD_LEFT));
}

/**
 * Is 'utf8mb4' is set as the database Charset
 * and 'utf8mb4_unicode_ci' is set as the database collation
 *
 * @return bool
 */
function isUtf8mb4Enabled(): bool
{
	$defaultConnection = config('database.default');
	$databaseCharset = config("database.connections.{$defaultConnection}.charset");
	$databaseCollation = config("database.connections.{$defaultConnection}.collation");
	
	// Allow Emojis when the database charset is 'utf8mb4'
	// and the database collation is 'utf8mb4_unicode_ci'
	if ($databaseCharset == 'utf8mb4' && $databaseCollation == 'utf8mb4_unicode_ci') {
		return true;
	}
	
	return false;
}

/**
 * @param string|null $path
 * @return string|string[]
 */
function relativeAppPath(?string $path)
{
	if (isDemoDomain()) {
		$documentRoot = request()->server->get('DOCUMENT_ROOT');
		$path = str_replace($documentRoot, '', $path);
		
		$basePath = base_path();
		$path = str_replace($basePath, '', $path);
		
		if (empty($path)) {
			$path = '/';
		}
	}
	
	return $path;
}

/**
 * @param string|null $url
 * @return string|null
 */
function getFilterClearBtn(?string $url): ?string
{
	$out = '';
	
	if (!empty($url)) {
		$float = (config('lang.direction')=='rtl') ? 'left' : 'right';
		$out .= '<a href="' . $url . '" title="' . t('Remove this filter') . '">';
		$out .= '<i class="far fa-window-close" style="float: ' . $float . '; margin-top: 2px; color: #999;"></i>';
		$out .= '</a>';
	}
	
	return $out;
}

/**
 * Create Random String
 *
 * @param int $length
 * @return string
 */
function createRandomString(int $length = 6): string
{
	$str = '';
	$chars = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
	$max = count($chars) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $chars[$rand];
	}
	
	return $str;
}

/**
 * Parse the HTTP Accept-Language header
 * NOTE: Get the preferred language: $firstKey = array_key_first($array);
 *
 * @param string|null $acceptLanguage
 * @return array
 */
function parseAcceptLanguageHeader(string $acceptLanguage = null): array
{
	if (empty($acceptLanguage)) {
		$acceptLanguage = request()->server('HTTP_ACCEPT_LANGUAGE');
	}
	
	$acceptLanguageTab = explode(',', $acceptLanguage);
	
	$array = [];
	if (!empty($acceptLanguageTab)) {
		foreach ($acceptLanguageTab as $key => $value) {
			$tmp = explode(';', $value);
			if (empty($tmp)) continue;
			
			if (isset($tmp[0]) && isset($tmp[1])) {
				$q = str_replace('q=', '', $tmp[1]);
				$array[$tmp[0]] = (double)$q;
			} else {
				$array[$tmp[0]] = 1;
			}
		}
	}
	arsort($array);
	
	return $array;
}

/**
 * @return bool
 */
function socialLoginIsEnabled(): bool
{
	return (
		config('settings.social_auth.social_login_activation')
		&& (
			(config('settings.social_auth.facebook_client_id') && config('settings.social_auth.facebook_client_secret'))
			|| (config('settings.social_auth.linkedin_client_id') && config('settings.social_auth.linkedin_client_secret'))
			|| (config('settings.social_auth.twitter_client_id') && config('settings.social_auth.twitter_client_secret'))
			|| (config('settings.social_auth.google_client_id') && config('settings.social_auth.google_client_secret'))
		)
	);
}

/**
 * Increases or decreases the brightness of a color by a percentage of the current brightness.
 *
 * Supported formats: '#FFF', '#FFFFFF', 'FFF', 'FFFFFF'
 * A number between -1 and 1. E.g. 0.3 = 30% lighter; -0.4 = 40% darker.
 *
 * @param string|null $hexCode
 * @param float $percent
 * @return string
 */
function colourBrightness(?string $hexCode, float $percent): string
{
	$hexCode = ltrim($hexCode, '#');
	
	if (strlen($hexCode) == 3) {
		$hexCode = $hexCode[0] . $hexCode[0] . $hexCode[1] . $hexCode[1] . $hexCode[2] . $hexCode[2];
	}
	
	$hexCode = array_map('hexdec', str_split($hexCode, 2));
	
	foreach ($hexCode as & $color) {
		$adjustableLimit = $percent < 0 ? $color : 255 - $color;
		$adjustAmount = ceil($adjustableLimit * $percent);
		
		$color = str_pad(dechex($color + $adjustAmount), 2, '0', STR_PAD_LEFT);
	}
	
	return '#' . implode($hexCode);
}

/**
 * Luminosity Contrast algorithm
 * Given a background color, black or white text
 *
 * Will return '#FFFFFF'
 * echo getContrastColor('#FF0000');
 *
 * @param string|null $hexColor
 * @return string
 */
function getContrastColor(?string $hexColor): string
{
	// hexColor RGB
	$r1 = hexdec(substr($hexColor, 1, 2));
	$g1 = hexdec(substr($hexColor, 3, 2));
	$b1 = hexdec(substr($hexColor, 5, 2));
	
	// Black RGB
	$blackColor = '#000000';
	$rToBlackColor = hexdec(substr($blackColor, 1, 2));
	$gToBlackColor = hexdec(substr($blackColor, 3, 2));
	$bToBlackColor = hexdec(substr($blackColor, 5, 2));
	
	// Calc contrast ratio
	$l1 = 0.2126 * pow($r1 / 255, 2.2)
		+ 0.7152 * pow($g1 / 255, 2.2)
		+ 0.0722 * pow($b1 / 255, 2.2);
	
	$l2 = 0.2126 * pow($rToBlackColor / 255, 2.2)
		+ 0.7152 * pow($gToBlackColor / 255, 2.2)
		+ 0.0722 * pow($bToBlackColor / 255, 2.2);
	
	$contrastRatio = 0;
	if ($l1 > $l2) {
		$contrastRatio = (int)(($l1 + 0.05) / ($l2 + 0.05));
	} else {
		$contrastRatio = (int)(($l2 + 0.05) / ($l1 + 0.05));
	}
	
	// If contrast is more than 5, return black color
	if ($contrastRatio > 5) {
		return '#000000';
	} else {
		// If not, return white color.
		return '#FFFFFF';
	}
}

/**
 * CSS Minify
 * Note: This works only for CSS code
 *
 * @param string|null $code
 * @return string
 */
function cssMinify(?string $code): string
{
	// Make it into one long line
	$code = str_replace(["\n", "\r"], '', $code);
	
	// Replace all multiple spaces by one space
	$code = preg_replace('!\s+!', ' ', $code);
	
	// Replace some unneeded spaces, modify as needed
	$code = str_replace([' {', ' }', '{ ', '; '], ['{', '}', '{', ';'], $code);
	
	// Remove comments
	$code = str_replace('/*', '_COMMENT_START', $code);
	$code = str_replace('*/', 'COMMENT_END_', $code);
	$code = preg_replace('/_COMMENT_START.*?COMMENT_END_/s', '', $code);
	
	return trim($code);
}

/**
 * Get package ID request through 'package_id' or 'package'
 *
 * @return mixed|null
 */
function requestPackageId()
{
	$packageId = null;
	
	if (request()->filled('package_id')) {
		$packageId = request()->get('package_id');
	}
	
	if (request()->filled('package') && empty($packageId)) {
		$packageId = request()->get('package');
	}
	
	if (old('package_id') && empty($packageId)) {
		$packageId = old('package_id');
		
		if (!empty($packageId) && !request()->has('package_id')) {
			request()->request->add(['package_id' => $packageId]);
		}
	}
	
	return $packageId;
}

/**
 * Get package by ID
 *
 * @param $packageId
 * @return mixed
 */
function getPackageById($packageId)
{
	$cacheExpiration = (int)config('settings.optimization.cache_expiration');
	$cacheId = 'package.id.' . $packageId . '.' . config('app.locale');
	
	return \Illuminate\Support\Facades\Cache::remember($cacheId, $cacheExpiration, function () use ($packageId) {
		return \App\Models\Package::with(['currency'])
			->where('id', $packageId)
			->first();
	});
}

/**
 * Get Listing Pictures Limit
 * For LaraClassifier
 *
 * @param $model
 * @return int|string
 */
function getPicturesLimit($model = null)
{
	if (empty($model)) {
		$packageId = requestPackageId();
		if (!empty($packageId)) {
			$model = getPackageById($packageId);
		}
	}
	
	// Default Pictures Limit
	$defaultLimit = 5;
	$picturesLimit = (int)config('settings.single.pictures_limit', $defaultLimit);
	
	if (!empty($model)) {
		if ($model instanceof \App\Models\Post) {
			$newModel = null;
			if ($model->featured == 1 && !empty($model->latestPayment)) {
				if (isset($model->latestPayment->package) && !empty($model->latestPayment->package)) {
					$newModel = $model->latestPayment->package;
				}
			}
			$model = $newModel;
		}
		
		if (!empty($model)) {
			if (isset($model->pictures_limit) && is_numeric($model->pictures_limit)) {
				$picturesLimit = $model->pictures_limit;
			}
		}
	}
	
	if ($picturesLimit <= 0) $picturesLimit = $defaultLimit;
	
	return $picturesLimit;
}

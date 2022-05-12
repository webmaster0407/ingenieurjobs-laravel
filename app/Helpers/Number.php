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

namespace App\Helpers;

/*
 * For some methods of this class,
 * the system locale need to be set in the 'AppServiceProvider'
 * by calling this method: \App\Helpers\SystemLocale::setLocale($locale);
 */
class Number
{
	/**
	 * Converts a number into a short version, eg: 1000 -> 1k
	 *
	 * @param int|null $value
	 * @param int $precision
	 * @return string
	 */
	public static function short(?int $value, int $precision = 1): ?string
	{
		if (!is_numeric($value)) {
			$value = 0;
		}
		
		if ($value < 900) {
			// 0 - 900
			$valueFormat = number_format($value, $precision);
			$suffix = '';
		} else if ($value < 900000) {
			// 0.9k-850k
			$valueFormat = number_format($value / 1000, $precision);
			$suffix = 'K';
		} else if ($value < 900000000) {
			// 0.9m-850m
			$valueFormat = number_format($value / 1000000, $precision);
			$suffix = 'M';
		} else if ($value < 900000000000) {
			// 0.9b-850b
			$valueFormat = number_format($value / 1000000000, $precision);
			$suffix = 'B';
		} else {
			// 0.9t+
			$valueFormat = number_format($value / 1000000000000, $precision);
			$suffix = 'T';
		}
		
		// Remove unnecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
		// Intentionally does not affect partials, eg "1.50" -> "1.50"
		if ($precision > 0) {
			$dotZero = '.' . str_repeat('0', $precision);
			$valueFormat = str_replace($dotZero, '', $valueFormat);
		}
		
		return $valueFormat . $suffix;
	}
	
	/**
	 * Transform the given number to display it using the Currency format settings
	 * NOTE: Doesn't transform non-numeric value
	 *
	 * @param $value
	 * @return int|mixed|string
	 */
	public static function transform($value)
	{
		if (!is_numeric($value)) {
			return $value;
		}
		
		return self::format($value);
	}
	
	/**
	 * Transform the given number to display it using the Currency format settings
	 * NOTE: Transform non-numeric value
	 *
	 * @param $value
	 * @param int|null $decimals
	 * @param string|null $decPoint
	 * @param string|null $thousandsSep
	 * @param bool $removeZeroAsDecimal
	 * @return string
	 */
	public static function format($value, int $decimals = null, string $decPoint = null, string $thousandsSep = null, bool $removeZeroAsDecimal = true)
	{
		if (is_null($decimals)) {
			$decimals = (int)config('selectedCurrency.decimal_places', 2);
		}
		if (is_null($decPoint)) {
			$decPoint = config('selectedCurrency.decimal_separator', '.');
		}
		if (is_null($thousandsSep)) {
			$thousandsSep = config('selectedCurrency.thousand_separator', ',');
		}
		
		// Convert string to numeric
		$value = self::getFloatRawFormat($value);
		
		if (is_numeric($value) || is_float($value)) {
			// Currency format - Ex: USD 100,234.56 | EUR 100 234,56
			$value = number_format($value, $decimals, $decPoint, $thousandsSep);
		} else {
			return null;
		}
		
		if ($removeZeroAsDecimal) {
			$value = self::removeZeroAsDecimal($value, $decimals, $decPoint);
		}
		
		return $value;
	}
	
	/**
	 * Format a number before insert it in MySQL database
	 * NOTE: The DB column need to be decimal (or float)
	 *
	 * @param $value
	 * @param string $decPoint
	 * @param bool $canSaveZero
	 * @return int|string|string[]|null
	 */
	public static function formatForDb($value, string $decPoint = '.', bool $canSaveZero = true)
	{
		$value = preg_replace('/^[0\s]+(.+)$/', '$1', $value);  // 0123 => 123 | 00 123 => 123
		$value = preg_replace('/^[\.]+/', '0.', $value);        // .123 => 0.123
		
		if ($canSaveZero) {
			$value = ($value == 0 && strlen(trim($value)) > 0) ? 0 : $value;
			if ($value === 0) {
				return $value;
			} else {
				if (empty($value)) {
					return $value;
				}
			}
		}
		
		if ($decPoint == '.') {
			// For string ending by '.000' like 'XX.000',
			// Replace the '.000' by ',000' like 'XX,000' before removing the thousands separator
			$value = preg_replace('/\.\s?(0{3}+)$/', ',$1', $value);
			
			// Remove eventual thousands separator
			$value = str_replace(',', '', $value);
		}
		if ($decPoint == ',') {
			// Remove eventual thousands separator
			$value = str_replace('.', '', $value);
			
			// Always save in DB decimals with dot (.) instead of comma (,)
			$value = str_replace(',', '.', $value);
		}
		
		// Skip only numeric and dot characters
		$value = preg_replace('/[^0-9\.]/', '', $value);
		
		// Use the first dot as decimal point (All the next dots will be ignored)
		$tmp = explode('.', $value);
		if (!empty($tmp)) {
			$value = $tmp[0] . (isset($tmp[1]) ? '.' . $tmp[1] : '');
		}
		
		if (empty($value)) {
			return null;
		}
		
		return $value;
	}
	
	/**
	 * Get Float Raw Format
	 *
	 * @param string|int $value
	 * @return int|string|null
	 */
	public static function getFloatRawFormat($value)
	{
		if (is_numeric($value)) {
			return $value;
		}
		
		$value = trim($value);
		$value = strtr($value, [' ' => '']);
		$value = preg_replace('/ +/', '', $value);
		$value = str_replace(',', '.', $value);
		$value = preg_replace('/[^0-9\.]/', '', $value);
		
		if (empty($value)) {
			return null;
		}
		
		return (string)$value;
	}
	
	/**
	 * @param $value
	 * @return string|string[]
	 */
	public static function money($value)
	{
		$value = self::applyCurrencyRate($value);
		
		if (config('settings.other.decimals_superscript')) {
			return static::moneySuperscript($value);
		}
		
		$value = self::transform($value);
		
		// In line current
		if (config('selectedCurrency.in_left') == 1) {
			$value = config('selectedCurrency.symbol') . $value;
		} else {
			$value = $value . ' ' . config('selectedCurrency.symbol');
		}
		
		// Remove decimal value if it's null
		$value = self::removeZeroAsDecimal(
			$value,
			(int)config('selectedCurrency.decimal_places', 2),
			config('selectedCurrency.decimal_separator', '.')
		);
		
		return $value;
	}
	
	/**
	 * @param $value
	 * @return string|string[]
	 */
	public static function moneySuperscript($value)
	{
		$value = self::transform($value);
		
		$tmp = explode(config('selectedCurrency.decimal_separator', '.'), $value);
		
		if (isset($tmp[1]) && !empty($tmp[1])) {
			if (config('selectedCurrency.in_left') == 1) {
				$value = config('selectedCurrency.symbol') . $tmp[0] . '<sup>' . $tmp[1] . '</sup>';
			} else {
				$value = $tmp[0] . '<sup>' . config('selectedCurrency.symbol') . $tmp[1] . '</sup>';
			}
		} else {
			if (config('selectedCurrency.in_left') == 1) {
				$value = config('selectedCurrency.symbol') . $value;
			} else {
				$value = $value . ' ' . config('selectedCurrency.symbol');
			}
			
			// Remove decimal value if it's null
			$value = self::removeZeroAsDecimal(
				$value,
				(int)config('selectedCurrency.decimal_places', 2),
				config('selectedCurrency.decimal_separator', '.')
			);
		}
		
		return $value;
	}
	
	/**
	 * Remove decimal value if it's null
	 *
	 * @param $value
	 * @param null $decimals
	 * @param null $decPoint
	 * @return string|string[]
	 */
	public static function removeZeroAsDecimal($value, $decimals = null, $decPoint = null)
	{
		$defaultDecimal = str_pad('', $decimals, '0');
		$value = str_replace($decPoint . $defaultDecimal, '', $value);
		
		return $value;
	}
	
	/**
	 * @param $value
	 * @return float|int
	 */
	public static function applyCurrencyRate($value)
	{
		if (is_numeric($value) || is_float($value)) {
			try {
				$value = $value * config('selectedCurrency.rate', 1);
			} catch (\Throwable $e) {
				// Debug
			}
		}
		
		return $value;
	}
	
	/**
	 * @param $value
	 * @param int $decimals
	 * @return string
	 */
	public static function localeFormat($value, int $decimals = 2)
	{
		// Set locale for PHP
		SystemLocale::setLocale(config('app.locale'));
		
		$localeInfo = localeconv();
		
		$value = number_format($value, $decimals, $localeInfo['decimal_point'], $localeInfo['thousands_sep']);
		
		SystemLocale::resetLcNumeric();
		
		return $value;
	}
	
	/**
	 * Clean Float Value
	 * Fixed: MySQL don't accept the comma format number
	 *
	 * This function takes the last comma or dot (if any) to make a clean float,
	 * ignoring thousand separator, currency or any other letter.
	 *
	 * Example:
	 * $num = '1.999,369€';
	 * var_dump(Number::toFloat($num)); // float(1999.369)
	 * $otherNum = '126,564,789.33 m²';
	 * var_dump(Number::toFloat($otherNum)); // float(126564789.33)
	 *
	 * @param $value
	 * @return float
	 */
	public static function toFloat($value)
	{
		// Check negative numbers
		$isNegative = false;
		if (substr(trim($value), 0, 1) == '-') {
			$isNegative = true;
		}
		
		$dotPos = strrpos($value, '.');
		$commaPos = strrpos($value, ',');
		$sepPos = (($dotPos > $commaPos) && $dotPos) ? $dotPos : ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
		
		if (!$sepPos) {
			$value = preg_replace('/[^0-9]/', '', $value);
			$value = floatval($value);
			
			if ($isNegative) {
				$value = '-' . $value;
			}
			
			return $value;
		}
		
		$integer = preg_replace('/[^0-9]/', '', substr($value, 0, $sepPos));
		$decimal = preg_replace('/[^0-9]/', '', substr($value, $sepPos + 1, strlen($value)));
		$decimal = rtrim($decimal, '0');
		
		if (intval($decimal) == 0) {
			$value = intval($integer);
		} else {
			$value = intval($integer) . '.' . $decimal;
		}
		
		if ($isNegative) {
			$value = '-' . $value;
		}
		
		return $value;
	}
}

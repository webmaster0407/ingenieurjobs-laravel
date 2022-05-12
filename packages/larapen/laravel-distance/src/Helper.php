<?php

namespace Larapen\LaravelDistance;


class Helper
{
	/**
	 * Check if a country is a miles using country
	 *
	 * @param string $countryCode
	 * @return bool
	 */
	public static function isMilesUsingCountry(string $countryCode): bool
	{
		if (in_array($countryCode, (array)config('distance.mileUseCountries'))) {
			return true;
		}
		
		return false;
	}
	
	/**
	 * Get the Distance Calculation Unit
	 *
	 * @param string $countryCode
	 * @return string
	 */
	public static function getDistanceUnit(string $countryCode): string
	{
		$unit = 'km';
		if (self::isMilesUsingCountry($countryCode)) {
			$unit = 'mi';
		}
		
		return $unit;
	}
}

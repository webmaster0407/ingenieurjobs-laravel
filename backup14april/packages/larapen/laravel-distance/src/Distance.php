<?php

namespace Larapen\LaravelDistance;

use Larapen\LaravelDistance\Libraries\mysql\DistanceStatement;

class Distance
{
	/**
	 * Get 'SELECT' statement column
	 *
	 * @param string $aLon
	 * @param string $aLat
	 * @param float $bLon
	 * @param float $bLat
	 * @return bool|string
	 */
	public static function select(string $aLon, string $aLat, float $bLon, float $bLat)
	{
		return DistanceStatement::select($aLon, $aLat, $bLon, $bLat);
	}
	
	/**
	 * Get 'HAVING' statement condition
	 *
	 * @param int|null $distance
	 * @return string
	 */
	public static function having(int $distance = null): string
	{
		return DistanceStatement::having($distance);
	}
	
	/**
	 * Get 'ORDER BY' rule
	 *
	 * @param string|null $order
	 * @return string
	 */
	public static function orderBy(string $order = null): string
	{
		return DistanceStatement::orderBy($order);
	}
}

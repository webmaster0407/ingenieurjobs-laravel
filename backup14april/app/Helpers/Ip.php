<?php
/*
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

class Ip
{
	/**
	 * Get user's IP address
	 *
	 * $defaultIp values for debug:
	 * - US: 157.240.1.35
	 * - FR: 5.135.32.116
	 * - BJ: 197.234.219.43
	 * - UK: 89.38.69.107 (from VPN) => KO
	 * - UK: 217.146.83.171 (from VPN) => KO
	 * - UK: 109.70.150.202 (from VPN) => KO
	 * - CH: 195.216.219.19 (from VPN)
	 * - IN: 185.203.122.240 (from VPN)
	 * - BR: 192.154.198.42 (from VPN)
	 * - US: 212.102.33.108 (from VPN)
	 * - IT: 84.17.59.156 (from VPN)
	 *
	 * 'KO' means that the country (of the IP) is not found using Maxmind geolocation database
	 *
	 * @param string|null $defaultIp
	 * @return string
	 */
	public static function get(?string $defaultIp = ''): string
	{
		$ip = '';
		
		$serverArr = request()->server() ?? $_SERVER;
		$serverIpKeys = [
			'HTTP_CLIENT_IP',
			'HTTP_X_FORWARDED_FOR',
			'HTTP_X_FORWARDED',
			'HTTP_X_CLUSTER_CLIENT_IP',
			'HTTP_FORWARDED_FOR',
			'HTTP_FORWARDED',
			'REMOTE_ADDR',
		];
		
		foreach ($serverIpKeys as $key) {
			if (!array_key_exists($key, $serverArr)) {
				continue;
			}
			
			// Sometimes we can get multiple IP addresses seperated with a ',' (e.g. Proxy/VPN)
			$ipArr = explode(',', $serverArr[$key]);
			foreach ($ipArr as $ipItem) {
				$isValidIpAddr = self::isValid($ipItem);
				
				if (!$isValidIpAddr && empty($defaultIp)) {
					$isValidIpAddr = self::isLocalhostIpAddr($ipItem);
				}
				
				if ($isValidIpAddr) {
					$ip = $ipItem;
					break;
				}
			}
		}
		
		if (empty($ip)) {
			$ip = $defaultIp;
		}
		
		return $ip;
	}
	
	/**
	 * Check IP address version
	 *
	 * @param string|null $ip
	 * @return int
	 */
	public static function version(?string $ip): int
	{
		return strpos($ip, ':') === false ? 4 : 6;
	}
	
	/**
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isLocalhostIpAddr(?string $ip): bool
	{
		return (
			!empty(trim($ip))
			&& (
				substr($ip, 0, 4) == '127.'
				|| $ip == '::1'
				|| in_array($ip, ['255.255.255.0', '255.255.255.255'])
			)
		);
	}
	
	/**
	 * Validate an IP address
	 *
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isValid(?string $ip): bool
	{
		return (!empty(trim($ip)) && filter_var($ip, FILTER_VALIDATE_IP));
	}
	
	/**
	 * Validate an IPv4 IP address
	 *
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isValidIPv4(?string $ip): bool
	{
		return (
			!empty(trim($ip))
			&& filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)
		);
	}
	
	/**
	 * Validate an IPv4 IP address
	 *
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isValidIPv4RegEx(?string $ip): bool
	{
		$pattern = '^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$';
		
		return (bool)preg_match('/' . $pattern . '/', $ip);
	}
	
	/**
	 * Validate an IPv4 IP address excluding private range addresses
	 *
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isValidIPv4ExcludingPrivate(?string $ip): bool
	{
		return (
			!empty(trim($ip))
			&& filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE)
		);
	}
	
	/**
	 * Validate an IPv6 IP address
	 *
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isValidIPv6(?string $ip): bool
	{
		return (
			!empty(trim($ip))
			&& filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)
		);
	}
	
	/**
	 * Validate an IPv6 IP address excluding private range addresses
	 *
	 * @param string|null $ip
	 * @return bool
	 */
	public static function isValidIPv6ExcludingPrivate(?string $ip): bool
	{
		return (
			!empty(trim($ip))
			&& filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE)
		);
	}
	
	/**
	 * Convert ip address to ip number
	 *
	 * @param string|null $ip
	 * @return float|int|mixed|string
	 */
	public static function ipToNumber(?string $ip)
	{
		if (trim($ip) == '') {
			return 0;
		} else {
			$tmp = preg_split("#\.#", $ip);
			
			return ($tmp[3] + $tmp[2] * 256 + $tmp[1] * 256 * 256 + $tmp[0] * 256 * 256 * 256);
		}
	}
}

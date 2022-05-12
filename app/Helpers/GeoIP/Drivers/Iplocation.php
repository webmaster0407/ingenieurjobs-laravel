<?php

namespace App\Helpers\GeoIP\Drivers;

use App\Helpers\GeoIP\AbstractDriver;
use Illuminate\Support\Facades\Http;

class Iplocation extends AbstractDriver
{
	public function get($ip)
	{
		$data = $this->getRaw($ip);
		
		if (empty($data) || (data_get($data, 'response_message') !== 'OK') || is_string($data)) {
			return $this->getDefault($ip, $data);
		}
		
		return [
			'driver'      => config('geoip.default'),
			'ip'          => $ip,
			'city'        => null,
			'country'     => data_get($data, 'country_name'),
			'countryCode' => data_get($data, 'country_code2'),
			'latitude'    => null,
			'longitude'   => null,
			'region'      => null,
			'regionCode'  => null,
			'timezone'    => null,
			'postalCode'  => null,
		];
	}
	
	/**
	 * iplocation
	 * https://www.iplocation.net/
	 * Free Plan: https://api.iplocation.net/ (No API key is required)
	 *
	 * @param $ip
	 * @return array|mixed|string
	 */
	public function getRaw($ip)
	{
		$apiKey = config('geoip.drivers.iplocation.apiKey');
		$pro = config('geoip.drivers.iplocation.pro');
		
		$url = 'https://api.iplocation.net/';
		$query = [
			'ip'     => $ip,
			'format' => 'json',
		];
		if ($pro && !empty($apiKey)) {
			$query['key'] = $apiKey;
		}
		
		$response = Http::get($url, $query);
		if ($response->successful()) {
			return $response->json();
		}
		
		return $this->errorMessage($response);
	}
}
<?php

namespace App\Helpers\GeoIP\Drivers;

use App\Helpers\GeoIP\AbstractDriver;
use Illuminate\Support\Facades\Http;

class Ipgeolocation extends AbstractDriver
{
	public function get($ip)
	{
		$data = $this->getRaw($ip);
		
		if (empty($data) || is_string($data)) {
			return $this->getDefault($ip, $data);
		}
		
		return [
			'driver'      => config('geoip.default'),
			'ip'          => $ip,
			'city'        => data_get($data, 'city'),
			'country'     => data_get($data, 'country_name'),
			'countryCode' => data_get($data, 'country_code2'),
			'latitude'    => (float)number_format(data_get($data, 'latitude'), 5),
			'longitude'   => (float)number_format(data_get($data, 'longitude'), 5),
			'region'      => data_get($data, 'state_prov'),
			'regionCode'  => null,
			'timezone'    => data_get($data, 'time_zone.name'),
			'postalCode'  => data_get($data, 'zipcode'),
		];
	}
	
	/**
	 * ipgeolocation
	 * https://ipgeolocation.io/
	 * Free Plan: 30,000 requests / Month (for non-commercial usage)
	 *
	 * @param $ip
	 * @return array|mixed|string
	 */
	public function getRaw($ip)
	{
		$apiKey = config('geoip.drivers.ipgeolocation.apiKey');
		$url = 'https://api.ipgeolocation.io/ipgeo';
		$query = [
			'apiKey' => $apiKey,
			'ip'     => $ip,
		];
		
		$response = Http::get($url, $query);
		if ($response->successful()) {
			return $response->json();
		}
		
		return $this->errorMessage($response);
	}
}
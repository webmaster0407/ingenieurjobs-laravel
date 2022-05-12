<?php

namespace App\Helpers\GeoIP\Drivers;

use App\Helpers\GeoIP\AbstractDriver;
use Illuminate\Support\Facades\Http;

class Dbip extends AbstractDriver
{
	public function get($ip)
	{
		$data = $this->getRaw($ip);
		
		if (empty($data) || !empty(data_get($data, 'errorCode')) || !empty(data_get($data, 'error')) || is_string($data)) {
			return $this->getDefault($ip, $data);
		}
		
		return [
			'driver'      => config('geoip.default'),
			'ip'          => $ip,
			'city'        => data_get($data, 'city'),
			'country'     => data_get($data, 'countryName'),
			'countryCode' => data_get($data, 'countryCode'),
			'latitude'    => (float)number_format(data_get($data, 'latitude'), 5),
			'longitude'   => (float)number_format(data_get($data, 'longitude'), 5),
			'region'      => data_get($data, 'stateProv'),
			'regionCode'  => data_get($data, 'stateProvCode'),
			'timezone'    => data_get($data, 'timeZone'),
			'postalCode'  => data_get($data, 'zipCode'),
		];
	}
	
	/**
	 * dbip
	 * https://db-ip.com/
	 * The Free API is a fast and easy way to implement IP geolocation in a prototype or small website.
	 * It provides a simple IP to country, state and city mapping and is limited to 1,000 daily requests.
	 *
	 * @param $ip
	 * @return array|mixed|string
	 */
	public function getRaw($ip)
	{
		$apiKey = config('geoip.drivers.dbip.apiKey');
		$pro = config('geoip.drivers.dbip.pro');
		
		if (!$pro || empty($apiKey)) {
			$apiKey = 'free';
		}
		
		$url = 'https://api.db-ip.com/v2/' . $apiKey . '/' . $ip;
		
		$response = Http::get($url);
		if ($response->successful()) {
			return $response->json();
		}
		
		return $this->errorMessage($response);
	}
}
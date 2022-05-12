<?php

namespace App\Helpers\GeoIP\Drivers;

use App\Helpers\GeoIP\AbstractDriver;
use GeoIp2\Database\Reader;

class MaxmindDatabase extends AbstractDriver
{
	public function get($ip)
	{
		$data = $this->getRaw($ip);
		
		if (empty($data) || is_string($data)) {
			return $this->getDefault($ip, $data);
		}
		
		return [
			'driver'        => config('geoip.default'),
			'ip'            => $ip,
			'city'          => $data->city->name,
			'country'       => $data->country->name,
			'countryCode'   => $data->country->isoCode,
			'latitude'      => (float)number_format($data->location->latitude, 5),
			'longitude'     => (float)number_format($data->location->longitude, 5),
			'region'        => $data->mostSpecificSubdivision->name,
			'regionCode'    => $data->mostSpecificSubdivision->isoCode,
			'continent'     => $data->continent->name,
			'continentCode' => $data->continent->code,
			'timezone'      => $data->location->timeZone,
			'postalCode'    => $data->postal->code,
		];
	}
	
	/**
	 * maxmind_database
	 * https://www.maxmind.com/
	 * https://dev.maxmind.com/geoip/geoip2/geolite2/
	 *
	 * @param $ip
	 * @return \GeoIp2\Model\City|string
	 */
	public function getRaw($ip)
	{
		$database = config('geoip.drivers.maxmind_database.database', false);
		$licenseKey = config('geoip.drivers.maxmind_database.licenseKey');
		
		// check if file exists first
		if (!$database || !file_exists($database)) {
			return 'The Maxmind database file is not found.';
		}
		
		// Catch maxmind exception and throw GeoIP exception
		try {
			$maxmind = new Reader($database);
			
			return $maxmind->city($ip);
		} catch (\Throwable $e) {
		}
		
		return 'Impossible to read the Maxmind database file.';
	}
}
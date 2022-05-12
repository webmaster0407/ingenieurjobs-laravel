<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class GeoIP
{
	protected $ip = null;
	
	/**
	 * @return false|string
	 */
	public function getIp()
	{
		$ip = null;
		if (config('geoip.randomIp')) {
			$ip = long2ip(mt_rand());
		}
		if (empty($ip)) {
			$ip = Ip::get();
		}
		
		$this->ip = $ip;
		
		return $ip;
	}
	
	/**
	 * @return mixed
	 * @throws \Exception
	 */
	public function getData()
	{
		if (empty($this->ip)) {
			$this->ip = $this->getIp();
		}
		
		try {
			$data = $this->getDriver()->get($this->ip);
		} catch (\Exception $e) {
			$message = 'Failed to get GeoIP data';
			if (!empty($e->getMessage())) {
				$message = $e->getMessage() . ' ' . $message;
			}
			throw new \Exception($message, 0, $e);
		}
		
		/*
		// DEBUG
		if (config('geoip.randomIp') && !empty(data_get($data, 'countryCode'))) {
			$msg = 'GeoIP (' . config('geoip.default', '--') . '): ' . $this->ip . ' => ' . data_get($data, 'countryCode');
			Log::info($msg);
		}
		*/
		
		return $data;
	}
	
	/**
	 * @param $driver
	 * @return mixed
	 * @throws \Exception
	 */
	public function getDriver($driver = null)
	{
		$defaultDriver = $defaultDriver ?? config('geoip.default', '');
		
		$driverClass = '\App\Helpers\GeoIP\Drivers\\' . ucfirst(Str::camel($defaultDriver));
		
		if (!class_exists($driverClass)) {
			throw new \Exception(sprintf('Driver [%s] not supported.', $defaultDriver));
		}
		
		if (!method_exists($driverClass, 'get')) {
			throw new \Exception(sprintf('Driver [%s] not fully supported.', $defaultDriver));
		}
		
		return new $driverClass();
	}
}
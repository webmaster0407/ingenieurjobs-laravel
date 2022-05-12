<?php

namespace App\Helpers\GeoIP;

use Illuminate\Http\Client\Response;

abstract class AbstractDriver
{
	public function __construct()
	{
		//...
	}
	
	/**
	 * Get GeoIP info from IP.
	 *
	 * @param string|null $ip
	 *
	 * @return array
	 */
	abstract public function get(?string $ip);
	
	/**
	 * Get the raw GeoIP info from the driver.
	 *
	 * @param string|null $ip
	 *
	 * @return mixed
	 */
	abstract public function getRaw(?string $ip);
	
	/**
	 * Get the default values (all null).
	 *
	 * @param string|null $ip
	 * @param $responseError
	 * @return array
	 */
	protected function getDefault(?string $ip, $responseError = null): array
	{
		$responseError = $this->errorMessage($responseError); // required!
		
		return [
			'driver'      => config('geoip.default'),
			'ip'          => $ip,
			'error'       => $responseError,
			'city'        => null,
			'country'     => null,
			'countryCode' => null,
			'latitude'    => null,
			'longitude'   => null,
			'region'      => null,
			'regionCode'  => null,
			'timezone'    => null,
			'postalCode'  => null,
		];
	}
	
	/**
	 * @param $response
	 * @return string
	 */
	protected function errorMessage($response): string
	{
		if (is_string($response)) {
			return $response;
		}
		
		if (
			$response instanceof Response
			&& method_exists($response, 'reason')
			&& method_exists($response, 'body')
		) {
			try {
				$responseError = $response->reason();
				if (empty($responseError)) {
					$responseError = $response->body();
				}
				$response = $responseError;
			} catch (\Exception $e) {
			}
		}
		
		if (is_array($response)) {
			$response = json_encode($response);
		}
		
		if (empty($response) || !is_string($response)) {
			$response = 'Failed to get GeoIP data.';
		}
		
		return $response;
	}
}

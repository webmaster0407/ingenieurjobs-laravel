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

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PreventRequestsDuringMaintenance extends Middleware
{
	/**
	 * The URIs that should be reachable while maintenance mode is enabled.
	 *
	 * @var array
	 */
	protected $except = [];
	
	/**
	 * Create a new middleware instance.
	 *
	 * @param  \Illuminate\Contracts\Foundation\Application $app
	 * @return void
	 */
	public function __construct(Application $app)
	{
		parent::__construct($app);
		
		$this->except = [
			admin_uri() . '/*',
			admin_uri(),
			'upgrade',
			'upgrade/run',
			'captcha/*',
			'api/captcha/*',
			dynamicRoute('routes.login') . '/*',
			dynamicRoute('routes.login'),
			dynamicRoute('routes.logout') . '/*',
			dynamicRoute('routes.logout'),
			'api/auth/login',
			'api/auth/logout/*',
		];
	}
	
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 *
	 * @throws \Symfony\Component\HttpKernel\Exception\HttpException
	 */
	public function handle($request, Closure $next)
	{
		if ($this->app->isDownForMaintenance()) {
			$down = $this->app->storagePath() . '/framework/down';
			
			if (file_exists($down)) {
				$data = json_decode(file_get_contents($down), true);
				
				if (isset($data['secret']) && $request->path() === $data['secret']) {
					return $this->bypassResponse($data['secret']);
				}
				
				if ($this->hasValidBypassCookie($request, $data) || $this->inExceptArray($request)) {
					return $next($request);
				}
				
				if ($this->shouldPassThroughIp($request)) {
					return $next($request);
				}
				
				if (isset($data['redirect'])) {
					$path = $data['redirect'] === '/'
						? $data['redirect']
						: trim($data['redirect'], '/');
					
					if ($request->path() !== $path) {
						return redirect($path);
					}
				}
				
				if (isset($data['template'])) {
					return response(
						$data['template'],
						$data['status'] ?? 503,
						$this->getHeaders($data)
					);
				}
				
				throw new HttpException(
					$data['status'] ?? 503,
					'Service Unavailable',
					null,
					$this->getHeaders($data)
				);
			}
		}
		
		return $next($request);
	}
	
	/**
	 * @param $request
	 * @return bool
	 */
	protected function shouldPassThroughIp($request)
	{
		$exceptOwnIp = config('larapen.core.exceptOwnIp');
		if (is_array($exceptOwnIp)) {
			if (in_array($request->ip(), $exceptOwnIp)) {
				return true;
			}
		}
		
		return false;
	}
}

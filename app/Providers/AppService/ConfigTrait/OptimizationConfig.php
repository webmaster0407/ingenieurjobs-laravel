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

namespace App\Providers\AppService\ConfigTrait;

trait OptimizationConfig
{
	/**
	 * @param string $settings
	 */
	private function updateOptimizationConfig($settings = 'settings')
	{
		config()->set('cache.default', env('CACHE_DRIVER', 'file'));
		// Memcached
		config()->set('cache.stores.memcached.persistent_id', env('MEMCACHED_PERSISTENT_ID'));
		config()->set('cache.stores.memcached.sasl', [
			env('MEMCACHED_USERNAME'),
			env('MEMCACHED_PASSWORD'),
		]);
		$memcachedServers = [];
		$i = 1;
		while (getenv('MEMCACHED_SERVER_' . $i . '_HOST')) {
			if ($i == 1) {
				$host = '127.0.0.1';
				$port = 11211;
			} else {
				$host = null;
				$port = null;
			}
			$memcachedServers[$i]['host'] = env('MEMCACHED_SERVER_' . $i . '_HOST', $host);
			$memcachedServers[$i]['port'] = env('MEMCACHED_SERVER_' . $i . '_PORT', $port);
			$i++;
		}
		config()->set('cache.stores.memcached.servers', $memcachedServers);
		// Redis
		config()->set('database.redis.client', env('REDIS_CLIENT', 'predis'));
		config()->set('database.redis.default.host', env('REDIS_HOST', '127.0.0.1'));
		config()->set('database.redis.default.password', env('REDIS_PASSWORD', null));
		config()->set('database.redis.default.port', env('REDIS_PORT', 6379));
		config()->set('database.redis.default.database', env('REDIS_DB', 0));
		config()->set('database.redis.options.cluster', env('REDIS_CLUSTER', 'predis'));
		if (config('settings.optimization.redis_cluster_activation')) {
			$redisClusters = [];
			$i = 1;
			while (getenv('REDIS_CLUSTER_' . $i . '_HOST')) {
				$redisClusters[$i]['host'] = env('REDIS_CLUSTER_' . $i . '_HOST');
				$redisClusters[$i]['password'] = env('REDIS_CLUSTER_' . $i . '_PASSWORD');
				$redisClusters[$i]['port'] = env('REDIS_CLUSTER_' . $i . '_PORT');
				$redisClusters[$i]['database'] = env('REDIS_CLUSTER_' . $i . '_DB');
				$i++;
			}
			config()->set('database.redis.clusters.default', $redisClusters);
		}
		// Check if the caching is disabled, then disabled it!
		if (config('settings.optimization.cache_driver') == 'array') {
			config()->set('settings.optimization.cache_expiration', '-1');
		}
	}
}

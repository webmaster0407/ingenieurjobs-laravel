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

namespace App\Observers\Traits\Setting;

use Jackiedo\DotenvEditor\Facades\DotenvEditor;

trait OptimizationTrait
{
	/**
	 * Updating
	 *
	 * @param $setting
	 * @param $original
	 */
	public function optimizationUpdating($setting, $original)
	{
		$this->updateEnvFileForCacheParameters($setting);
	}
	
	/**
	 * Update app caching system parameters in the /.env file
	 *
	 * @param $setting
	 */
	private function updateEnvFileForCacheParameters($setting)
	{
		if (!is_array($setting->value)) return;
		
		// Remove Existing Variables
		if (DotenvEditor::keyExists('CACHE_DRIVER')) {
			DotenvEditor::deleteKey('CACHE_DRIVER');
		}
		if (DotenvEditor::keyExists('CACHE_PREFIX')) {
			DotenvEditor::deleteKey('CACHE_PREFIX');
		}
		if (DotenvEditor::keyExists('MEMCACHED_PERSISTENT_ID')) {
			DotenvEditor::deleteKey('MEMCACHED_PERSISTENT_ID');
		}
		if (DotenvEditor::keyExists('MEMCACHED_USERNAME')) {
			DotenvEditor::deleteKey('MEMCACHED_USERNAME');
		}
		if (DotenvEditor::keyExists('MEMCACHED_PASSWORD')) {
			DotenvEditor::deleteKey('MEMCACHED_PASSWORD');
		}
		$i = 1;
		while (DotenvEditor::keyExists('MEMCACHED_SERVER_' . $i . '_HOST')) {
			DotenvEditor::deleteKey('MEMCACHED_SERVER_' . $i . '_HOST');
			$i++;
		}
		$i = 1;
		while (DotenvEditor::keyExists('MEMCACHED_SERVER_' . $i . '_PORT')) {
			DotenvEditor::deleteKey('MEMCACHED_SERVER_' . $i . '_PORT');
			$i++;
		}
		if (DotenvEditor::keyExists('REDIS_CLIENT')) {
			DotenvEditor::deleteKey('REDIS_CLIENT');
		}
		if (DotenvEditor::keyExists('REDIS_CLUSTER')) {
			DotenvEditor::deleteKey('REDIS_CLUSTER');
		}
		if (DotenvEditor::keyExists('REDIS_HOST')) {
			DotenvEditor::deleteKey('REDIS_HOST');
		}
		if (DotenvEditor::keyExists('REDIS_PASSWORD')) {
			DotenvEditor::deleteKey('REDIS_PASSWORD');
		}
		if (DotenvEditor::keyExists('REDIS_PORT')) {
			DotenvEditor::deleteKey('REDIS_PORT');
		}
		if (DotenvEditor::keyExists('REDIS_DB')) {
			DotenvEditor::deleteKey('REDIS_DB');
		}
		$i = 1;
		while (DotenvEditor::keyExists('REDIS_CLUSTER_' . $i . '_HOST')) {
			DotenvEditor::deleteKey('REDIS_CLUSTER_' . $i . '_HOST');
			$i++;
		}
		$i = 1;
		while (DotenvEditor::keyExists('REDIS_CLUSTER_' . $i . '_PASSWORD')) {
			DotenvEditor::deleteKey('REDIS_CLUSTER_' . $i . '_PASSWORD');
			$i++;
		}
		$i = 1;
		while (DotenvEditor::keyExists('REDIS_CLUSTER_' . $i . '_PORT')) {
			DotenvEditor::deleteKey('REDIS_CLUSTER_' . $i . '_PORT');
			$i++;
		}
		$i = 1;
		while (DotenvEditor::keyExists('REDIS_CLUSTER_' . $i . '_DB')) {
			DotenvEditor::deleteKey('REDIS_CLUSTER_' . $i . '_DB');
			$i++;
		}
		DotenvEditor::save();
		
		// Create Variables
		$envFileHasChanged = false;
		if (array_key_exists('cache_driver', $setting->value)) {
			DotenvEditor::setKey('CACHE_DRIVER', $setting->value['cache_driver']);
			DotenvEditor::setKey('CACHE_PREFIX', 'lc_');
			$envFileHasChanged = true;
		}
		if (array_key_exists('memcached_persistent_id', $setting->value)) {
			DotenvEditor::setKey('MEMCACHED_PERSISTENT_ID', $setting->value['memcached_persistent_id']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('memcached_sasl_username', $setting->value)) {
			DotenvEditor::setKey('MEMCACHED_USERNAME', $setting->value['memcached_sasl_username']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('memcached_sasl_password', $setting->value)) {
			DotenvEditor::setKey('MEMCACHED_PASSWORD', $setting->value['memcached_sasl_password']);
			$envFileHasChanged = true;
		}
		$i = 1;
		while (
			array_key_exists('memcached_servers_' . $i . '_host', $setting->value)
			&& array_key_exists('memcached_servers_' . $i . '_port', $setting->value)
		) {
			if (DotenvEditor::keyExists('MEMCACHED_SERVER_' . $i . '_HOST')) {
				DotenvEditor::deleteKey('MEMCACHED_SERVER_' . $i . '_HOST');
			}
			if (DotenvEditor::keyExists('MEMCACHED_SERVER_' . $i . '_PORT')) {
				DotenvEditor::deleteKey('MEMCACHED_SERVER_' . $i . '_PORT');
			}
			DotenvEditor::setKey('MEMCACHED_SERVER_' . $i . '_HOST', $setting->value['memcached_servers_' . $i . '_host']);
			DotenvEditor::setKey('MEMCACHED_SERVER_' . $i . '_PORT', $setting->value['memcached_servers_' . $i . '_port']);
			$i++;
			if (!$envFileHasChanged) {
				$envFileHasChanged = true;
			}
		}
		if (array_key_exists('redis_client', $setting->value)) {
			DotenvEditor::setKey('REDIS_CLIENT', $setting->value['redis_client']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('redis_cluster', $setting->value)) {
			DotenvEditor::setKey('REDIS_CLUSTER', $setting->value['redis_cluster']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('redis_host', $setting->value)) {
			DotenvEditor::setKey('REDIS_HOST', $setting->value['redis_host']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('redis_password', $setting->value)) {
			DotenvEditor::setKey('REDIS_PASSWORD', $setting->value['redis_password']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('redis_port', $setting->value)) {
			DotenvEditor::setKey('REDIS_PORT', $setting->value['redis_port']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('redis_database', $setting->value)) {
			DotenvEditor::setKey('REDIS_DB', $setting->value['redis_database']);
			$envFileHasChanged = true;
		}
		if (array_key_exists('redis_cluster_activation', $setting->value) && $setting->value['redis_cluster_activation'] == '1') {
			$i = 1;
			while (
				array_key_exists('redis_cluster_' . $i . '_host', $setting->value)
				&& array_key_exists('redis_cluster_' . $i . '_password', $setting->value)
				&& array_key_exists('redis_cluster_' . $i . '_port', $setting->value)
				&& array_key_exists('redis_cluster_' . $i . '_database', $setting->value)
			) {
				DotenvEditor::setKey('REDIS_CLUSTER_' . $i . '_HOST', $setting->value['redis_cluster_' . $i . '_host']);
				DotenvEditor::setKey('REDIS_CLUSTER_' . $i . '_PASSWORD', $setting->value['redis_cluster_' . $i . '_password']);
				DotenvEditor::setKey('REDIS_CLUSTER_' . $i . '_PORT', $setting->value['redis_cluster_' . $i . '_port']);
				DotenvEditor::setKey('REDIS_CLUSTER_' . $i . '_DB', $setting->value['redis_cluster_' . $i . '_database']);
				$i++;
				if (!$envFileHasChanged) {
					$envFileHasChanged = true;
				}
			}
		}
		
		// Save the /.env file
		if ($envFileHasChanged) {
			DotenvEditor::save();
			
			// Some time of pause
			sleep(2);
		}
	}
}

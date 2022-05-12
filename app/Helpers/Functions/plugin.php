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

use App\Helpers\Arr;
use App\Helpers\Curl;
use Illuminate\Support\Facades\File;

/**
 * @param string|null $category
 * @param bool $checkInstalled
 * @return array
 */
function plugin_list(string $category = null, bool $checkInstalled = false): array
{
	$plugins = [];
	
	// Load all Plugins Services Provider
	$list = File::glob(config('larapen.core.plugin.path') . '*', GLOB_ONLYDIR);
	
	if (count($list) > 0) {
		foreach ($list as $pluginPath) {
			// Get plugin folder name
			$pluginFolderName = strtolower(last(explode(DIRECTORY_SEPARATOR, $pluginPath)));
			
			// Get plugin details
			$plugin = load_plugin($pluginFolderName);
			if (empty($plugin)) {
				continue;
			}
			
			// Filter for category
			if (!is_null($category) && $plugin->category != $category) {
				continue;
			}
			
			// Check installed plugins
			try {
				$plugin->installed = call_user_func($plugin->class . '::installed');
			} catch (\Exception $e) {
				continue;
			}
			
			// Filter for installed plugins
			if ($checkInstalled && $plugin->installed != true) {
				continue;
			}
			
			$plugins[$plugin->name] = $plugin;
		}
	}
	
	return $plugins;
}

/**
 * @param string|null $category
 * @return array
 */
function plugin_installed_list(string $category = null): array
{
	return plugin_list($category, true);
}

/**
 * Get the plugin details
 *
 * @param string $name
 * @return array|mixed|\stdClass|null
 */
function load_plugin(string $name)
{
	try {
		// Get the plugin init data
		$pluginFolderPath = plugin_path($name);
		$pluginData = file_get_contents($pluginFolderPath . '/init.json');
		$pluginData = json_decode($pluginData);
		
		// Plugin details
		$plugin = [
			'name'          => $pluginData->name,
			'version'       => $pluginData->version,
			'display_name'  => $pluginData->display_name,
			'description'   => $pluginData->description,
			'author'        => $pluginData->author,
			'category'      => $pluginData->category,
			'has_installer' => (isset($pluginData->has_installer) && $pluginData->has_installer == true),
			'installed'     => null,
			'activated'     => true,
			'options'       => null,
			'item_id'       => (isset($pluginData->item_id)) ? $pluginData->item_id : null,
			'provider'      => plugin_namespace($pluginData->name, ucfirst($pluginData->name) . 'ServiceProvider'),
			'class'         => plugin_namespace($pluginData->name, ucfirst($pluginData->name)),
		];
		$plugin = Arr::toObject($plugin);
		
	} catch (\Exception $e) {
		$plugin = null;
	}
	
	return $plugin;
}

/**
 * Get the plugin details (Only if it's installed)
 *
 * @param string $name
 * @return array|mixed|\stdClass|null
 */
function load_installed_plugin(string $name)
{
	$plugin = load_plugin($name);
	if (empty($plugin)) {
		return null;
	}
	
	if (isset($plugin->has_installer) && $plugin->has_installer) {
		try {
			$installed = call_user_func($plugin->class . '::installed');
			
			return ($installed) ? $plugin : null;
		} catch (\Exception $e) {
			return null;
		}
	} else {
		return $plugin;
	}
}

/**
 * @param string $pluginFolderName
 * @param string|null $localNamespace
 * @return string
 */
function plugin_namespace(string $pluginFolderName, string $localNamespace = null): string
{
	if (!is_null($localNamespace)) {
		return config('larapen.core.plugin.namespace') . $pluginFolderName . '\\' . $localNamespace;
	} else {
		return config('larapen.core.plugin.namespace') . $pluginFolderName;
	}
}

/**
 * Get a file of the plugin
 *
 * @param string $pluginFolderName
 * @param string|null $localPath
 * @return string
 */
function plugin_path(string $pluginFolderName, string $localPath = null): string
{
	return config('larapen.core.plugin.path') . $pluginFolderName . '/' . $localPath;
}

/**
 * Check if a plugin exists
 *
 * @param string $pluginFolderName
 * @param string|null $path
 * @return bool
 */
function plugin_exists(string $pluginFolderName, string $path = null): bool
{
	$fullPath = config('larapen.core.plugin.path') . $pluginFolderName . '/';
	
	if (empty($path)) {
		// If the second argument is not set or is empty,
		// then, check if the plugin's service provider exists instead.
		$serviceProviderFilename = ucfirst($pluginFolderName) . 'ServiceProvider.php';
		$fullPath = $fullPath . $serviceProviderFilename;
	} else {
		$fullPath = $fullPath . $path;
	}
	
	return File::exists($fullPath);
}

/**
 * IMPORTANT: Do not change this part of the code to prevent any data losing issue.
 *
 * @param $plugin
 * @param string|null $purchaseCode
 * @return mixed
 */
function plugin_purchase_code_data($plugin, ?string $purchaseCode)
{
	if (is_array($plugin)) {
		$plugin = Arr::toObject($plugin);
	}
	
	$endpoint = getPurchaseCodeApiEndpoint($purchaseCode, $plugin->item_id);
	$data = Curl::fetch($endpoint);
	if (!isValidJson($data)) {
		$data = json_encode(['valid' => false, 'message' => 'Invalid purchase code. ' . strip_tags($data)]);
	}
	$data = json_decode($data);
	if (!isset($data->valid) || !isset($data->message)) {
		$data = json_encode(['valid' => false, 'message' => 'Invalid purchase code. Incorrect data format.']);
		$data = json_decode($data);
	}
	if ($data->valid == true) {
		$pluginFile = storage_path('framework/plugins/' . $plugin->name);
		file_put_contents($pluginFile, $purchaseCode);
	}
	
	return $data;
}

/**
 * IMPORTANT: Do not change this part of the code to prevent any data losing issue.
 *
 * @param $plugin
 * @return bool
 */
function plugin_check_purchase_code($plugin): bool
{
	if (is_array($plugin)) {
		$plugin = Arr::toObject($plugin);
	}
	
	$pluginFile = storage_path('framework/plugins/' . $plugin->name);
	if (File::exists($pluginFile)) {
		$purchaseCode = file_get_contents($pluginFile);
		if (!empty($purchaseCode)) {
			$pattern = '#([a-z0-9]{8})-?([a-z0-9]{4})-?([a-z0-9]{4})-?([a-z0-9]{4})-?([a-z0-9]{12})#';
			$replacement = '$1-$2-$3-$4-$5';
			$purchaseCode = preg_replace($pattern, $replacement, strtolower($purchaseCode));
			if (strlen($purchaseCode) == 36) {
				$res = true;
			} else {
				$res = false;
			}
			
			return $res;
		}
	}
	
	return false;
}

/**
 * Get plugins settings values (with HTML)
 *
 * @param $setting
 * @param string|null $out
 * @return mixed
 */
function plugin_setting_value_html($setting, ?string $out)
{
	$plugins = plugin_installed_list();
	if (!empty($plugins)) {
		foreach ($plugins as $plugin) {
			$pluginMethodNames = preg_grep('#^get(.+)ValueHtml$#', get_class_methods($plugin->class));
			
			if (!empty($pluginMethodNames)) {
				foreach ($pluginMethodNames as $method) {
					try {
						$out = call_user_func($plugin->class . '::' . $method, $setting, $out);
						
						return $out;
					} catch (\Exception $e) {
						continue;
					}
				}
			}
		}
	}
	
	return $out;
}

/**
 * Set plugins settings values
 *
 * @param $value
 * @param $setting
 * @return bool|mixed
 */
function plugin_set_setting_value($value, $setting)
{
	$plugins = plugin_installed_list();
	if (!empty($plugins)) {
		foreach ($plugins as $plugin) {
			
			$pluginMethodNames = preg_grep('#^set(.+)Value$#', get_class_methods($plugin->class));
			
			if (!empty($pluginMethodNames)) {
				foreach ($pluginMethodNames as $method) {
					try {
						$value = call_user_func($plugin->class . '::' . $method, $value, $setting);
					} catch (\Exception $e) {
						continue;
					}
				}
			}
		}
	}
	
	return $value;
}

/**
 * Check if the plugin attribute exists in the setting object
 *
 * @param $attributes
 * @param $pluginAttrName
 * @return bool
 */
function plugin_setting_field_exists($attributes, $pluginAttrName): bool
{
	$attributes = jsonToArray($attributes);
	
	if (count($attributes) > 0) {
		foreach ($attributes as $key => $field) {
			if (isset($field['name']) && $field['name'] == $pluginAttrName) {
				return true;
			}
		}
	}
	
	return false;
}

/**
 * Create the plugin attribute in the setting object
 *
 * @param $attributes
 * @param $pluginAttrArray
 * @return string|bool|null
 */
function plugin_setting_field_create($attributes, $pluginAttrArray)
{
	$attributes = jsonToArray($attributes);
	
	$attributes[] = $pluginAttrArray;
	
	return json_encode($attributes);
}

/**
 * Remove the plugin attribute from the setting object
 *
 * @param $attributes
 * @param $pluginAttrName
 * @return string|bool|null
 */
function plugin_setting_field_delete($attributes, $pluginAttrName)
{
	$attributes = jsonToArray($attributes);
	
	// Get plugin's Setting field array
	$pluginAttrArray = Arr::where($attributes, function ($value, $key) use ($pluginAttrName) {
		return isset($value['name']) && $value['name'] == $pluginAttrName;
	});
	
	// Remove the plugin Setting field array
	Arr::forget($attributes, array_keys($pluginAttrArray));
	
	return json_encode($attributes);
}

/**
 * Remove the plugin attribute value from the setting object values
 *
 * @param $values
 * @param $pluginAttrName
 * @return mixed
 */
function plugin_setting_value_delete($values, $pluginAttrName)
{
	$values = jsonToArray($values);
	
	// Remove the plugin Setting field array
	if (isset($values[$pluginAttrName])) {
		unset($values[$pluginAttrName]);
	}
	
	return $values;
}

/**
 * Clear the key file
 *
 * @param $name
 */
function plugin_clear_uninstall($name)
{
	$path = storage_path('framework/plugins/' . strtolower($name));
	if (File::exists($path)) {
		File::delete($path);
	}
}

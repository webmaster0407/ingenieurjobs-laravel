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

namespace App\Http\Controllers\Admin;

use App\Helpers\Arr;
use Prologue\Alerts\Facades\Alert;

class PluginController extends Controller
{
	public $data = [];
	
	public function __construct()
	{
		parent::__construct();
		
		$this->data['plugins'] = [];
	}
	
	public function index()
	{
		$plugins = [];
		try {
			// Load all Plugins Services Provider
			$plugins = plugin_list();
			
			// Append the Plugin Options
			$plugins = collect($plugins)->map(function ($item, $key) {
				if (is_object($item)) {
					$item = Arr::fromObject($item);
				}
				
				if (isset($item['item_id']) && !empty($item['item_id'])) {
					$item['installed'] = plugin_check_purchase_code($item);
				}
				
				// Append the Options
				$pluginClass = plugin_namespace($item['name'], ucfirst($item['name']));
				$item['options'] = (method_exists($pluginClass, 'getOptions')) ? (array)call_user_func($pluginClass . '::getOptions') : null;
				
				return Arr::toObject($item);
			})->toArray();
		} catch (\Throwable $e) {
			$message = $e->getMessage();
			if (!empty($message)) {
				Alert::error($message)->flash();
			}
		}
		
		$this->data['plugins'] = $plugins;
		$this->data['title'] = 'Plugins';
		
		return view('admin.plugins', $this->data);
	}
	
	public function install($name)
	{
		// Get plugin details
		$plugin = load_plugin($name);
		
		// Install the plugin
		if (!empty($plugin)) {
			if (request()->has('purchase_code')) {
				$rules = $messages = [];
				$purchaseCodeData = plugin_purchase_code_data($plugin, request()->input('purchase_code'));
				if ($purchaseCodeData->valid == false) {
					$rules['purchase_code_valid'] = 'required';
					if ($purchaseCodeData->message != '') {
						$messages = [
							'purchase_code_valid.required' => trans('admin.plugin_purchase_code_invalid_message', [
									'plugin_name' => $plugin->display_name,
								]) . ' ERROR: <strong>' . $purchaseCodeData->message . '</strong>',
						];
					}
				}
				
				if (!empty($messages)) {
					$this->validate(request(), $rules, $messages);
				} else {
					$this->validate(request(), $rules);
				}
				
				if ($purchaseCodeData->valid) {
					$res = call_user_func($plugin->class . '::installed');
					if (!$res) {
						$res = call_user_func($plugin->class . '::install');
					}
					
					// Result Notification
					if ($res) {
						Alert::success(trans('admin.The plugin plugin has been successfully installed', ['plugin_name' => $plugin->display_name]))->flash();
					} else {
						Alert::error(trans('admin.Failed to install the plugin name', ['plugin_name' => $plugin->display_name]))->flash();
					}
				} else {
					if (isset($messages['purchase_code_valid.required'])) {
						$message = strip_tags($messages['purchase_code_valid.required']);
						Alert::error($message)->flash();
					}
				}
			} else {
				$res = call_user_func($plugin->class . '::install');
				
				// Result Notification
				if ($res) {
					Alert::success(trans('admin.The plugin plugin has been successfully installed', ['plugin_name' => $plugin->display_name]))->flash();
				} else {
					Alert::error(trans('admin.Failed to install the plugin name', ['plugin_name' => $plugin->display_name]))->flash();
				}
			}
		}
		
		return redirect(admin_uri('plugins'));
	}
	
	public function uninstall($name)
	{
		// Get plugin details
		$plugin = load_plugin($name);
		
		// Uninstall the plugin
		if (!empty($plugin)) {
			$res = call_user_func($plugin->class . '::uninstall');
			
			// Result Notification
			if ($res) {
				plugin_clear_uninstall($name);
				
				Alert::success(trans('admin.The plugin plugin has been uninstalled', ['plugin_name' => $plugin->display_name]))->flash();
			} else {
				Alert::error(trans('admin.Failed to Uninstall the plugin name', ['plugin_name' => $plugin->display_name]))->flash();
			}
		}
		
		return redirect(admin_uri('plugins'));
	}
	
	public function delete($plugin)
	{
		// ...
		// Alert::success(trans('admin.The plugin has been removed'))->flash();
		// Alert::error(trans('admin.Failed to remove the plugin name', ['plugin_name' => $plugin]))->flash();
		
		return redirect(admin_uri('plugins'));
	}
}

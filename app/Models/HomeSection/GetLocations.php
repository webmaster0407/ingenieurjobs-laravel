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

namespace App\Models\HomeSection;

class GetLocations
{
	public static function getValues($value)
	{
		if (empty($value)) {
			
			$value['show_cities'] = '1';
			$value['max_items'] = '14';
			$value['show_listing_btn'] = '1';
			$value['show_map'] = '1';
			$value['map_width'] = '300px';
			$value['map_height'] = '300px';
			
		} else {
			
			if (!isset($value['show_cities'])) {
				$value['show_cities'] = '1';
			}
			if (!isset($value['max_items'])) {
				$value['max_items'] = '14';
			}
			if (!isset($value['show_listing_btn'])) {
				$value['show_listing_btn'] = '1';
			}
			if (!isset($value['show_map'])) {
				$value['show_map'] = '1';
			}
			if (!isset($value['map_width'])) {
				$value['map_width'] = '300px';
			}
			if (!isset($value['map_height'])) {
				$value['map_height'] = '300px';
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		return $value;
	}
	
	public static function getFields($diskName)
	{
		$fields = [
			[
				'name'  => 'separator_4',
				'type'  => 'custom_html',
				'value' => trans('admin.getLocations_html_locations'),
			],
			[
				'name'              => 'show_cities',
				'label'             => trans('admin.Show the Country Cities'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'show_listing_btn',
				'label'             => trans('admin.Show the bottom button'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'background_color',
				'label'               => trans('admin.Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'border_width',
				'label'             => trans('admin.Border Width'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '1px',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'border_color',
				'label'               => trans('admin.Border Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'text_color',
				'label'               => trans('admin.Text Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'link_color',
				'label'               => trans('admin.Links Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'link_color_hover',
				'label'               => trans('admin.Links Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'max_items',
				'label'             => trans('admin.max_cities_label'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => 12,
				],
				'hint'              => trans('admin.max_cities_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'items_cols',
				'label'             => trans('admin.Cities Columns'),
				'type'              => 'select2_from_array',
				'options'           => [
					3 => '3',
					2 => '2',
					1 => '1',
				],
				'hint'              => trans('admin.This option is applied only when the map is displayed'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'cache_expiration',
				'label'             => trans('admin.Cache Expiration Time for this section'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '0',
				],
				'hint'              => trans('admin.home_cache_expiration_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_4_1',
				'type'  => 'custom_html',
				'value' => trans('admin.getLocations_html_map'),
			],
			[
				'name'  => 'show_map',
				'label' => trans('admin.Show the Country Map'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'                => 'map_background_color',
				'label'               => trans('admin.maps_background_color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => 'transparent',
				],
				'hint'                => trans('admin.Enter a RGB color code or the word transparent'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'map_border',
				'label'               => trans('admin.maps_border'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'hint'                => trans('admin.<br>'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'map_hover_border',
				'label'               => trans('admin.maps_hover_border'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#c7c5c1',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'map_border_width',
				'label'             => trans('admin.maps_border_width'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => 4,
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'map_color',
				'label'               => trans('admin.maps_color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#f2f0eb',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'map_hover',
				'label'               => trans('admin.maps_hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#4682B4',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'map_width',
				'label'             => trans('admin.maps_width'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '300',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'map_height',
				'label'             => trans('admin.maps_height'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '300',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_last',
				'type'  => 'custom_html',
				'value' => '<hr>',
			],
			[
				'name'  => 'hide_on_mobile',
				'label' => trans('admin.hide_on_mobile_label'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.hide_on_mobile_hint'),
			],
			[
				'name'  => 'active',
				'label' => trans('admin.Active'),
				'type'  => 'checkbox_switch',
			],
		];
		
		return $fields;
	}
}

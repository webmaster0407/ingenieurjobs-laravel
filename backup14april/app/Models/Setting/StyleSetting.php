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

namespace App\Models\Setting;

use App\Models\Setting\Traits\UploadTrait;

class StyleSetting
{
	use UploadTrait;
	
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['skin'] = 'deepPurple';
			$value['header_bottom_border_width'] = '1px';
			$value['header_bottom_border_color'] = '#e8e8e8';
			$value['login_bg_image'] = config('larapen.admin.login_bg_image');
			
			$value['logo_width'] = '216';
			$value['logo_height'] = '40';
			$value['logo_aspect_ratio'] = '1';
			
			$value['admin_logo_bg'] = 'skin4';
			$value['admin_navbar_bg'] = 'skin6';
			$value['admin_sidebar_type'] = 'full';
			$value['admin_sidebar_bg'] = 'skin5';
			$value['admin_sidebar_position'] = '1';
			$value['admin_header_position'] = '1';
			$value['admin_boxed_layout'] = '0';
			$value['admin_dark_theme'] = '0';
			
		} else {
			
			foreach ($value as $key => $item) {
				if ($key == 'body_background_image') {
					if (!$disk->exists($value['body_background_image'])) {
						$value[$key] = null;
					}
				}
				if ($key == 'login_bg_image') {
					if (!$disk->exists($value['login_bg_image'])) {
						$value[$key] = config('larapen.admin.login_bg_image');
					}
				}
			}
			if (!isset($value['skin'])) {
				$value['skin'] = 'deepPurple';
			}
			if (!isset($value['header_bottom_border_width'])) {
				$value['header_bottom_border_width'] = '1px';
			}
			if (!isset($value['header_bottom_border_color'])) {
				$value['header_bottom_border_color'] = '#e8e8e8';
			}
			
			if (!isset($value['logo_width'])) {
				$value['logo_width'] = '216';
			}
			if (!isset($value['logo_height'])) {
				$value['logo_height'] = '40';
			}
			if (!isset($value['logo_aspect_ratio'])) {
				$value['logo_aspect_ratio'] = '1';
			}
			
			if (!isset($value['admin_logo_bg'])) {
				$value['admin_logo_bg'] = 'skin4';
			}
			if (!isset($value['admin_navbar_bg'])) {
				$value['admin_navbar_bg'] = 'skin6';
			}
			if (!isset($value['admin_sidebar_type'])) {
				$value['admin_sidebar_type'] = 'full';
			}
			if (!isset($value['admin_sidebar_bg'])) {
				$value['admin_sidebar_bg'] = 'skin5';
			}
			if (!isset($value['admin_sidebar_position'])) {
				$value['admin_sidebar_position'] = '1';
			}
			if (!isset($value['admin_header_position'])) {
				$value['admin_header_position'] = '1';
			}
			if (!isset($value['admin_boxed_layout'])) {
				$value['admin_boxed_layout'] = '0';
			}
			if (!isset($value['admin_dark_theme'])) {
				$value['admin_dark_theme'] = '0';
			}
			// Required keys & values
			// If $value exists and these keys don't exist, then set their default values
			if (!in_array('login_bg_image', array_keys($value))) {
				$value['login_bg_image'] = config('larapen.admin.login_bg_image');
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		// Image quality
		$imageQuality = config('settings.upload.image_quality', 90);
		
		// Body Background Image
		if (isset($value['body_background_image'])) {
			$bodyBackgroundImage = [
				'attribute' => 'body_background_image',
				'path'      => 'app/logo',
				'default'   => null,
				'width'     => (int)config('larapen.core.picture.otherTypes.bgBody.width', 2500),
				'height'    => (int)config('larapen.core.picture.otherTypes.bgBody.height', 2500),
				'ratio'     => config('larapen.core.picture.otherTypes.bgBody.ratio', '1'),
				'upsize'    => config('larapen.core.picture.otherTypes.bgBody.upsize', '0'),
				'quality'   => $imageQuality,
				'filename'  => 'body-background-',
				'orientate' => false,
			];
			$value = self::upload($setting, $value, $bodyBackgroundImage);
		}
		
		// Login Page Background Image
		if (isset($value['login_bg_image'])) {
			$loginBgImage = [
				'attribute' => 'login_bg_image',
				'path'      => 'app/backend',
				'default'   => config('larapen.admin.login_bg_image'),
				'width'     => (int)config('larapen.core.picture.otherTypes.bgBody.width', 2500),
				'height'    => (int)config('larapen.core.picture.otherTypes.bgBody.height', 2500),
				'ratio'     => config('larapen.core.picture.otherTypes.bgBody.ratio', '1'),
				'upsize'    => config('larapen.core.picture.otherTypes.bgBody.upsize', '0'),
				'quality'   => $imageQuality,
				'filename'  => 'login-bg-image-',
				'orientate' => false,
			];
			$value = self::upload($setting, $value, $loginBgImage);
		}
		
		return $value;
	}
	
	public static function getFields($diskName)
	{
		// Get Pre-Defined Skins By Name
		$skins = config('larapen.core.skins');
		$skinsByName = collect($skins)
			->mapWithKeys(function ($item, $key) {
				return [$key => $item['name']];
			})->toArray();
		
		$fields = [
			[
				'name'  => 'separator_1',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_frontend'),
			],
			[
				'name'              => 'skin',
				'label'             => trans('admin.Front Skin'),
				'type'              => 'select2_from_skins',
				'options'           => $skinsByName,
				'skins'             => json_encode($skins),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'custom_skin_color',
				'label'               => trans('admin.custom_skin_color_label'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#FFFFFF',
				],
				'hint'                => trans('admin.custom_skin_color_hint'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_2',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_customize_front'),
			],
			[
				'name'  => 'separator_2_1',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_customize_front_global'),
			],
			[
				'name'                => 'body_background_color',
				'label'               => trans('admin.Body Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#FFFFFF',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'body_text_color',
				'label'               => trans('admin.Body Text Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#292B2C',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'body_background_image',
				'label'             => trans('admin.Body Background Image'),
				'type'              => 'image',
				'upload'            => 'true',
				'disk'              => $diskName,
				'default'           => '',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_1',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'body_background_image_fixed',
				'label'             => trans('admin.Body Background Image Fixed'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				
				],
			],
			[
				'name'              => 'page_width',
				'label'             => trans('admin.Page Width'),
				'type'              => 'number',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_2',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'                => 'title_color',
				'label'               => trans('admin.Titles Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#292B2C',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'progress_background_color',
				'label'               => trans('admin.Progress Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '',
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
					'placeholder' => '#4682B4',
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
					'placeholder' => '#FF8C00',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_2_2',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_customize_header'),
			],
			[
				'name'  => 'header_sticky',
				'label' => trans('admin.Header Sticky'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'              => 'header_height',
				'label'             => trans('admin.Header Height'),
				'type'              => 'number',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'header_background_color',
				'label'               => trans('admin.Header Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#F8F8F8',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'header_bottom_border_width',
				'label'             => trans('admin.Header Bottom Border Width'),
				'type'              => 'number',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'header_bottom_border_color',
				'label'               => trans('admin.Header Bottom Border Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#E8E8E8',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'header_link_color',
				'label'               => trans('admin.Header Links Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#333',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'header_link_color_hover',
				'label'               => trans('admin.Header Links Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#000',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'  => 'separator_logo',
				'type'  => 'custom_html',
				'value' => trans('admin.style_logo_title'),
			],
			[
				'name'              => 'logo_width',
				'label'             => trans('admin.logo_width_label'),
				'type'              => 'number',
				'hint'              => trans('admin.logo_width_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-3',
				],
			],
			[
				'name'              => 'logo_height',
				'label'             => trans('admin.logo_height_label'),
				'type'              => 'number',
				'hint'              => trans('admin.logo_height_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-3',
				],
			],
			[
				'name'              => 'logo_aspect_ratio',
				'label'             => trans('admin.logo_aspect_ratio_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.logo_aspect_ratio_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'  => 'separator_2_3',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_customize_footer'),
			],
			[
				'name'                => 'footer_background_color',
				'label'               => trans('admin.Footer Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#F5F5F5',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'footer_text_color',
				'label'               => trans('admin.Footer Text Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#333',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'footer_title_color',
				'label'               => trans('admin.Footer Titles Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#000',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_3',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'                => 'footer_link_color',
				'label'               => trans('admin.Footer Links Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#333',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'footer_link_color_hover',
				'label'               => trans('admin.Footer Links Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#333',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'payment_icon_top_border_width',
				'label'             => trans('admin.Payment Methods Icons Top Border Width'),
				'type'              => 'number',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'payment_icon_top_border_color',
				'label'               => trans('admin.Payment Methods Icons Top Border Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#DDD',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'payment_icon_bottom_border_width',
				'label'             => trans('admin.Payment Methods Icons Bottom Border Width'),
				'type'              => 'number',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'payment_icon_bottom_border_color',
				'label'               => trans('admin.Payment Methods Icons Bottom Border Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#DDD',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_2_4',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_customize_button_al'),
			],
			[
				'name'                => 'btn_listing_bg_top_color',
				'label'               => trans('admin.Gradient Background Top Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#ffeb43',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_bg_bottom_color',
				'label'               => trans('admin.Gradient Background Bottom Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#fcde11',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_border_color',
				'label'               => trans('admin.Button Border Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#f6d80f',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_text_color',
				'label'               => trans('admin.Button Text Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#292b2c',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_bg_top_color_hover',
				'label'               => trans('admin.Gradient Background Top Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#fff860',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_bg_bottom_color_hover',
				'label'               => trans('admin.Gradient Background Bottom Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#ffeb43',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_border_color_hover',
				'label'               => trans('admin.Button Border Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#fcde11',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'btn_listing_text_color_hover',
				'label'               => trans('admin.Button Text Color Hover'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#1b1d1e',
				],
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_3',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_raw_css'),
			],
			[
				'name'  => 'separator_3_1',
				'type'  => 'custom_html',
				'value' => trans('admin.style_html_raw_css_hint'),
			],
			[
				'name'       => 'custom_css',
				'label'      => trans('admin.Custom CSS'),
				'type'       => 'textarea',
				'attributes' => [
					'rows' => '5',
				],
				'hint'       => trans('admin.do_not_include_style_tags'),
			],
			[
				'name'  => 'backend_title_separator',
				'type'  => 'custom_html',
				'value' => trans('admin.backend_title_separator'),
			],
			[
				'name'              => 'login_bg_image',
				'label'             => trans('admin.login_bg_image_label'),
				'type'              => 'image',
				'upload'            => 'true',
				'disk'              => $diskName,
				'default'           => config('larapen.admin.login_bg_image'),
				'hint'              => trans('admin.login_bg_image_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_4',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'admin_logo_bg',
				'label'             => trans('admin.admin_logo_bg_label'),
				'type'              => 'select2_from_array',
				'options'           => [
					'skin1' => 'Green',
					'skin2' => 'Red',
					'skin3' => 'Blue',
					'skin4' => 'Purple',
					'skin5' => 'Black',
					'skin6' => 'White',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'admin_navbar_bg',
				'label'             => trans('admin.admin_navbar_bg_label'),
				'type'              => 'select2_from_array',
				'options'           => [
					'skin1' => 'Green',
					'skin2' => 'Red',
					'skin3' => 'Blue',
					'skin4' => 'Purple',
					'skin5' => 'Black',
					'skin6' => 'White',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'admin_sidebar_type',
				'label'             => trans('admin.admin_sidebar_type_label'),
				'type'              => 'select2_from_array',
				'options'           => [
					'full'         => 'Full',
					'mini-sidebar' => 'Mini Sidebar',
					'iconbar'      => 'Icon Bbar',
					'overlay'      => 'Overlay',
				],
				'hint'              => trans('admin.admin_sidebar_type_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'admin_sidebar_bg',
				'label'             => trans('admin.admin_sidebar_bg_label'),
				'type'              => 'select2_from_array',
				'options'           => [
					'skin1' => 'Green',
					'skin2' => 'Red',
					'skin3' => 'Blue',
					'skin4' => 'Purple',
					'skin5' => 'Black',
					'skin6' => 'White',
				],
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_5',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'admin_sidebar_position',
				'label'             => trans('admin.admin_sidebar_position_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.admin_sidebar_position_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				
				],
			],
			[
				'name'              => 'admin_header_position',
				'label'             => trans('admin.admin_header_position_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.admin_header_position_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				
				],
			],
			[
				'name'              => 'admin_boxed_layout',
				'label'             => trans('admin.admin_boxed_layout_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.admin_boxed_layout_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				
				],
			],
			[
				'name'              => 'admin_dark_theme',
				'label'             => trans('admin.admin_dark_theme_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.admin_dark_theme_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				
				],
			],
		];
		
		return $fields;
	}
}

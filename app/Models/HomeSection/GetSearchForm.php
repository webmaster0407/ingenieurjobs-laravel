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

use App\Models\Language;
use App\Models\Setting\Traits\UploadTrait;

class GetSearchForm
{
	use UploadTrait;
	
	public static function getValues($value)
	{
		if (empty($value)) {
			
			$value['enable_form_area_customization'] = '1';
			$value['background_image'] = null;
			
		} else {
			
			if (!isset($value['enable_form_area_customization'])) {
				$value['enable_form_area_customization'] = '1';
			}
			if (!isset($value['background_image'])) {
				$value['background_image'] = null;
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		// Background Image
		if (isset($value['background_image'])) {
			$backgroundImage = [
				'attribute' => 'background_image',
				'path'      => 'app/logo',
				'default'   => null,
				'width'     => (int)config('larapen.core.picture.otherTypes.bgHeader.width', 2000),
				'height'    => (int)config('larapen.core.picture.otherTypes.bgHeader.height', 1000),
				'ratio'     => config('larapen.core.picture.otherTypes.bgHeader.ratio', '1'),
				'upsize'    => config('larapen.core.picture.otherTypes.bgHeader.upsize', '0'),
				'quality'   => 100,
				'filename'  => 'header-',
				'orientate' => true,
			];
			$value = self::upload($setting, $value, $backgroundImage);
		}
		
		return $value;
	}
	
	public static function getFields($diskName)
	{
		$fields = [
			[
				'name'  => 'enable_form_area_customization',
				'label' => trans('admin.Enable search form area customization'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.The options below require to enable the search form area customization'),
			],
			[
				'name'  => 'separator_1',
				'type'  => 'custom_html',
				'value' => trans('admin.getSearchForm_html_background'),
			],
			[
				'name'                => 'background_color',
				'label'               => trans('admin.Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#444',
				],
				'hint'                => trans('admin.Enter a RGB color code'),
			],
			[
				'name'   => 'background_image',
				'label'  => trans('admin.Background Image'),
				'type'   => 'image',
				'upload' => true,
				'disk'   => $diskName,
				'hint'   => trans('admin.getSearchForm_background_image_hint'),
			],
			[
				'name'              => 'height',
				'label'             => trans('admin.Height'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '450px',
					'min'         => 45,
					'max'         => 2000,
					'step'        => 1,
				],
				'hint'              => trans('admin.Enter a value greater than 50px - Example 400px'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'parallax',
				'label'             => trans('admin.Enable Parallax Effect'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
					
				],
			],
			[
				'name'  => 'separator_2',
				'type'  => 'custom_html',
				'value' => trans('admin.getSearchForm_html_search_form'),
			],
			[
				'name'  => 'hide_form',
				'label' => trans('admin.Hide the Form'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'                => 'form_border_color',
				'label'               => trans('admin.Form Border Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#7324bc',
				],
				'hint'                => trans('admin.Enter a RGB color code'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'form_border_width',
				'label'             => trans('admin.Form Border Width'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '5',
					'min'         => 0,
					'max'         => 10,
					'step'        => 1,
				],
				'hint'              => trans('admin.Enter a number with unit'),
				'wrapperAttributes' => [
					'class' => 'col-md-3',
				],
			],
			[
				'name'              => 'form_border_radius',
				'label'             => trans('admin.Form Border Radius'),
				'type'              => 'number',
				'attributes'        => [
					'placeholder' => '5',
					'min'         => 0,
					'max'         => 30,
					'step'        => 1,
				],
				'hint'              => trans('admin.Enter a number with unit'),
				'wrapperAttributes' => [
					'class' => 'col-md-3',
				],
			],
			[
				'name'                => 'form_btn_background_color',
				'label'               => trans('admin.Form Button Background Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#7324bc',
				],
				'hint'                => trans('admin.Enter a RGB color code'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'form_btn_text_color',
				'label'               => trans('admin.Form Button Text Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#FFF',
				],
				'hint'                => trans('admin.Enter a RGB color code'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_3',
				'type'  => 'custom_html',
				'value' => trans('admin.getSearchForm_html_titles'),
			],
			[
				'name'  => 'hide_titles',
				'label' => trans('admin.Hide Titles'),
				'type'  => 'checkbox_switch',
			],
			[
				'name'  => 'separator_3_1',
				'type'  => 'custom_html',
				'value' => trans('admin.getSearchForm_html_titles_content'),
			],
			[
				'name'  => 'separator_3_2',
				'type'  => 'custom_html',
				'value' => trans('admin.dynamic_variables_stats_hint'),
			],
		
		];
		
		$languages = Language::active()->get();
		if ($languages->count() > 0) {
			$titlesFields = [];
			foreach ($languages as $language) {
				$titlesFields[] = [
					'name'              => 'title_' . $language->abbr,
					'label'             => mb_ucfirst(trans('admin.title')) . ' (' . $language->name . ')',
					'attributes'        => [
						'placeholder' => t('homepage_title_text', [], 'global', $language->abbr),
					],
					'wrapperAttributes' => [
						'class' => 'col-md-6',
					],
				];
				$titlesFields[] = [
					'name'              => 'sub_title_' . $language->abbr,
					'label'             => trans('admin.Sub Title') . ' (' . $language->name . ')',
					'attributes'        => [
						'placeholder' => t('simple_fast_and_efficient', [], 'global', $language->abbr),
					],
					'wrapperAttributes' => [
						'class' => 'col-md-6',
					],
				];
			}
			
			$fields = array_merge($fields, $titlesFields);
		}
		
		$fields = array_merge($fields, [
			
			[
				'name'  => 'separator_3_3',
				'type'  => 'custom_html',
				'value' => trans('admin.getSearchForm_html_titles_color'),
			],
			[
				'name'                => 'big_title_color',
				'label'               => trans('admin.Big Title Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#FFF',
				],
				'hint'                => trans('admin.Enter a RGB color code'),
				'wrapperAttributes'   => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'                => 'sub_title_color',
				'label'               => trans('admin.Sub Title Color'),
				'type'                => 'color_picker',
				'colorpicker_options' => [
					'customClass' => 'custom-class',
				],
				'attributes'          => [
					'placeholder' => '#FFF',
				],
				'hint'                => trans('admin.Enter a RGB color code'),
				'wrapperAttributes'   => [
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
		]);
		
		return $fields;
	}
}

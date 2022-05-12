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

class SeoSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['robots_txt'] = getDefaultRobotsTxtContent();
			$value['robots_txt_sm_indexes'] = '1';
			$value['multi_countries_urls'] = config('larapen.core.multiCountriesUrls');
			$value['listing_hashed_id_enabled'] = '0';
			$value['listing_hashed_id_seo_redirection'] = '1';
			
		} else {
			
			if (!isset($value['robots_txt'])) {
				$value['robots_txt'] = getDefaultRobotsTxtContent();
			}
			if (!isset($value['robots_txt_sm_indexes'])) {
				$value['robots_txt_sm_indexes'] = '1';
			}
			if (!isset($value['multi_countries_urls'])) {
				$value['multi_countries_urls'] = config('larapen.core.multiCountriesUrls');
			}
			if (!isset($value['listing_hashed_id_enabled'])) {
				$value['listing_hashed_id_enabled'] = '0';
			}
			if (!isset($value['listing_hashed_id_seo_redirection'])) {
				$value['listing_hashed_id_seo_redirection'] = '1';
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
				'name'  => 'verification_tools_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.verification_tools_sep_value'),
			],
			[
				'name'              => 'google_site_verification',
				'label'             => trans('admin.google_site_verification_label'),
				'type'              => 'text',
				'hint'              => trans('admin.seo_site_verification_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'alexa_verify_id',
				'label'             => trans('admin.alexa_verify_id_label'),
				'type'              => 'text',
				'hint'              => trans('admin.seo_site_verification_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'msvalidate',
				'label'             => trans('admin.msvalidate_label'),
				'type'              => 'text',
				'hint'              => trans('admin.seo_site_verification_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'yandex_verification',
				'label'             => trans('admin.yandex_verification_label'),
				'type'              => 'text',
				'hint'              => trans('admin.seo_site_verification_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'twitter_username',
				'label'             => trans('admin.twitter_username_label'),
				'type'              => 'text',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'robots_txt_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.robots_txt_sep_value'),
			],
			[
				'name'         => 'robots_txt_info',
				'type'         => 'custom_html',
				'value'        => trans('admin.robots_txt_info_value', ['domain' => url('/')]),
				'disableTrans' => 'true',
			],
			[
				'name'       => 'robots_txt',
				'label'      => trans('admin.robots_txt_label'),
				'type'       => 'textarea',
				'attributes' => [
					'rows' => '5',
				],
				'hint'       => trans('admin.robots_txt_hint'),
			],
			[
				'name'              => 'robots_txt_sm_indexes',
				'label'             => trans('admin.robots_txt_sm_indexes_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.robots_txt_sm_indexes_hint', ['indexes' => getSitemapsIndexes(true)]),
				'wrapperAttributes' => [
					'class' => 'col-md-12',
				],
			],
			
			[
				'name'  => 'no_index',
				'type'  => 'custom_html',
				'value' => trans('admin.no_index_title'),
			],
			[
				'name'              => 'no_index_categories',
				'label'             => trans('admin.no_index_categories_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_categories_qs',
				'label'             => trans('admin.no_index_categories_qs_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_cities',
				'label'             => trans('admin.no_index_cities_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_cities_qs',
				'label'             => trans('admin.no_index_cities_qs_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_users',
				'label'             => trans('admin.no_index_users_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_users_username',
				'label'             => trans('admin.no_index_users_username_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_tags',
				'label'             => trans('admin.no_index_tags_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_companies',
				'label'             => trans('admin.no_index_companies_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_10',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'no_index_filters_orders',
				'label'             => trans('admin.no_index_filters_orders_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_no_result',
				'label'             => trans('admin.no_index_no_result_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'  => 'separator_clear_11',
				'type'  => 'custom_html',
				'value' => '<div style="clear: both;"></div>',
			],
			[
				'name'              => 'no_index_listing_report',
				'label'             => trans('admin.no_index_listing_report_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'no_index_all',
				'label'             => trans('admin.no_index_all_label'),
				'type'              => 'checkbox_switch',
				'wrapperAttributes' => [
					'class' => 'col-12',
				],
			],
			
			[
				'name'  => 'seo_permalink_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.seo_permalink_title'),
			],
			[
				'name'  => 'seo_permalink_warning_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.seo_permalink_warning'),
			],
			[
				'name'              => 'listing_permalink',
				'label'             => trans('admin.listing_permalink_label'),
				'type'              => 'select2_from_array',
				'options'           => self::getPermalinks('post'),
				'hint'              => trans('admin.listing_permalink_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'listing_permalink_ext',
				'label'             => trans('admin.permalink_ext_label'),
				'type'              => 'select2_from_array',
				'options'           => self::getPermalinkExt(),
				'hint'              => trans('admin.permalink_ext_hint') . '<br>' . trans('admin.listing_permalink_ext_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'listing_hashed_id_enabled',
				'label'             => trans('admin.listing_hashed_id_enabled_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.listing_hashed_id_enabled_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			[
				'name'              => 'listing_hashed_id_seo_redirection',
				'label'             => trans('admin.listing_hashed_id_seo_redirection_label'),
				'type'              => 'checkbox_switch',
				'hint'              => trans('admin.listing_hashed_id_seo_redirection_hint'),
				'wrapperAttributes' => [
					'class' => 'col-md-6',
				],
			],
			
			[
				'name'  => 'separator_4',
				'type'  => 'custom_html',
				'value' => trans('admin.seo_html_multi_countries_urls'),
			],
			[
				'name'  => 'separator_4_1',
				'type'  => 'custom_html',
				'value' => trans('admin.multi_countries_urls_optimization_warning'),
			],
			[
				'name'  => 'multi_countries_urls',
				'label' => trans('admin.Enable The Multi-countries URLs Optimization'),
				'type'  => 'checkbox_switch',
				'hint'  => trans('admin.multi_countries_urls_optimization_hint'),
			],
			[
				'name'  => 'separator_4_2',
				'type'  => 'custom_html',
				'value' => trans('admin.multi_countries_urls_optimization_info'),
			],
		];
		
		return $fields;
	}
	
	/**
	 * @param string $key
	 * @return array
	 */
	private static function getPermalinks(string $key)
	{
		$permalinks = config('larapen.core.permalink.' . $key);
		$permalinks = collect($permalinks)->mapWithKeys(function ($value, $key) {
			return [$value => $value];
		})->toArray();
		
		return $permalinks;
	}
	
	/**
	 * @return array
	 */
	private static function getPermalinkExt()
	{
		$permalinks = config('larapen.core.permalinkExt');
		$permalinks = collect($permalinks)->mapWithKeys(function ($value, $key) {
			return [$value => (!empty($value)) ? $value : '&nbsp;'];
		})->toArray();
		
		return $permalinks;
	}
}

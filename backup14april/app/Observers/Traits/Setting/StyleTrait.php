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

use App\Helpers\Files\Storage\StorageDisk;
use App\Models\Category;
use Illuminate\Support\Str;

trait StyleTrait
{
	/**
	 * Updating
	 *
	 * @param $setting
	 * @param $original
	 * @return mixed
	 */
	public function styleUpdating($setting, $original)
	{
		// Storage Disk Init.
		$disk = StorageDisk::getDisk();
		
		$this->removeOldBodyBackgroundImage($setting, $original, $disk);
		
		return $this->applyLogoMaxDimensionsLimit($setting, $original);
	}
	
	/**
	 * Saved
	 *
	 * @param $setting
	 */
	public function styleSaved($setting)
	{
		$this->updateCategoriesPicturesPaths($setting);
	}
	
	/**
	 * Remove old body_background_image from disk
	 *
	 * @param $setting
	 * @param $original
	 * @param $disk
	 */
	private function removeOldBodyBackgroundImage($setting, $original, $disk)
	{
		if (array_key_exists('body_background_image', $setting->value)) {
			if (
				is_array($original['value'])
				&& isset($original['value']['body_background_image'])
				&& $setting->value['body_background_image'] != $original['value']['body_background_image']
				&& $disk->exists($original['value']['body_background_image'])
			) {
				$disk->delete($original['value']['body_background_image']);
			}
		}
	}
	
	/**
	 * Apply the logo's maximum dimensions limit
	 *
	 * @param $setting
	 * @param $original
	 * @return mixed
	 */
	private function applyLogoMaxDimensionsLimit($setting, $original)
	{
		if (!isset($setting->value)) {
			return $setting;
		}
		
		$value = $setting->value;
		
		// Logo Max. Dimensions
		$logoMaxWidth = config('larapen.core.logoSize.max.width', 430);
		$logoMaxHeight = config('larapen.core.logoSize.max.height', 80);
		if (!empty(config('settings.style.header_height'))) {
			$logoMaxHeight = strToDigit(config('settings.style.header_height'));
			if (empty($logoMaxHeight)) {
				$logoMaxHeight = 80;
			}
		}
		
		// Logo Default Dimensions
		$logoDefaultWidth = config('larapen.core.logoSize.default.width', 216);
		$logoDefaultHeight = config('larapen.core.logoSize.default.height', 40);
		
		// Logo Dimensions
		$logoWidth = strToDigit($value['logo_width'] ?? $logoDefaultWidth);
		$logoHeight = strToDigit($value['logo_height'] ?? $logoDefaultHeight);
		if (empty($logoWidth)) {
			$logoWidth = $logoDefaultWidth;
		}
		if (empty($logoHeight)) {
			$logoHeight = $logoDefaultHeight;
		}
		if ($logoWidth > $logoMaxWidth) {
			$logoWidth = $logoMaxWidth;
		}
		if ($logoHeight > $logoMaxHeight) {
			$logoHeight = $logoMaxHeight;
		}
		
		$value['logo_width'] = $logoWidth;
		$value['logo_height'] = $logoHeight;
		
		$setting->value = $value;
		
		return $setting;
	}
	
	/**
	 * @param $setting
	 */
	private function updateCategoriesPicturesPaths($setting)
	{
		// If the Default Front Skin is changed, then update its assets paths (like categories pictures, etc.)
		if (isset($setting->value['skin']) && !empty($setting->value['skin'])) {
			$categories = Category::where(function ($query) {
				$query->where('parent_id', 0)->orWhereNull('parent_id');
			})->get();
			if ($categories->count() > 0) {
				foreach ($categories as $category) {
					$canSave = false;
					
					// If the Category contains a skinnable icon,
					// Change it by the selected skin icon.
					if (Str::contains($category->picture, 'app/categories/') && !Str::contains($category->picture, '/custom/')) {
						$pattern = '/app\/categories\/[^\/]+\//ui';
						$replacement = 'app/categories/' . $setting->value['skin'] . '/';
						$picture = preg_replace($pattern, $replacement, $category->picture);
						if (!empty($picture)) {
							$category->picture = $picture;
							$canSave = true;
						}
					}
					
					// (Optional)
					// If the Category contains a skinnable default icon,
					// Change it by the selected skin default icon.
					if (Str::contains($category->picture, 'app/default/categories/fa-folder-')) {
						$pattern = '/app\/default\/categories\/fa-folder-[^\.]+\./ui';
						$replacement = 'app/default/categories/fa-folder-' . $setting->value['skin'] . '.';
						$picture = preg_replace($pattern, $replacement, $category->picture);
						if (!empty($picture)) {
							$category->picture = $picture;
							$canSave = true;
						}
					}
					
					if ($canSave) {
						$category->save();
					}
				}
			}
		}
	}
}

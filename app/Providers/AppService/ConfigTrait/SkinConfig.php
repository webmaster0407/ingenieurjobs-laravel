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

trait SkinConfig
{
	/**
	 * @param string $settings
	 */
	private function updateSkinConfig($settings = 'settings')
	{
		$data = [];
		
		// Get Pre-Defined Skins By Color
		$skinsByColor = collect(config('larapen.core.skins'))->mapWithKeys(function ($item, $key) {
			return [$key => $item['color']];
		})->toArray();
		
		// Update The Custom Skin Color
		if (is_array($skinsByColor)) {
			$skinsByColor['custom'] = config('settings.style.custom_skin_color');
		}
		
		// Get Selected Skin
		$selectedSkin = getFrontSkin(request()->input('skin'));
		
		// Generate CSS Colors From The Selected Skin Color
		$primaryBgColor = null;
		if (isset($skinsByColor[$selectedSkin]) && !empty($skinsByColor[$selectedSkin])) {
			// Primary Color
			$primaryBgColor = $skinsByColor[$selectedSkin];
			$primaryColor = getContrastColor($primaryBgColor);
			// ---
			$primaryBgColor10 = colourBrightness($primaryBgColor, 0.1); // button:hover
			$primaryBgColor50 = colourBrightness($primaryBgColor, 0.5); // button:focus
			$primaryBgColor80 = colourBrightness($primaryBgColor, 0.8); // svg-map:bg
			
			// Header (Optional)
			$primaryBgColor5d = colourBrightness($primaryBgColor, -0.05);
			$primaryColor5d = getContrastColor($primaryBgColor5d);
			
			// Primary Link Color
			$primaryBgColor10d = colourBrightness($primaryBgColor, -0.1); // a
			$primaryBgColor20d = colourBrightness($primaryBgColor, -0.2); // a:hover | .btn-gradient
			
			// Primary Dark Color
			$primaryDarkBgColor = colourBrightness($primaryBgColor, -0.5);
			$primaryDarkColor = getContrastColor($primaryDarkBgColor);
			// ---
			$primaryDarkBgColor10 = colourBrightness($primaryDarkBgColor, 0.1); // button:hover
			$primaryDarkBgColor50 = colourBrightness($primaryDarkBgColor, 0.5); // button:focus
			
			// Data To Share!
			$data['selectedSkin'] = $selectedSkin;
			
			$data['primaryBgColor'] = $primaryBgColor;
			$data['primaryColor'] = $primaryColor;
			$data['primaryBgColor10'] = $primaryBgColor10;
			$data['primaryBgColor50'] = $primaryBgColor50;
			$data['primaryBgColor80'] = $primaryBgColor80;
			
			$data['primaryBgColor5d'] = $primaryBgColor5d;
			$data['primaryColor5d'] = $primaryColor5d;
			
			$data['primaryBgColor10d'] = $primaryBgColor10d;
			$data['primaryBgColor20d'] = $primaryBgColor20d;
			
			$data['primaryDarkBgColor'] = $primaryDarkBgColor;
			$data['primaryDarkColor'] = $primaryDarkColor;
			$data['primaryDarkBgColor10'] = $primaryDarkBgColor10;
			$data['primaryDarkBgColor50'] = $primaryDarkBgColor50;
		}
		
		view()->share($data);
	}
}

<style>
/* === Homepage: Search Form Area === */
@if (isset($searchFormOptions['height']) && !empty($searchFormOptions['height']))
	<?php $searchFormOptions['height'] = strToDigit($searchFormOptions['height']) . 'px'; ?>
	#homepage .intro:not(.only-search-bar) {
		height: {{ $searchFormOptions['height'] }};
		max-height: {{ $searchFormOptions['height'] }};
	}
@endif
@if (isset($searchFormOptions['background_color']) && !empty($searchFormOptions['background_color']))
	#homepage .intro:not(.only-search-bar) {
		background: {{ $searchFormOptions['background_color'] }};
	}
@endif
<?php $bgImgFound = false; ?>
@if (!empty(config('country.background_image')))
	@if (isset($disk) && $disk->exists(config('country.background_image')))
		#homepage .intro:not(.only-search-bar) {
			background-image: url({{ imgUrl(config('country.background_image'), 'bgHeader') }});
			background-size: cover;
		}
		<?php $bgImgFound = true; ?>
	@endif
@endif
@if (!$bgImgFound)
	@if (isset($searchFormOptions['background_image']) && !empty($searchFormOptions['background_image']))
		#homepage .intro:not(.only-search-bar) {
			background-image: url({{ imgUrl($searchFormOptions['background_image'], 'bgHeader') }});
			background-size: cover;
		}
	@endif
@endif
@if (isset($searchFormOptions['big_title_color']) && !empty($searchFormOptions['big_title_color']))
	#homepage .intro:not(.only-search-bar) h1 {
		color: {{ $searchFormOptions['big_title_color'] }};
	}
@endif
@if (isset($searchFormOptions['sub_title_color']) && !empty($searchFormOptions['sub_title_color']))
	#homepage .intro:not(.only-search-bar) p {
		color: {{ $searchFormOptions['sub_title_color'] }};
	}
@endif
@if (isset($searchFormOptions['form_border_width']) && !empty($searchFormOptions['form_border_width']))
	<?php $searchFormOptions['form_border_width'] = strToDigit($searchFormOptions['form_border_width']) . 'px'; ?>
	#homepage .search-row .search-col:first-child .search-col-inner,
	#homepage .search-row .search-col .search-col-inner,
	#homepage .search-row .search-col .search-btn-border {
		border-width: {{ $searchFormOptions['form_border_width'] }};
	}
	
	@media (max-width: 767px) {
		.search-row .search-col:first-child .search-col-inner,
		.search-row .search-col .search-col-inner,
		.search-row .search-col .search-btn-border {
			border-width: {{ $searchFormOptions['form_border_width'] }};
		}
	}
@endif
<?php
if (isset($searchFormOptions['form_border_radius']) && !empty($searchFormOptions['form_border_radius'])) {
	$formBorderRadius = strToDigit($searchFormOptions['form_border_radius']);
	
	// Based on default radius
	$fieldsBorderRadius = (int)round((($formBorderRadius * 18) / 24));
	
	// Based on the default radius & default border width
	if (isset($searchFormOptions['form_border_width']) && !empty($searchFormOptions['form_border_width'])) {
		$formBorderWidth = strToDigit($searchFormOptions['form_border_width']);
		
		// Get the difference between the default wrapper & the fields radius, based on the default border width
		$borderRadiusDiff = (24 - 18) / 5;
		
		// Apply the diff. obtained above to the customized wrapper radius to get the fields radius
		$fieldsBorderRadius = (int)round(($formBorderRadius - $borderRadiusDiff));
	}
} else {
	$formBorderRadius = 24;
	$fieldsBorderRadius = 24;
}

$formBorderRadiusOut = _getFormBorderRadiusCSS($formBorderRadius, $fieldsBorderRadius);
?>

{!! $formBorderRadiusOut !!}

@if (isset($searchFormOptions['form_border_color']) && !empty($searchFormOptions['form_border_color']))
	#homepage .search-row .search-col:first-child .search-col-inner,
	#homepage .search-row .search-col .search-col-inner,
	#homepage .search-row .search-col .search-btn-border {
		border-color: {{ $searchFormOptions['form_border_color'] }};
	}
	
	@media (max-width: 767px) {
		#homepage .search-row .search-col:first-child .search-col-inner,
		#homepage .search-row .search-col .search-col-inner,
		#homepage .search-row .search-col .search-btn-border {
			border-color: {{ $searchFormOptions['form_border_color'] }};
		}
	}
@endif
@if (isset($searchFormOptions['form_btn_background_color']) && !empty($searchFormOptions['form_btn_background_color']))
	.skin #homepage button.btn-search {
		background-color: {{ $searchFormOptions['form_btn_background_color'] }};
		border-color: {{ $searchFormOptions['form_btn_background_color'] }};
	}
@endif
@if (isset($searchFormOptions['form_btn_text_color']) && !empty($searchFormOptions['form_btn_text_color']))
	.skin #homepage button.btn-search {
		color: {{ $searchFormOptions['form_btn_text_color'] }};
	}
@endif
@if (!empty(config('settings.style.page_width')))
	<?php $pageWidth = strToDigit(config('settings.style.page_width')) . 'px'; ?>
	@media (min-width: 1200px) {
		#homepage .intro.only-search-bar .container {
			max-width: {{ $pageWidth }};
		}
	}
@endif

/* === Homepage: Locations & Country Map === */
@if (isset($citiesOptions['background_color']) && !empty($citiesOptions['background_color']))
	#homepage .inner-box {
		background: {{ $citiesOptions['background_color'] }};
	}
@endif
@if (isset($citiesOptions['border_width']) && !empty($citiesOptions['border_width']))
	<?php $citiesOptions['border_width'] = strToDigit($citiesOptions['border_width']) . 'px'; ?>
	#homepage .inner-box {
		border-width: {{ $citiesOptions['border_width'] }};
	}
@endif
@if (isset($citiesOptions['border_color']) && !empty($citiesOptions['border_color']))
	#homepage .inner-box {
		border-color: {{ $citiesOptions['border_color'] }};
	}
@endif
@if (isset($citiesOptions['text_color']) && !empty($citiesOptions['text_color']))
	#homepage .inner-box,
	#homepage .inner-box p,
	#homepage .inner-box h1,
	#homepage .inner-box h2,
	#homepage .inner-box h3,
	#homepage .inner-box h4,
	#homepage .inner-box h5 {
		color: {{ $citiesOptions['text_color'] }};
	}
@endif
@if (isset($citiesOptions['link_color']) && !empty($citiesOptions['link_color']))
	#homepage .inner-box a {
		color: {{ $citiesOptions['link_color'] }};
	}
@endif
@if (isset($citiesOptions['link_color_hover']) && !empty($citiesOptions['link_color_hover']))
	#homepage .inner-box a:hover,
	#homepage .inner-box a:focus {
		color: {{ $citiesOptions['link_color_hover'] }};
	}
@endif
</style>

<?php
// Get Form Border Radius CSS
function _getFormBorderRadiusCSS($formBorderRadius, $fieldsBorderRadius)
{
	$searchFormOptions['form_border_radius'] = $formBorderRadius . 'px';
	$searchFormOptions['fields_border_radius'] = $fieldsBorderRadius . 'px';
	
	$out = '';
	$out .= "\n";
	if (config('lang.direction') == 'rtl') {
		$out .= '#homepage .search-row .search-col:first-child .search-col-inner {' . "\n";
		$out .= 'border-top-right-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-right-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
		$out .= '#homepage .search-row .search-col:first-child .form-control {' . "\n";
		$out .= 'border-top-right-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-right-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
		$out .= '#homepage .search-row .search-col .search-btn-border {' . "\n";
		$out .= 'border-top-left-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-left-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
		$out .= '#homepage .search-row .search-col .btn {' . "\n";
		$out .= 'border-top-left-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-left-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
	} else {
		$out .= '#homepage .search-row .search-col:first-child .search-col-inner {' . "\n";
		$out .= 'border-top-left-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-left-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
		$out .= '#homepage .search-row .search-col:first-child .form-control {' . "\n";
		$out .= 'border-top-left-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-left-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
		$out .= '#homepage .search-row .search-col .search-btn-border {' . "\n";
		$out .= 'border-top-right-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-right-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
		$out .= '#homepage .search-row .search-col .btn {' . "\n";
		$out .= 'border-top-right-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= 'border-bottom-right-radius: ' . $searchFormOptions['fields_border_radius'] . ' !important;' . "\n";
		$out .= '}' . "\n";
	}
	
	$out .= '@media (max-width: 767px) {' . "\n";
	$out .= '#homepage .search-row .search-col:first-child .form-control,' . "\n";
	$out .= '#homepage .search-row .search-col:first-child .search-col-inner,' . "\n";
	$out .= '#homepage .search-row .search-col .form-control,' . "\n";
	$out .= '#homepage .search-row .search-col .search-col-inner,' . "\n";
	$out .= '#homepage .search-row .search-col .btn,' . "\n";
	$out .= '#homepage .search-row .search-col .search-btn-border {' . "\n";
	$out .= 'border-radius: ' . $searchFormOptions['form_border_radius'] . ' !important;' . "\n";
	$out .= '}' . "\n";
	$out .= '}' . "\n";
	
	return $out;
}
?>
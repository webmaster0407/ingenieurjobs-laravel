<?php
// Default Map's values
$map = [
    'show' 				=> false,
    'backgroundColor' 	=> 'transparent',
    'border' 			=> '#7324bc',
    'hoverBorder' 		=> '#7324bc',
    'borderWidth' 		=> 4,
    'color' 			=> '#e3d7ef',
    'hover' 			=> '#7324bc',
    'width' 			=> '300px',
    'height' 			=> '300px',
];

// Selected Skin Values
if (isset($primaryBgColor, $primaryBgColor80) && !empty($primaryBgColor)) {
	$map['border'] = $primaryBgColor;
	$map['hoverBorder'] = $primaryBgColor;
	$map['color'] = $primaryBgColor80;
	$map['hover'] = $primaryBgColor;
}

// Get Admin Map's values
if (isset($citiesOptions)) {
    if (file_exists(config('larapen.core.maps.path') . config('country.icode') . '.svg')) {
        if (isset($citiesOptions['show_map']) and $citiesOptions['show_map'] == '1') {
            $map['show'] = true;
        }
    }
    if (isset($citiesOptions['map_background_color']) and !empty($citiesOptions['map_background_color'])) {
        $map['backgroundColor'] = $citiesOptions['map_background_color'];
    }
    if (isset($citiesOptions['map_border']) and !empty($citiesOptions['map_border'])) {
        $map['border'] = $citiesOptions['map_border'];
    }
    if (isset($citiesOptions['map_hover_border']) and !empty($citiesOptions['map_hover_border'])) {
        $map['hoverBorder'] = $citiesOptions['map_hover_border'];
    }
    if (isset($citiesOptions['map_border_width']) and !empty($citiesOptions['map_border_width'])) {
        $map['borderWidth'] = strToDigit($citiesOptions['map_border_width']);
    }
    if (isset($citiesOptions['map_color']) and !empty($citiesOptions['map_color'])) {
        $map['color'] = $citiesOptions['map_color'];
    }
    if (isset($citiesOptions['map_hover']) and !empty($citiesOptions['map_hover'])) {
        $map['hover'] = $citiesOptions['map_hover'];
    }
    if (isset($citiesOptions['map_width']) and !empty($citiesOptions['map_width'])) {
        $map['width'] = strToDigit($citiesOptions['map_width']) . 'px';
    }
    if (isset($citiesOptions['map_height']) and !empty($citiesOptions['map_height'])) {
        $map['height'] = strToDigit($citiesOptions['map_height']) . 'px';
    }
}
?>

@if ($map['show'])
	@if (!$loc['show'])
		<div class="row">
			<div class="col-xl-12 col-md-12 col-sm-12">
				<h2 class="title-3 pt-1 pe-3 pb-3 ps-3" style="white-space: nowrap;">
					<i class="fas fa-map-marker-alt"></i>&nbsp;{{ t('Choose a state or region') }}
				</h2>
			</div>
		</div>
	@endif
	<div class="{{ $rightClassCol }} text-center">
		<div id="countryMap" class="page-sidebar col-thin-left no-padding" style="margin: auto;">&nbsp;</div>
	</div>
@endif

@section('after_scripts')
	@parent
	<script src="{{ url('assets/plugins/twism/jquery.twism.js') }}"></script>
	<script>
		$(document).ready(function () {
			@if ($map['show'])
				$('#countryMap').css('cursor', 'pointer');
				$('#countryMap').twism("create",
				{
					map: "custom",
					customMap: '{{ config('larapen.core.maps.urlBase') . config('country.icode') . '.svg' }}',
					backgroundColor: '{{ $map['backgroundColor'] }}',
					border: '{{ $map['border'] }}',
					hoverBorder: '{{ $map['hoverBorder'] }}',
					borderWidth: {{ $map['borderWidth'] }},
					color: '{{ $map['color'] }}',
					width: '{{ $map['width'] }}',
					height: '{{ $map['height'] }}',
					click: function(region) {
						if (!isDefined(region) || !isString(region) || isBlankString(region)) {
							return false;
						}
						region = rawurlencode(region);
						var searchPage = '{{ \App\Helpers\UrlGen::search([], ['d', 'r']) }}';
						var queryStringSeparator = searchPage.indexOf('?') !== -1 ? '&' : '?';
						@if (config('settings.seo.multi_countries_urls'))
							searchPage = searchPage + queryStringSeparator + 'd={{ config('country.code') }}&r=' + region;
						@else
							searchPage = searchPage + queryStringSeparator + 'r=' + region;
						@endif
						redirect(searchPage);
					},
					hover: function(regionId) {
						if (isDefined(regionId)) {
							let selectedIdObj = document.getElementById(regionId);
							if (isDefined(selectedIdObj)) {
								selectedIdObj.style.fill = '{{ $map['hover'] }}';
							}
						}
					},
					unhover: function(regionId) {
						if (isDefined(regionId)) {
							let selectedIdObj = document.getElementById(regionId);
							if (isDefined(selectedIdObj)) {
								selectedIdObj.style.fill = '{{ $map['color'] }}';
							}
						}
					}
				});
			@endif
		});
	</script>
@endsection
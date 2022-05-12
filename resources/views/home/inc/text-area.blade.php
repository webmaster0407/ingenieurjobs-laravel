<?php
if (isset($textOptions)) {
	// Fallback Language
	if (isset($textOptions['title_' . config('appLang.abbr')]) && !empty($textOptions['title_' . config('appLang.abbr')])) {
		$textOptions['title'] = $textOptions['title_' . config('appLang.abbr')];
		$textOptions['title'] = replaceGlobalPatterns($textOptions['title']);
	}
	if (isset($textOptions['body_' . config('appLang.abbr')]) && !empty($textOptions['body_' . config('appLang.abbr')])) {
		$textOptions['body'] = $textOptions['body_' . config('appLang.abbr')];
		$textOptions['body'] = replaceGlobalPatterns($textOptions['body']);
	}
	
	// Current Language
	if (isset($textOptions['title_' . config('app.locale')]) && !empty($textOptions['title_' . config('app.locale')])) {
		$textOptions['title'] = $textOptions['title_' . config('app.locale')];
		$textOptions['title'] = replaceGlobalPatterns($textOptions['title']);
	}
	if (isset($textOptions['body_' . config('app.locale')]) && !empty($textOptions['body_' . config('app.locale')])) {
		$textOptions['body'] = $textOptions['body_' . config('app.locale')];
		$textOptions['body'] = replaceGlobalPatterns($textOptions['body']);
	}
}

$hideOnMobile = '';
if (isset($textOptions, $textOptions['hide_on_mobile']) && $textOptions['hide_on_mobile'] == '1') {
	$hideOnMobile = ' hidden-sm';
}
?>
@if (isset($textOptions, $textOptions['body']) && !empty($textOptions['body']))
	@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'], ['hideOnMobile' => $hideOnMobile])
	<div class="container{{ $hideOnMobile }}">
		<div class="card">
			<div class="card-body">
				@if (isset($textOptions['title']) && !empty($textOptions['title']))
					<h2 class="card-title">{{ $textOptions['title'] }}</h2>
				@endif
				<div>{!! $textOptions['body'] !!}</div>
			</div>
		</div>
	</div>
@endif
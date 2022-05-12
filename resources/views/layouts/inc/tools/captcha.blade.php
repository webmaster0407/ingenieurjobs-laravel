@if (!empty(config('settings.security.captcha')))
	<?php
	$params = [];
	if (isset($label) && $label) {
		$params['label'] = $label;
	}
	if (isset($noLabel) && $noLabel) {
		$params['noLabel'] = $noLabel;
	}
	if (isset($colLeft) && !empty($colLeft)) {
		$params['colLeft'] = $colLeft;
	}
	if (isset($colRight) && !empty($colRight)) {
		$params['colRight'] = $colRight;
	}
	?>
	@if (config('settings.security.captcha') == 'recaptcha')
		@if (config('recaptcha.site_key') && config('recaptcha.secret_key'))
			@include('layouts.inc.tools.captcha.recaptcha', $params)
		@endif
	@else
		@include('layouts.inc.tools.captcha.captcha', $params)
	@endif
@endif
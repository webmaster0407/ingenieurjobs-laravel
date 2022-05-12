@if (
		config('settings.security.captcha') == 'recaptcha'
		&& config('recaptcha.site_key')
		&& config('recaptcha.secret_key')
	)
	@if (config('recaptcha.version') == 'v2')
		{{-- recaptcha --}}
		@if (isAdminPanel())
			
			<?php $recaptchaError = (isset($errors) && $errors->has('g-recaptcha-response')) ? ' is-invalid' : ''; ?>
			<div class="form-group mb-3 required{{ $recaptchaError }}">
				<div class="no-label">
					{!! recaptchaHtmlFormSnippet() !!}
				</div>
				
				@if ($errors->has('g-recaptcha-response'))
					<div class="invalid-feedback{{ $recaptchaError }}">
						{{ $errors->first('g-recaptcha-response') }}
					</div>
				@endif
			</div>
			
		@else
			
			<?php $recaptchaError = (isset($errors) && $errors->has('g-recaptcha-response')) ? ' is-invalid' : ''; ?>
			@if (isset($colLeft) && isset($colRight))
				<div class="row mb-3 required{{ $recaptchaError }}">
					<label class="{{ $colLeft }} col-form-label" for="g-recaptcha-response">
						@if (isset($label) && $label == true)
							{{ t('captcha_label') }}
						@endif
					</label>
					<div class="{{ $colRight }}">
						{!! recaptchaHtmlFormSnippet() !!}
					</div>
				</div>
			@else
				@if (isset($label) && $label == true)
					<div class="row mb-3 required{{ $recaptchaError }}">
						<label class="control-label" for="g-recaptcha-response">{{ t('captcha_label') }}</label>
						<div>
							{!! recaptchaHtmlFormSnippet() !!}
						</div>
					</div>
				@elseif (isset($noLabel) && $noLabel == true)
					<div class="row mb-3 required{{ $recaptchaError }}">
						<div class="no-label">
							{!! recaptchaHtmlFormSnippet() !!}
						</div>
					</div>
				@else
					<div class="row mb-3 required{{ $recaptchaError }}">
						<div>
							{!! recaptchaHtmlFormSnippet() !!}
						</div>
					</div>
				@endif
			@endif
			
		@endif
		
	@else
		<input type="hidden" name="g-recaptcha-response" id="gRecaptchaResponse">
	@endif
@endif

@section('recaptcha_head')
	@if (
		config('settings.security.captcha') == 'recaptcha'
		&& config('recaptcha.site_key')
		&& config('recaptcha.secret_key')
	)
		<style>
			.is-invalid .g-recaptcha iframe,
			.has-error .g-recaptcha iframe {
				border: 1px solid #f85359;
			}
		</style>
		@if (config('recaptcha.version') == 'v3')
			<script type="text/javascript">
				function myCustomValidation(token){
					/* read HTTP status */
					/* console.log(token); */
					
					if ($('#gRecaptchaResponse').length) {
						$('#gRecaptchaResponse').val(token);
					}
				}
			</script>
			{!! recaptchaApiV3JsScriptTag([
				'action' 		    => request()->path(),
				'custom_validation' => 'myCustomValidation'
			]) !!}
		@else
			{!! recaptchaApiJsScriptTag() !!}
		@endif
	@endif
@endsection
<?php
	$label = isset($label) ? $label : (Lang::has('messages.'.$name) ? trans('messages.'.$name) : '');
	$var_name = str_replace('[]', '', $name);
	$var_name = str_replace('][', '.', $var_name);
	$var_name = str_replace('[', '.', $var_name);
	$var_name = str_replace(']', '', $var_name);
	$classes = (isset($rules) && isset($rules[$var_name])) ? ' '.str_replace('|', ' ', $rules[$var_name]) : '';
	$classes = str_replace(['required', 'email'], '', $classes);
	$required = (isset($rules) && isset($rules[$var_name]) && in_array('required', explode('|', $rules[$var_name]))) ? true : '';
	$varNameError = (isset($errors) && $errors->has($var_name)) ? ' is-invalid' : '';
?>

@if ($type == 'checkbox')
	
	@include('install.helpers._' . $type, ['varNameError' => $varNameError])
	
@else
	<div class="mb-3{{ (!empty($prefix) || !empty($subfix)) ? ' input-group' : '' }}">
		@if (!empty($label))
			<label class="form-label">
				{!! $label !!}
				@if ($required)
					<span class="text-danger">*</span>
				@endif
			</label>
		@endif
		
		@if ($type == 'textarea')
			@if ($errors->has($var_name))
				<span class="invalid-feedback">
					<strong>{{ $errors->first($var_name) }}</strong>
				</span>
			@endif
		@endif
		
		@if (!empty($prefix))
			<span class="input-group-text">
				{!! $prefix !!}
			</span>
		@endif
		
		@include('install.helpers._' . $type, ['varNameError' => $varNameError])
		
		@if (!empty($subfix))
			<span class="input-group-text">
				{!! $subfix !!}
			</span>
		@endif
		
		@if (isset($hint) && !empty($hint))
			<div class="form-text">
				{!! $hint !!}
			</div>
		@endif
		
		@if ($type != 'textarea')
			@if ($errors->has($var_name))
				<span class="invalid-feedback">
					<strong>{{ $errors->first($var_name) }}</strong>
				</span>
			@endif
		@endif
	</div>
@endif
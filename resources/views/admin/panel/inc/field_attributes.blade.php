<?php
$var_name = str_replace('[]', '', $field['name']);
$var_name = str_replace('][', '.', $var_name);
$var_name = str_replace('[', '.', $var_name);
$var_name = str_replace(']', '', $var_name);
$required = (isset($field['rules']) && isset($field['rules'][$var_name]) && in_array('required', explode('|', $field['rules'][$var_name]))) ? true : '';
?>
@if (isset($field['attributes']))
    @foreach ($field['attributes'] as $attribute => $value)
    	@if (is_string($attribute))
			@if ($attribute == 'class')
        		{{ $attribute }}="{{ $value }}{{ $errors->has($var_name) ? ' is-invalid' : '' }}"
			@else
				{{ $attribute }}="{{ $value }}"
			@endif
        @endif
    @endforeach

    @if (!isset($field['attributes']['class']))
    	@if (isset($default_class))
    		class="{{ $default_class }}{{ $errors->has($var_name) ? ' is-invalid' : '' }}"
    	@else
    		class="form-control{{ $errors->has($var_name) ? ' is-invalid' : '' }}"
    	@endif
    @endif
@else
	@if (isset($default_class))
		class="{{ $default_class }}{{ $errors->has($var_name) ? ' is-invalid' : '' }}"
	@else
		class="form-control{{ $errors->has($var_name) ? ' is-invalid' : '' }}"
	@endif
@endif
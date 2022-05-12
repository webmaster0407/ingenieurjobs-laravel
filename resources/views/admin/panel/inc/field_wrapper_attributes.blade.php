<?php
$var_name = str_replace('[]', '', $field['name']);
$var_name = str_replace('][', '.', $var_name);
$var_name = str_replace('[', '.', $var_name);
$var_name = str_replace(']', '', $var_name);
$required = (isset($field['rules']) && isset($field['rules'][$var_name]) && in_array('required', explode('|', $field['rules'][$var_name]))) ? true : '';
?>
@if (isset($field['wrapperAttributes']))
    @foreach ($field['wrapperAttributes'] as $attribute => $value)
    	@if (is_string($attribute))
			@if ($attribute == 'class')
				@if (isset($field['type']) && $field['type'] == 'image')
					{{ $attribute }}="mb-3 {{ $value }} image"
				@else
        			{{ $attribute }}="mb-3 {{ $value }}"
				@endif
			@else
				{{ $attribute }}="{{ $value }}"
			@endif
        @endif
    @endforeach

    @if (!isset($field['wrapperAttributes']['class']))
		@if (isset($field['type']) && $field['type'] == 'image')
			class="mb-3 col-md-12 image"
		@else
			class="mb-3 col-md-12"
		@endif
    @endif
@else
	@if (isset($field['type']) && $field['type'] == 'image')
		class="mb-3 col-md-12 image"
	@else
		class="mb-3 col-md-12"
	@endif
@endif
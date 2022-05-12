{{-- select --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
	@include('admin.panel.fields.inc.translatable_icon')
    <select
        name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes', ['default_class' =>  'form-select'])
    	>

        @if (isset($field['allows_null']) && $field['allows_null']==true)
            <option value="">-</option>
        @endif

		@if (isset($field['options']) && !empty($field['options']))
			@foreach ($field['options'] as $key => $value)
				<option value="{{ $key }}"
					@if ((isset($field['value']) && $key==$field['value']) || ( ! is_null( old($field['name']) ) && old($field['name']) == $key) )
						 selected
					@endif
				>{{ $value }}</option>
			@endforeach
		@endif
	</select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif
</div>
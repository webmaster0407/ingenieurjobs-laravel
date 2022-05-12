{{-- enum --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
	@include('admin.panel.fields.inc.translatable_icon')
    <?php $entity_model = $xPanel->model; ?>
    <select
        name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes', ['default_class' =>  'form-select'])
    	>

        @if ($entity_model::isColumnNullable($field['name']))
            <option value="">-</option>
        @endif

		@if (count($entity_model::getPossibleEnumValues($field['name'])))
			@foreach ($entity_model::getPossibleEnumValues($field['name']) as $possible_value)
				<option value="{{ $possible_value }}"
					@if (( old($field['name']) &&  old($field['name']) == $possible_value) || (isset($field['value']) && $field['value']==$possible_value))
						 selected
					@endif
				>{{ $possible_value }}</option>
			@endforeach
		@endif
	</select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif
</div>
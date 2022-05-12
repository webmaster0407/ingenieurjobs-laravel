{{-- select --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >

    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
	@include('admin.panel.fields.inc.translatable_icon')

    <?php $entity_model = $xPanel->model; ?>
    <select
        name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes', ['default_class' =>  'form-select'])
    	>
	
		@if (!(isset($field['fake']) and $field['fake']))
			@if ($entity_model::isColumnNullable($field['name']))
				<option value="">-</option>
			@endif
		@else
			@if (isset($field['allows_null']) && $field['allows_null']==true)
				<option value="">-</option>
			@endif
		@endif

		@if (isset($field['model']))
			@foreach ($field['model']::all() as $connected_entity_entry)
				<option value="{{ $connected_entity_entry->getKey() }}"

					@if ( ( old($field['name']) && old($field['name']) == $connected_entity_entry->getKey() ) || (!old($field['name']) && isset($field['value']) && $connected_entity_entry->getKey()==$field['value']))

						 selected
					@endif
				>{{ $connected_entity_entry->{$field['attribute']} }}</option>
			@endforeach
		@endif
	</select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif

</div>
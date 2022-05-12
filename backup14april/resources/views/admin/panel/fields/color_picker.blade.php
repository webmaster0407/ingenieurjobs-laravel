{{-- configurable color picker --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <div class="input-group colorpicker-component">

        <input
        	type="text"
        	name="{{ $field['name'] }}"
            value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
            @include('admin.panel.inc.field_attributes')
        	>
        <span class="input-group-text colorpicker-input-addon">
            <i class="color-preview-{{ $field['name'] }}"></i>
        </span>
        
    </div>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif
</div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($xPanel->checkIfFieldIsFirstOfItsType($field, $fields))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/3.4.0/css/bootstrap-colorpicker.css') }}" />
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-colorpicker/3.4.0/js/bootstrap-colorpicker.js') }}"></script>
    @endpush

@endif

@push('crud_fields_scripts')
<script type="text/javascript">
    jQuery('document').ready(function($){
        /* https://itsjavi.com/bootstrap-colorpicker/tutorial-Basics.html */
        var config = jQuery.extend({}, {!! isset($field['colorpicker_options']) ? json_encode($field['colorpicker_options']) : '{}' !!});
        var picker = $('[name="{{ $field['name'] }}"]').parents('.colorpicker-component').colorpicker(config);
        $('[name="{{ $field['name'] }}"]').on('focus', function() {
            picker.colorpicker('show');
        });
    })
</script>
@endpush

{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}

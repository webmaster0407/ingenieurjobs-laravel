{{-- summernote editor --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <textarea
        name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes', ['default_class' =>  'form-control summernote'])
        >{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}</textarea>

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
        {{-- include summernote css--}}
        <link href="{{ asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet">
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        {{-- include summernote js--}}
        <script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}"></script>
        <?php
        $editorLocale = '';
        if (file_exists(public_path() . '/assets/plugins/summernote/lang/summernote-' . ietfLangTag(config('app.locale')) . '.js')) {
            $editorLocale = ietfLangTag(config('app.locale'));
        }
        if (empty($editorLocale)) {
            if (file_exists(public_path() . '/assets/plugins/summernote/lang/summernote-' . ietfLangTag(config('lang.locale')) . '.js')) {
                $editorLocale = ietfLangTag(config('lang.locale'));
            }
        }
        if (empty($editorLocale)) {
            if (file_exists(public_path() . '/assets/plugins/summernote/lang/summernote-' . strtolower(ietfLangTag(config('lang.locale'))) . '.js')) {
                $editorLocale = strtolower(ietfLangTag(config('lang.locale')));
            }
        }
        if (empty($editorLocale)) {
            $editorLocale = 'en-US';
        }
        ?>
        @if ($editorLocale != 'en-US')
            <script src="{{ url('assets/plugins/summernote/lang/summernote-' . $editorLocale . '.js') }}" type="text/javascript"></script>
        @endif
        <script>
            jQuery(document).ready(function($) {
                $('.summernote').summernote({
                    lang: '{{ $editorLocale }}',
                    tabsize: 2,
                    height: 400,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link']],
                        ['view', ['fullscreen', 'codeview']]
                    ]
                });
            });
        </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
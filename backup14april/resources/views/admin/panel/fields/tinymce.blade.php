{{-- Tiny MCE --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <textarea
    	id="tinymce-{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes', ['default_class' =>  'form-control tinymce'])
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
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
    {{-- include tinymce js--}}
    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <?php
    $editorI18n = \Lang::get('tinymce', [], config('app.locale'));
    $editorI18nJson = '';
    if (!empty($editorI18n)) {
        $editorI18nJson = collect($editorI18n)->toJson();
        // Convert UTF-8 HTML to ANSI
        $editorI18nJson = convertUTF8HtmlToAnsi($editorI18nJson);
    }
    ?>
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea.tinymce",
        language: '{{ (!empty($editorI18nJson)) ? config('app.locale') : 'en' }}',
        directionality: '{{ (config('lang.direction') == 'rtl') ? 'rtl' : 'ltr' }}',
        height: 400,
        menubar: false,
        statusbar: false,
        plugins: 'lists link table code',
        toolbar: 'undo redo | bold italic underline | forecolor backcolor | bullist numlist blockquote table | link unlink | alignleft aligncenter alignright | outdent indent | fontsizeselect | code',
     });
    @if (!empty($editorI18nJson))
        tinymce.addI18n('{{ config('app.locale') }}', <?php echo $editorI18nJson; ?>);
    @endif
    </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
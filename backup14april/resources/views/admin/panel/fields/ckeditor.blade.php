{{-- CKeditor --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <textarea
    	id="ckeditor-{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes', ['default_class' => 'form-control ckeditor'])
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
        <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    @endpush

@endif

{{-- FIELD JS - will be loaded in the after_scripts section --}}
@push('crud_fields_scripts')
    <?php
    $editorLocale = '';
    if (file_exists(public_path() . '/assets/plugins/ckeditor/translations/' . ietfLangTag(config('app.locale')) . '.js')) {
        $editorLocale = ietfLangTag(config('app.locale'));
    }
    if (empty($editorLocale)) {
        if (file_exists(public_path() . '/assets/plugins/ckeditor/translations/' . ietfLangTag(config('lang.locale')) . '.js')) {
            $editorLocale = ietfLangTag(config('lang.locale'));
        }
    }
    if (empty($editorLocale)) {
        if (file_exists(public_path() . '/assets/plugins/ckeditor/translations/' . strtolower(ietfLangTag(config('lang.locale'))) . '.js')) {
            $editorLocale = strtolower(ietfLangTag(config('lang.locale')));
        }
    }
    if (empty($editorLocale)) {
        $editorLocale = 'en';
    }
    ?>
    @if ($editorLocale != 'en')
        <script src="{{ asset('assets/plugins/ckeditor/translations/' . $editorLocale . '.js') }}"></script>
    @endif
<script>
    jQuery(document).ready(function($) {
        ClassicEditor.create(document.querySelector('textarea[name="{{ $field['name'] }}"].ckeditor'), {
            language: '{{ $editorLocale }}',
            toolbar: {
                items: [
                    'undo',
                    'redo',
                    '|',
                    'bold',
                    'italic',
                    '|',
                    'fontColor',
                    'fontBackgroundColor',
                    '|',
                    'bulletedList',
                    'numberedList',
                    'blockQuote',
                    'alignment',
                    '|',
                    'insertTable',
                    'link',
                    '|',
                    'heading',
                    '|',
                    'indent',
                    'outdent',
                    '|',
                    'removeFormat'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            }
        }).then( editor => {
            window.editor = editor;
        }).catch(error => {
            console.error('Oops, something gone wrong!');
            console.error('Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:');
            console.warn('Build id: v28nci2fjq9h-1yblopey8x43');
            console.error(error);
        });
    });
</script>
@endpush

{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}

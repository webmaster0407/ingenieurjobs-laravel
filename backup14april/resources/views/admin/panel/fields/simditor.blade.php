{{-- textarea --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <textarea
    	name="{{ $field['name'] }}"
        @include('admin.panel.inc.field_attributes')

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
    <link media="all" rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/simditor/styles/simditor.css') }}" />
    @endpush
    
    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
    <script src="{{ asset('assets/plugins/simditor/scripts/mobilecheck.js') }}"></script>
    <script src="{{ asset('assets/plugins/simditor/scripts/module.js') }}"></script>
    <script src="{{ asset('assets/plugins/simditor/scripts/hotkeys.js') }}"></script>
    <script src="{{ asset('assets/plugins/simditor/scripts/dompurify.js') }}"></script>
    <script src="{{ asset('assets/plugins/simditor/scripts/simditor.js') }}"></script>
    @endpush

@endif

{{-- FIELD JS - will be loaded in the after_scripts section --}}
@push('crud_fields_scripts')
    <?php
    $editorI18n = \Lang::get('simditor', [], config('app.locale'));
    $editorI18nJson = '';
    if (!empty($editorI18n)) {
        $editorI18nJson = collect($editorI18n)->toJson();
        // Convert UTF-8 HTML to ANSI
        $editorI18nJson = convertUTF8HtmlToAnsi($editorI18nJson);
    }
    ?>
<script>
    @if (!empty($editorI18nJson))
        Simditor.i18n = {'{{ config('app.locale') }}': <?php echo $editorI18nJson; ?>};
    @endif

    <?php /* Fake Code Separator */ ?>
    
    (function() {
        $(function() {
            @if (!empty($editorI18nJson))
                Simditor.locale = '{{ config('app.locale') }}';
            @endif
            
            var $preview, editor, mobileToolbar, toolbar, allowedTags;
    
            toolbar = ['bold','italic','underline','|','fontScale','color','|','ul','ol','blockquote','|','table','link','|','alignment','indent','outdent'];
            mobileToolbar = ["bold", "italic", "underline", "ul", "ol"];
            if (mobilecheck()) {
                toolbar = mobileToolbar;
            }
            allowedTags = ['br','span','a','img','b','strong','i','strike','u','font','p','ul','ol','li','blockquote','pre','h1','h2','h3','h4','hr','table'];
    
            /* Init */
            editor = new Simditor({
                textarea: $('#{{ (isset($field['attributes']) and isset($field['attributes']['id'])) ? $field['attributes']['id'] : 'input' }}'),
                placeholder: '{{ t('describe_what_makes_your_listing_unique') }}...',
                toolbar: toolbar,
                allowedTags: allowedTags,
                defaultImage: '{{ asset('assets/plugins/simditor/images/image.png') }}',
                pasteImage: false,
                upload: false
            });
            
            $preview = $('#preview');
            if ($preview.length > 0) {
                return editor.on('valuechanged', function(e) {
                    return $preview.html(editor.getValue());
                });
            }
        });
    }).call(this);
</script>
@endpush

{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
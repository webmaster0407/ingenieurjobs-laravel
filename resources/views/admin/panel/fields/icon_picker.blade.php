{{-- icon picker input --}}

<?php
    // Supported Icons Fonts
    $iconSetArray = [
            'bootstrapicons',
            'elusiveicons',
            'flagicon',
            'fontawesome4',
            'fontawesome5',
            'glyphicon', // Bootstrap 3
            'ionicons',
            'mapicons',
            'materialdesign',
            'octicons',
            'typicons',
            'weathericons',
    ];
    
    // If no iconset was provided, set the default iconset to Font-Awesome
    if (!isset($field['iconset'])) {
        $field['iconset'] = 'fontawesome';
    } else {
        if (!in_array($field['iconset'], $iconSetArray)) {
            $field['iconset'] = 'fontawesome';
        }
    }
    if (!isset($field['version'])) {
        $field['version'] = 'lastest';
    } else {
        if (empty($field['version'])) {
            $field['version'] = 'lastest';
        }
    }
    if (!isset($field['search'])) {
        $field['search'] = 'Search icon';
    }
?>

<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')

    <div>
        <button class="btn btn-secondary" role="iconpicker" data-icon="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default'])
         ? $field['default'] : '' )) }}" data-iconset="{{ $field['iconset'] }}" data-iconset-version="{{ $field['version'] }}" data-search-text="{{ $field['search'] }}"></button>
        <input
            type="hidden"
            name="{{ $field['name'] }}"
            value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
            @include('admin.panel.inc.field_attributes')
        >
    </div>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif
</div>


@if ($xPanel->checkIfFieldIsFirstOfItsType($field, $fields))
    
    @if($field['iconset'] == 'bootstrapicons')
        @push('crud_fields_styles')
            {{-- Elusive Icons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrapicons/1.6.1/css/bootstrap-icons.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Bootstrap Icons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-bootstrapicons-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'elusiveicons')
        @push('crud_fields_styles')
            {{-- Elusive Icons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/elusiveicons/2.0.0/css/elusive-icons.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Elusive Icons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-elusiveicons-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'flagicon')
        @push('crud_fields_styles')
            <!-- Flag Icons CDN -->
            <link rel="stylesheet" href="{{ asset('assets/fonts/flagicon/3.5.0/css/flag-icon.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Elusive Icons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-flagicon-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'fontawesome4')
        @push('crud_fields_styles')
            {{-- Font Awesome 4 --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome4/4.7.0/css/font-awesome.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Font Awesome -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-fontawesome4-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'fontawesome5')
        @push('crud_fields_styles')
            {{-- Font Awesome 5 --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5/5.15.4/css/all.min.css') }}"/>
        @endpush
    
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Font Awesome -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-fontawesome5-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'glyphicon')
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Bundle -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-glyphicon-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'ionicons')
        @push('crud_fields_styles')
            {{-- Ionicons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/2.0.1/css/ionicons.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Ionicons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-ionicons-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'mapicons')
        @push('crud_fields_styles')
            {{-- Map Icons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/mapicons/2.1.0/css/map-icons.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Map Icons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-mapicons-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'materialdesign')
        @push('crud_fields_styles')
            {{-- Material Icons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/materialdesign/2.2.0/css/material-design-iconic-font.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Material Design -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-materialdesign-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'octicons')
        @push('crud_fields_styles')
            {{-- Octicons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/octicons/4.4.0/css/octicons.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Octicons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-octicons-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'typicons')
        @push('crud_fields_styles')
            {{-- Typicons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/typicons/2.0.9/css/typicons.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Typicons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-typicons-all.js') }}"></script>
        @endpush
    @elseif($field['iconset'] == 'weathericons')
        @push('crud_fields_styles')
            {{-- Weather Icons --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/weathericons/2.0.10/css/weather-icons.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Weather Icons -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-weathericons-all.js') }}"></script>
        @endpush
    @else
        @push('crud_fields_styles')
            {{-- Font Awesome 5 --}}
            <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5/5.15.4/css/all.min.css') }}"/>
        @endpush
        
        @push('crud_fields_scripts')
            <!-- Bootstrap-Iconpicker Iconset for Font Awesome -->
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/iconset/iconset-fontawesome5-all.js') }}"></script>
        @endpush
    @endif
    
    {{-- FIELD EXTRA CSS  --}}
    @push('crud_fields_styles')
        <!-- Bootstrap-Iconpicker -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-iconpicker/css/bootstrap-iconpicker.css') }}"/>
    @endpush
    
    {{-- FIELD EXTRA JS --}}
    @push('crud_fields_scripts')
        <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/bootstrap/4.1.3/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Bootstrap-Iconpicker Bundle -->
        <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-iconpicker/js/bootstrap-iconpicker.js') }}"></script>
        
        {{-- Bootstrap-Iconpicker - set hidden input value --}}
        <script>
            jQuery(document).ready(function($) {
                $('button[role=iconpicker]').on('change', function(e) {
                    $(this).siblings('input[type=hidden]').val(e.icon);
                });
            });
        </script>
    @endpush
    
@endif


{{-- Note: you can use @if ($xPanel->checkIfFieldIsFirstOfItsType($field, $fields)) to only load some CSS/JS once, even though there are multiple instances of it --}}
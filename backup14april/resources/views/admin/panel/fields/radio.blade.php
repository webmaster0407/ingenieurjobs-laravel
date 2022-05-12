{{-- radio --}}
@php
    $optionPointer = 0;
    $optionValue = old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' ));
@endphp

<div @include('admin.panel.inc.field_wrapper_attributes') >

    <div>
        <label class="form-label fw-bolder">{!! $field['label'] !!}</label>
        @include('admin.panel.fields.inc.translatable_icon')
    </div>

    @if( isset($field['options']) && is_array($field['options']) )

        @foreach ($field['options'] as $value => $label )
            @php ($optionPointer++)

            @if( isset($field['inline']) && $field['inline'] )

            <label class="radio-inline" for="{{$field['name']}}_{{$optionPointer}}">
                <input type="radio" id="{{$field['name']}}_{{$optionPointer}}" name="{{$field['name']}}" value="{{$value}}" {{$optionValue == $value ? ' checked': ''}}> {!! $label !!}
            </label>

            @else

            <div class="radio">
                <label for="{{$field['name']}}_{{$optionPointer}}">
                    <input type="radio" id="{{$field['name']}}_{{$optionPointer}}" name="{{$field['name']}}" value="{{$value}}" {{$optionValue == $value ? ' checked': ''}}> {!! $label !!}
                </label>
            </div>

            @endif

        @endforeach

    @endif

    {{-- HINT --}}
    @if (isset($field['hint']))
        <br>
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif

</div>

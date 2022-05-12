<div class="input-icon-right">											
    <input {{ isset($disabled) && $disabled == true ? ' disabled="disabled"' : "" }} id="{{ $name }}" placeholder="{{ isset($placeholder) ? $placeholder : "" }}" value="{{ isset($value) ? $value : "" }}" type="text" name="{{ $name }}" class="form-control{{ $varNameError ?? '' }}{{ $classes }} pickatime{{ isset($class) ? $class : "" }}">
    <span class=""><i class="far fa-bell"></i></span>
</div>

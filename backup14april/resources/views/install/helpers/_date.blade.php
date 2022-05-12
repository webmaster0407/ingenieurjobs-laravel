<div class="input-icon-right">											
    <input {{ isset($disabled) && $disabled == true ? ' disabled="disabled"' : "" }} id="{{ $name }}" placeholder="{{ isset($placeholder) ? $placeholder : "" }}" value="{{ isset($value) ? $value : "" }}" type="text" name="{{ $name }}" class="form-control{{ $varNameError ?? '' }}{{ $classes }} pickadate{{ isset($class) ? $class : "" }}">
    <span class=""><i class="far fa-calendar"></i></span>
</div>

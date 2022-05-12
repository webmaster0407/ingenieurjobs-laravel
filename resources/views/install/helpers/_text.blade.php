<input {{ isset($disabled) && $disabled == true ? ' disabled="disabled"' : "" }} id="{{ $name }}" placeholder="{{ isset($placeholder) ? $placeholder : "" }}" value="{{ isset($value) ?
$value : "" }}" type="text" name="{{ $name }}" class="form-control{{ $varNameError ?? '' }}{{ $classes }}  {{ isset($class) ? $class : "" }}">

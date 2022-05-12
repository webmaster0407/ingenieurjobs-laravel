{{-- hidden input --}}
<input
type="hidden"
name="{{ $field['name'] }}"
value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
@include('admin.panel.inc.field_attributes')
>
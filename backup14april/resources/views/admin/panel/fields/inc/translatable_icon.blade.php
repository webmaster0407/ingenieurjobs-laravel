<?php
// if field name is array we check if any of the arrayed fields is translatable
$translatable = false;
if ($xPanel->model->translationEnabled()) {
	foreach ((array)$field['name'] as $field_name) {
		if ($xPanel->model->isTranslatableAttribute($field_name)) {
			$translatable = true;
		}
	}
	// if the field is a fake one (value is stored in a JSON column instead of a direct db column)
	// and that JSON column is translatable, then the field itself should be translatable
	if (isset($field['store_in']) && $xPanel->model->isTranslatableAttribute($field['store_in'])) {
		$translatable = true;
	}
}
?>
@if ($translatable && config('larapen.admin.show_translatable_field_icon'))
	<i class="fas fa-flag-checkered pull-{{ config('larapen.admin.translatable_field_icon_position') }}" title="{{ trans('admin.field_translatable') }}"></i>
@endif
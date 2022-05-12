{{-- select2 --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <?php $entity_model = $xPanel->getModel(); ?>
    
    <div class="row">
        @foreach ($field['model']::all() as $connected_entity_entry)
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input"
                        name="{{ $field['name'] }}[]"
                        value="{{ $connected_entity_entry->getKey() }}"
                        @if (
                            (
                            	old($field["name"])
                            	&& in_array($connected_entity_entry->getKey(), old($field["name"]))
                            )
                            || (
                                isset($field['value'])
                                && in_array(
                                    $connected_entity_entry->getKey(),
                                    $field['value']->pluck(
                                        $connected_entity_entry->getKeyName(),
                                        $connected_entity_entry->getKeyName())->toArray()
                                        )
                                )
                        )
                            checked = "checked"
                        @endif
                    >
                    <label class="form-check-label fw-bolder">
                         {!! $connected_entity_entry->{$field['attribute']} !!}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
    
    {{-- HINT --}}
    @if (isset($field['hint']))
        <br>
        <div class="form-text">{!! $field['hint'] !!}</div>
    @endif
</div>

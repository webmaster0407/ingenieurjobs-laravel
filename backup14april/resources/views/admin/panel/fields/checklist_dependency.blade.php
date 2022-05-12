{{-- dependencyJson --}}
<div class="mb-3 col-md-12 checklist_dependency" data-entity ="{{ $field['field_unique_name'] }}" @include('admin.panel.inc.field_wrapper_attributes')>
    <label>{!! $field['label'] !!}</label>
    @include('admin.panel.fields.inc.translatable_icon')
    <?php
    $entityModel = $xPanel->getModel();
    
    // short name for dependency fields
    $primaryDependency = $field['subfields']['primary'];
    $secondaryDependency = $field['subfields']['secondary'];
    
    
    // all items with relation
    $dependencies = $primaryDependency['model']::with($primaryDependency['entity_secondary'])->get();
    
    $dependencyArray = [];
    
    // convert dependency array to simple matrix (primary id as key and array with secondaries id)
    foreach($dependencies as $primary){
        $dependencyArray[$primary->id] = [];
        foreach($primary->{$primaryDependency['entity_secondary']} as $secondary){
            $dependencyArray[$primary->id][] = $secondary->id;
        }
    }
    
    // for update form, get initial state of the entity
    if (isset($id) && $id) {
        
        // get entity with relations for primary dependency
        $entityDependencies = $entityModel->with($primaryDependency['entity'])
                ->with($primaryDependency['entity'].'.'.$primaryDependency['entity_secondary'])
                ->where('id', $id)
                ->first();
        
        $secondariesFromPrimary = [];
        
        // convert relation in array
        $primaryArray = $entityDependencies->{$primaryDependency['entity']}->toArray();
        
        $secondaryIds = [];
        
        // create secondary dependency from primary relation, used to check what checkbox must be check from second checklist
        if (old($primaryDependency['name'])) {
            foreach(old($primaryDependency['name']) as $primaryItem) {
                foreach($dependencyArray[$primaryItem] as $second_item ) {
                    $secondaryIds[$second_item] = $second_item;
                }
            }
        } else { // create dependencies from relation if not from validate error
            foreach( $primaryArray as $primaryItem ){
                foreach($primaryItem[$secondaryDependency['entity']] as $second_item ){
                    $secondaryIds[$second_item['id']] = $second_item['id'];
                }
            }
        }
    }
    
    // json encode of dependency matrix
    $dependencyJson = json_encode($dependencyArray);
    ?>
    <script>
        var {{ $field['field_unique_name'] }} = {!! $dependencyJson !!};
    </script>

    <div class="row" >

        <div class="col-sm-12 mt-4 mb-2">
            <label>{!! $primaryDependency['label'] !!}</label>
        </div>
        
        <div class="hidden_fields_primary" data-name = "{{ $primaryDependency['name'] }}">
        @if (isset($field['value']))
            @if (old($primaryDependency['name']))
                @foreach( old($primaryDependency['name']) as $item )
                    <input type="hidden" class="primary_hidden" name="{{ $primaryDependency['name'] }}[]" value="{{ $item }}">
                @endforeach
            @else
                @foreach( $field['value'][0]->pluck('id', 'id')->toArray() as $item )
                    <input type="hidden" class="primary_hidden" name="{{ $primaryDependency['name'] }}[]" value="{{ $item }}">
                @endforeach
            @endif
        @endif
        </div>
    
    @foreach ($primaryDependency['model']::all() as $connected_entity_entry)
        <div class="col-sm-{{ isset($primaryDependency['number_columns']) ? intval(12/$primaryDependency['number_columns']) : '4'}}">
            <div class="form-check">
                <input type="checkbox"
                    data-id="{{ $connected_entity_entry->id }}"
                    class='form-check-input primary_list'
                    @foreach ($primaryDependency as $attribute => $value)
                        @if (is_string($attribute) && $attribute != 'value')
                            @if ($attribute=='name')
                                {{ $attribute }}="{{ $value }}_show[]"
                            @else
                                {{ $attribute }}="{{ $value }}"
                            @endif
                        @endif
                    @endforeach
                    value="{{ $connected_entity_entry->id }}"
                    @if (
                        (
                            isset($field['value'])
                            && is_array($field['value'])
                            && in_array($connected_entity_entry->id, $field['value'][0]->pluck('id', 'id')->toArray())
                        )
                        || (
                            old($primaryDependency["name"])
                            && in_array($connected_entity_entry->id, old( $primaryDependency["name"]))
                            )
                    )
                        checked="checked"
                    @endif
                >
                <label class="form-check-label fw-bolder">
                    {{ $connected_entity_entry->{$primaryDependency['attribute']} }}
                </label>
            </div>
        </div>
    @endforeach
    </div>

    <div class="row">
        <div class="col-sm-12 mt-4 mb-2">
            <label>{!! $secondaryDependency['label'] !!}</label>
        </div>

        <div class="hidden_fields_secondary" data-name="{{ $secondaryDependency['name'] }}">
            @if (isset($field['value']))
                @if (old($secondaryDependency['name']))
                    @foreach(old($secondaryDependency['name']) as $item)
                        <input type="hidden" class="secondary_hidden" name="{{ $secondaryDependency['name'] }}[]" value="{{ $item }}">
                    @endforeach
                @else
                    @foreach($field['value'][1]->pluck('id', 'id')->toArray() as $item)
                        <input type="hidden" class="secondary_hidden" name="{{ $secondaryDependency['name'] }}[]" value="{{ $item }}">
                    @endforeach
                @endif
            @endif
        </div>

        @foreach ($secondaryDependency['model']::all() as $connected_entity_entry)
            <div class="col-sm-{{ isset($secondaryDependency['number_columns']) ? intval(12/$secondaryDependency['number_columns']) : '4'}}">
                <div class="form-check">
                    <input type="checkbox"
                        class='form-check-input secondary_list'
                        data-id="{{ $connected_entity_entry->id }}"
                        @foreach ($secondaryDependency as $attribute => $value)
                            @if (is_string($attribute) && $attribute != 'value')
                                @if ($attribute=='name')
                                    {{ $attribute }}="{{ $value }}_show[]"
                                @else
                                    {{ $attribute }}="{{ $value }}"
                                @endif
                            @endif
                        @endforeach
                        value="{{ $connected_entity_entry->id }}"
                        @if (
                            (
                                isset($field['value'])
                                && is_array($field['value'])
                                && (
                                    in_array($connected_entity_entry->id, $field['value'][1]->pluck('id', 'id')->toArray())
                                    || isset($secondaryIds[$connected_entity_entry->id])
                                )
                                || (
                                	old($secondaryDependency['name'])
                                	&& in_array($connected_entity_entry->id, old($secondaryDependency['name']))
                                	)
                            )
                        )
                            checked="checked"
                            @if(isset( $secondaryIds[$connected_entity_entry->id]))
                                disabled=disabled
                            @endif
                        @endif
                    >
                    <label class="form-check-label">
                        {{ $connected_entity_entry->{$secondaryDependency['attribute']} }}
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

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($xPanel->checkIfFieldIsFirstOfItsType($field, $fields))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
    {{-- include checklist_dependency js--}}
    <script>
      jQuery(document).ready(function($) {

        $('.checklist_dependency').each(function(index, item) {

          var unique_name = $(this).data('entity');
          var dependencyJson = window[unique_name];

          var thisField = $(this);
          thisField.find('.primary_list').change(function() {

            var idCurrent = $(this).data('id');
            if ($(this).is(':checked')) {

              // add hidden field with this value
              var nameInput = thisField.find('.hidden_fields_primary').data('name');
              var inputToAdd = $('<input type="hidden" class="primary_hidden" name="'+nameInput+'[]" value="'+idCurrent+'">');

              thisField.find('.hidden_fields_primary').append(inputToAdd);

              $.each(dependencyJson[idCurrent], function(key, value){
                // check and disable secondaries checkbox
                thisField.find('input.secondary_list[value="'+value+'"]').prop( "checked", true );
                thisField.find('input.secondary_list[value="'+value+'"]').prop( "disabled", true );
                // remove hidden fields with secondary dependency if was setted
                var hidden = thisField.find('input.secondary_hidden[value="'+value+'"]');
                if(hidden)
                  hidden.remove();
              });

            } else {
              // remove hidden field with this value
              thisField.find('input.primary_hidden[value="'+idCurrent+'"]').remove();

              // uncheck and active secondary checkboxes if are not in other selected primary.

              var secondary = dependencyJson[idCurrent];

              var selected = [];
              thisField.find('input.primary_hidden').each(function (index, input) {
                selected.push( $(this).val() );
              });

              $.each(secondary, function(index, secondaryItem){
                var ok = 1;

                $.each(selected, function(index2, selectedItem){
                  if (dependencyJson[selectedItem].indexOf(secondaryItem) != -1) {
                    ok = 0;
                  }
                });

                if(ok){
                  thisField.find('input.secondary_list[value="'+secondaryItem+'"]').prop('checked', false);
                  thisField.find('input.secondary_list[value="'+secondaryItem+'"]').prop('disabled', false);
                }
              });

            }
          });


          thisField.find('.secondary_list').click(function(){

            var idCurrent = $(this).data('id');
            if($(this).is(':checked')){
              // add hidden field with this value
              var nameInput = thisField.find('.hidden_fields_secondary').data('name');
              var inputToAdd = $('<input type="hidden" class="secondary_hidden" name="'+nameInput+'[]" value="'+idCurrent+'">');

              thisField.find('.hidden_fields_secondary').append(inputToAdd);

            }else{
              // remove hidden field with this value
              thisField.find('input.secondary_hidden[value="'+idCurrent+'"]').remove();
            }
          });

        });
      });
    </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}

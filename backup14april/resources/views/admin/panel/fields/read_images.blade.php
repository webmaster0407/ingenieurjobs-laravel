{{-- read_images --}}
<div @include('admin.panel.inc.field_wrapper_attributes') >

	<input type="hidden" name="edit_url" value="{{ request()->url() }}">
	<label class="form-label fw-bolder">{{ $field['label'] }}</label>
	@include('admin.panel.fields.inc.translatable_icon')
	<?php
        $entity_model = (isset($field['value'])) ? $field['value'] : null;
        $listings_pictures_number = (int)config('settings.single.pictures_limit');
	?>

	<div class="d-block text-center">
	@if (!empty($entity_model) && !$entity_model->isEmpty())
		@foreach ($entity_model as $connected_entity_entry)
			<div class="mx-2 my-4 d-inline-block" id="picture{{ $connected_entity_entry->id }}">
				<img src="{{ \Storage::disk($field['disk'])->url($connected_entity_entry->{$field['attribute']}) }}" style="width:320px; height:auto;">
				<div class="mt-2 text-center">
					<a href="{{ admin_url('pictures/' . $connected_entity_entry->id . '/edit') }}" class="btn btn-xs btn-secondary">
						<i class="fa fa-edit"></i> {{ trans('admin.Edit') }}
					</a>&nbsp;
					<a href="{{ admin_url('pictures/' . $connected_entity_entry->id) }}"
					   class="btn btn-xs btn-danger"
					   data-button-type="delete"
					   data-id="{{ $connected_entity_entry->id }}"
					>
						<i class="fa fa-trash"></i> {{ trans('admin.Delete') }}
					</a>
				</div>
			</div>
		@endforeach
        @if ($entity_model->count() < $listings_pictures_number)
            <hr class="border-0 bg-secondary"><br>
            <a href="{{ admin_url('pictures/create?post_id=' . request()->segment(3)) }}" class="btn btn-xs btn-secondary">
				<i class="fa fa-edit"></i> {{ trans('admin.add') }} {{ trans('admin.picture') }}
			</a>
			<br><br>
        @endif
	@else
		<br>{{ trans('admin.No pictures found') }}<br><br>
        <a href="{{ admin_url('pictures/create?post_id=' . request()->segment(3)) }}" class="btn btn-xs btn-secondary">
			<i class="fa fa-edit"></i> {{ trans('admin.add') }} {{ trans('admin.picture') }}
		</a>
		<br><br>
	@endif
	</div>
	<div style="clear: both;"></div>

</div>

@if ($xPanel->checkIfFieldIsFirstOfItsType($field, $fields))
    @push('crud_fields_scripts')
    <script>
		$(document).ready(function() {
			$("[data-button-type=delete]").click(function (e) {
				e.preventDefault(); /* does not go through with the link. */
				
				var $this = $(this);
				
				Swal.fire({
					text: langLayout.confirm.message.question,
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: langLayout.confirm.button.yes,
					cancelButtonText: langLayout.confirm.button.no
				}).then((result) => {
					if (result.isConfirmed) {
						$.post({
							type: 'DELETE',
							url: $this.attr('href'),
							success: function (result) {
								$('#picture' + $this.data('id')).remove();
								
								pnAlert(langLayout.confirm.message.success, 'success');
							}
						});
					} else if (result.dismiss === Swal.DismissReason.cancel) {
						pnAlert(langLayout.confirm.message.cancel, 'info');
					}
				});
			});
		});
    </script>
    @endpush
@endif
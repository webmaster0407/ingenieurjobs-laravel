@if ($xPanel->hasAccess('delete'))
	<a href="{{ url($xPanel->route.'/'.$entry->getKey()) }}" class="btn btn-xs btn-danger" data-button-type="delete">
		<i class="far fa-trash-alt"></i> {{ trans('admin.delete') }}
	</a>
@endif
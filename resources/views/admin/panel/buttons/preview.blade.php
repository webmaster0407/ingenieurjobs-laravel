@if ($xPanel->hasAccess('show'))
	<a href="{{ url($xPanel->route.'/'.$entry->getKey()) }}" class="btn btn-xs btn-secondary"><i class="fa fa-eye"></i> {{ trans('admin.preview') }}</a>
@endif
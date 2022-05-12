@if ($xPanel->hasAccess('create'))
	<a href="{{ url($xPanel->route.'/create') }}" class="btn btn-primary shadow ladda-button" data-style="zoom-in">
		<span class="ladda-label">
            <i class="fas fa-plus"></i> {{ trans('admin.add') }} {!! $xPanel->entityName !!}
        </span>
    </a>
@endif
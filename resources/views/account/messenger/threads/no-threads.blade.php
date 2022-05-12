<div class="alert alert-info" role="alert">
	@if (request()->get('filter') == 'unread')
		{{ t('No new thread or with new messages') }}
	@elseif (request()->get('filter') == 'started')
		{{ t('No thread started by you') }}
	@elseif (request()->get('filter') == 'important')
		{{ t('No message marked as important') }}
	@else
		{{ t('No message received') }}
	@endif
</div>
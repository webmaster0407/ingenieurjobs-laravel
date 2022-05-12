@if ($threads->total() > 0)
	<span class="text-muted count-message">
		<strong>
			{{ $threads->currentPage() }}
		</strong> - <strong>
			{{ $threads->count() }}
		</strong> {{ t('of') }} <strong>
			{{ $threads->total() }}
		</strong>
	</span>
	{{ $threads->appends(request()->query())->links('account.messenger.threads.pagination') }}
@endif
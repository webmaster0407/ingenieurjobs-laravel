<div class="list-group">
	
	@if (isset($threads) && $threads->count() > 0)
		@foreach($threads as $thread)
			@include('account.messenger.threads.thread', ['thread' => $thread])
		@endforeach
	@else
		@include('account.messenger.threads.no-threads')
	@endif

</div>
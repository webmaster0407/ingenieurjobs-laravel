@if (isset($messages))
	@if ($messages->count() > 0)
		@foreach($messages as $message)
			@include('account.messenger.messages.message', ['message' => $message])
		@endforeach
	@endif
@endif
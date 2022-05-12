@php
if (isset($message, $message->filename, $pDisk)) {
	if (Str::startsWith($message->filename, 'resumes/')) {
		$disk = $pDisk;
	}
}
@endphp
@if (auth()->id() == $message->user->id)
	<div class="chat-item object-me">
		<div class="chat-item-content">
			<div class="msg">
				{!! createAutoLink(nlToBr($message->body), ['class' => 'text-light']) !!}
				@if (!empty($message->filename) and $disk->exists($message->filename))
					<?php $mt2Class = !empty(trim($message->body)) ? 'mt-2' : ''; ?>
					<div class="{{ $mt2Class }}">
						<i class="fas fa-paperclip" aria-hidden="true"></i>
						<a class="text-light"
						   href="{{ privateFileUrl($message->filename, null) }}"
						   target="_blank"
						   data-bs-toggle="tooltip"
						   data-bs-placement="left"
						   title="{{ basename($message->filename) }}"
						>
							{{ Str::limit(basename($message->filename), 20) }}
						</a>
					</div>
				@endif
			</div>
			<span class="time-and-date">
				{{ $message->created_at_formatted }}
				<?php $recipient = $message->recipients()->first(); ?>
				@if (!empty($recipient) && !$message->thread->isUnread($recipient->user_id))
					&nbsp;<i class="fas fa-check-double"></i>
				@endif
			</span>
		</div>
	</div>
@else
	<div class="chat-item object-user">
		<div class="object-user-img">
			<a href="{{ \App\Helpers\UrlGen::user($message->user) }}">
				<img src="{{ url($message->user->photo_url) }}" alt="{{ $message->user->name }}">
			</a>
		</div>
		<div class="chat-item-content">
			<div class="chat-item-content-inner">
				<div class="msg bg-white">
					{!! createAutoLink(nlToBr($message->body)) !!}
					@if (!empty($message->filename) and $disk->exists($message->filename))
						<?php $mt2Class = !empty(trim($message->body)) ? 'mt-2' : ''; ?>
						<div class="{{ $mt2Class }}">
							<i class="fas fa-paperclip" aria-hidden="true"></i>
							<a class=""
							   href="{{ privateFileUrl($message->filename, null) }}"
							   target="_blank"
							   data-bs-toggle="tooltip"
							   data-bs-placement="left"
							   title="{{ basename($message->filename) }}"
							>
								{{ Str::limit(basename($message->filename), 20) }}
							</a>
						</div>
					@endif
				</div>
				<?php $userIsOnline = isUserOnline($message->user); ?>
				<span class="time-and-date ms-0">
					@if ($userIsOnline)
						<i class="fa fa-circle color-success"></i>&nbsp;
					@endif
					{{ $message->created_at_formatted }}
				</span>
			</div>
		</div>
	</div>
@endif
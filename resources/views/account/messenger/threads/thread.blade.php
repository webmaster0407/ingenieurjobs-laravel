<div class="list-group-item{{ $thread->isUnread() ? '' : ' seen' }}">
	<div class="form-check">
		<div class="custom-control ps-0">
			<input type="checkbox" name="entries[]" value="{{ $thread->id }}">
			<label class="control-label" for="entries"></label>
		</div>
	</div>
	
	<a href="{{ url('account/messages/' . $thread->id) }}" class="list-box-user">
		<img src="{{ url($thread->creator()->photo_url) }}" alt="{{ $thread->creator()->name }}">
		<span class="name">
			<?php $userIsOnline = isUserOnline($thread->creator()) ? 'online' : 'offline'; ?>
			<i class="fa fa-circle {{ $userIsOnline }}"></i> {{ Str::limit($thread->creator()->name, 14) }}
		</span>
	</a>
	<a href="{{ url('account/messages/' . $thread->id) }}" class="list-box-content">
		<span class="title">{{ $thread->subject }}</span>
		<div class="message-text">
			{{ Str::limit($thread->latest_message->body ?? '', 125) }}
		</div>
		<div class="time text-muted">{{ $thread->created_at_formatted }}</div>
	</a>
	
	<div class="list-box-action">
		@if ($thread->isImportant())
			<a href="{{ url('account/messages/' . $thread->id . '/actions?type=markAsNotImportant') }}"
			   data-bs-toggle="tooltip"
			   data-bs-placement="top"
			   class="markAsNotImportant"
			   title="{{ t('Mark as not important') }}"
			>
				<i class="fas fa-star"></i>
			</a>
		@else
			<a href="{{ url('account/messages/' . $thread->id . '/actions?type=markAsImportant') }}"
			   data-bs-toggle="tooltip"
			   data-bs-placement="top"
			   class="markAsImportant"
			   title="{{ t('Mark as important') }}"
			>
				<i class="far fa-star"></i>
			</a>
		@endif
		<a href="{{ url('account/messages/' . $thread->id . '/delete') }}"
		   data-bs-toggle="tooltip"
		   data-bs-placement="top"
		   title="{{ t('Delete') }}"
		>
			<i class="fas fa-trash"></i>
		</a>
		@if ($thread->isUnread())
			<a href="{{ url('account/messages/' . $thread->id . '/actions?type=markAsRead') }}"
			   class="markAsRead"
			   data-bs-toggle="tooltip"
			   data-bs-placement="top"
			   title="{{ t('Mark as read') }}"
			>
				<i class="fas fa-envelope"></i>
			</a>
		@else
			<a href="{{ url('account/messages/' . $thread->id . '/actions?type=markAsUnread') }}"
			   class="markAsRead"
			   data-bs-toggle="tooltip"
			   data-bs-placement="top"
			   title="{{ t('Mark as unread') }}"
			>
				<i class="fas fa-envelope-open"></i>
			</a>
		@endif
	</div>
</div>
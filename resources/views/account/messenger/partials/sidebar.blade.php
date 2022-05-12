<div class="col-md-3 col-lg-2">
	<ul class="nav nav-pills inbox-nav">
		<li class="nav-item{{ (!request()->has('filter') || request()->get('filter')=='') ? ' active' : '' }}">
			<a class="nav-link" href="{{ url('account/messages') }}">
				{{ t('inbox') }}
				<?php
				$badgeColor = (!request()->has('filter') || request()->get('filter')=='') ? 'badge-light' : 'badge-primary text-white';
				$visibility = (!isset($countThreadsWithNewMessage) || $countThreadsWithNewMessage <= 0) ? ' hide' : '';
				?>
				<span class="count-threads-with-new-messages count badge {{ $badgeColor }}{{ $visibility }}">
					{{ \App\Helpers\Number::short($countThreadsWithNewMessage) }}
				</span>
			</a>
		</li>
		<li class="nav-item{{ (request()->get('filter')=='unread') ? ' active' : '' }}">
			<a class="nav-link" href="{{ url('account/messages?filter=unread') }}">
				{{ t('unread') }}
			</a>
		</li>
		<li class="nav-item{{ (request()->get('filter')=='started') ? ' active' : '' }}">
			<a class="nav-link" href="{{ url('account/messages?filter=started') }}">
				{{ t('started') }}
			</a>
		</li>
		<li class="nav-item{{ (request()->get('filter')=='important') ? ' active' : '' }}">
			<a class="nav-link" href="{{ url('account/messages?filter=important') }}">
				{{ t('important') }}
			</a>
		</li>
	</ul>
</div>
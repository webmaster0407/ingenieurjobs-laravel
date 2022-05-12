<div class="modal fade" id="sendByEmail" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header px-3">
				<h4 class="modal-title">
					<i class="far fa-flag"></i> {{ t('Send by Email') }}
				</h4>
				
				<button type="button" class="close" data-bs-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">{{ t('Close') }}</span>
				</button>
			</div>
			
			<form role="form" method="POST" action="{{ url('send-by-email') }}">
				<div class="modal-body">
					
					@if (isset($errors) && $errors->any() && old('sendByEmailForm')=='1')
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="{{ t('Close') }}"></button>
							<ul class="list list-check">
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					{!! csrf_field() !!}
					
					{{-- sender_email --}}
					@if (auth()->check() && isset(auth()->user()->email))
						<input type="hidden" name="sender_email" value="{{ auth()->user()->email }}">
					@else
						<?php $senderEmailError = (isset($errors) && $errors->has('sender_email')) ? ' is-invalid' : ''; ?>
						<div class="form-group required mb-3">
							<label for="sender_email" class="control-label">{{ t('Your Email') }} <sup>*</sup></label>
							<div class="input-group">
								<span class="input-group-text"><i class="far fa-envelope"></i></span>
								<input name="sender_email" type="text" maxlength="60" class="form-control{{ $senderEmailError }}" value="{{ old('sender_email') }}">
							</div>
						</div>
					@endif
					
					{{-- recipient_email --}}
					<?php $recipientEmailError = (isset($errors) && $errors->has('recipient_email')) ? ' is-invalid' : ''; ?>
					<div class="form-group required mb-3">
						<label for="recipient_email" class="control-label">{{ t('Recipient Email') }} <sup>*</sup></label>
						<div class="input-group">
							<span class="input-group-text"><i class="far fa-envelope"></i></span>
							<input name="recipient_email" type="text" maxlength="60" class="form-control{{ $recipientEmailError }}" value="{{ old('recipient_email') }}">
						</div>
					</div>
					
					<input type="hidden" name="post_id" value="{{ old('post_id') }}">
					<input type="hidden" name="sendByEmailForm" value="1">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-bs-dismiss="modal">{{ t('Cancel') }}</button>
					<button type="submit" class="btn btn-primary">{{ t('Send') }}</button>
				</div>
			</form>
		</div>
	</div>
</div>
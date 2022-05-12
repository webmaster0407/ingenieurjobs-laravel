{{-- Bootstrap Notifications using Prologue Alerts --}}
{{-- PNotify: https://github.com/sciactive/pnotify --}}
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		
		PNotify.defaultModules.set(PNotifyBootstrap4, {});
		PNotify.defaultModules.set(PNotifyFontAwesome5Fix, {});
		PNotify.defaultModules.set(PNotifyFontAwesome5, {});
		
		@foreach (Alert::getMessages() as $type => $messages)
			@foreach ($messages as $message)
				
				@php
					$message = addcslashesLite($message);
				@endphp
				
				$(function () {
					let alertMessage = "{{ $message }}";
					let alertType = "{{ $type }}";
					
					@if ($message == t('demo_mode_message'))
						pnAlertForPrologue(alertType, alertMessage, 'Information');
					@else
						pnAlertForPrologue(alertType, alertMessage);
					@endif
				});
				
			@endforeach
		@endforeach
			
		/**
		 * Show a PNotify alert (Using the Stack feature)
		 * @param type
		 * @param message
		 * @param title
		 */
		function pnAlertForPrologue(type, message, title = '') {
			if (typeof window.stackTopRight === 'undefined') {
				window.stackTopRight = new PNotify.Stack({
					dir1: 'down',
					dir2: 'left',
					firstpos1: 25,
					firstpos2: 25,
					spacing1: 10,
					spacing2: 25,
					modal: false,
					maxOpen: Infinity
				});
			}
			let alertParams = {
				text: message,
				textTrusted: true,
				type: 'info',
				icon: false,
				stack: window.stackTopRight
			};
			switch (type) {
				case 'error':
					alertParams.type = 'error';
					break;
				case 'warning':
					alertParams.type = 'notice';
					break;
				case 'notice':
					alertParams.type = 'notice';
					break;
				case 'info':
					alertParams.type = 'info';
					break;
				case 'success':
					alertParams.type = 'success';
					break;
			}
			if (typeof title !== 'undefined' && title != '' && title.length !== 0) {
				alertParams.title = title;
				alertParams.icon = true;
			}
			
			PNotify.alert(alertParams);
		}
	});
</script>
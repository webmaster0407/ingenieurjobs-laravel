<script>
	{{-- Init. Root Vars --}}
	var siteUrl = '{{ url('/') }}';
	var languageCode = '{{ config('app.locale') }}';
	var isLogged = {{ (auth()->check()) ? 'true' : 'false' }};
	var isLoggedAdmin = {{ (auth()->check() && auth()->user()->can(\App\Models\Permission::getStaffPermissions())) ? 'true' : 'false'  }};
	var isAdminPanel = {{ isAdminPanel() ? 'true' : 'false' }};
	var demoMode = {{ isDemoDomain() ? 'true' : 'false' }};
	var demoMessage = '{{ addcslashes(t('demo_mode_message'), "'") }}';
	
	{{-- Cookie Parameters --}}
	var cookieParams = {
		expires: {{ (int)config('settings.other.cookie_expiration') }},
		path: "{{ config('session.path') }}",
		domain: "{{ !empty(config('session.domain')) ? config('session.domain') : getCookieDomain() }}",
		secure: {{ config('session.secure') ? 'true' : 'false' }},
		sameSite: "{{ config('session.same_site') }}"
	};
	
	{{-- Init. Translation Vars --}}
	var langLayout = {
		'confirm': {
			'button': {
				'yes': "{{ t('confirm_button_yes') }}",
				'no': "{{ t('confirm_button_no') }}",
				'ok': "{{ t('confirm_button_ok') }}",
				'cancel': "{{ t('confirm_button_cancel') }}"
			},
			'message': {
				'question': "{{ t('confirm_message_question') }}",
				'success': "{{ t('confirm_message_success') }}",
				'error': "{{ t('confirm_message_error') }}",
				'errorAbort': "{{ t('confirm_message_error_abort') }}",
				'cancel': "{{ t('confirm_message_cancel') }}"
			}
		}
	};
</script>
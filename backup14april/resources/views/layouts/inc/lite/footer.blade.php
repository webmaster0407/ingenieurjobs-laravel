<footer class="main-footer">
	<div class="footer-content">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					
					<div class="copy-info text-center">
						© {{ date('Y') }} {{ config('settings.app.name') }}. {{ t('all_rights_reserved') }}.
						@if (!config('settings.footer.hide_powered_by'))
							@if (config('settings.footer.powered_by_info'))
								{{ t('Powered by') }} {!! config('settings.footer.powered_by_info') !!}
							@else
								{{ t('Powered by') }} <a href="https://laraclassifier.com/jobclass" title="JobClass">JobClass</a>.
							@endif
						@endif
					</div>
					
				</div>
			</div>
		</div>
	</div>
</footer>

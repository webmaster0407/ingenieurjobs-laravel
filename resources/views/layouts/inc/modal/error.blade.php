{{-- Show AJAX Errors (for JS) --}}
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header px-3">
				<h4 class="modal-title" id="errorModalTitle">
					Title
				</h4>
				
				<button type="button" class="close" data-bs-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">{{ t('Close') }}</span>
				</button>
			</div>
			
			<div class="modal-body">
				<div class="row">
					<div id="errorModalBody" class="col-12">
						Content...
					</div>
				</div>
			</div>
			
			<div class='modal-footer'>
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{ t('Close') }}</button>
			</div>
			
		</div>
	</div>
</div>

@section('after_scripts')
	@parent
@endsection

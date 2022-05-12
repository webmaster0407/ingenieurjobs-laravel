@extends('admin.layouts.master')

@section('after_styles')
    {{-- Ladda Buttons (loading buttons) --}}
    <link href="{{ asset('assets/plugins/ladda/ladda-themeless.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('header')
	<div class="row page-titles">
		<div class="col-md-6 col-12 align-self-center">
			<h3 class="mb-0">
				{{ trans('admin.Plugins') }}
			</h3>
		</div>
		<div class="col-md-6 col-12 align-self-center d-none d-md-flex justify-content-end">
			<ol class="breadcrumb mb-0 p-0 bg-transparent">
				<li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
				<li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.Plugins') }}</li>
			</ol>
		</div>
	</div>
@endsection

@section('content')
    {{-- Default box --}}
	<div class="row">
		<div class="col-12">
			
			<div class="card rounded">
				<div class="card-header">
					<h3>{{ trans('admin.Existing plugins') }}</h3>
				</div>
				
				<div class="card-body">
					<table class="table table-hover table-condensed">
						<thead>
						<tr>
							<th>#</th>
							<th>{{ trans('admin.Name') }}</th>
							<th>{{ trans('admin.Description') }}</th>
							<th class="text-end">{{ trans('admin.Version') }}</th>
							<th class="text-end">{{ mb_ucfirst(trans('admin.options')) }}</th>
							<th class="text-end">{{ trans('admin.actions') }}</th>
						</tr>
						</thead>
						<tbody>
						@foreach ($plugins as $key => $plugin)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $plugin->display_name }}</td>
								<td>{{ $plugin->description }}</td>
								<td class="text-end">{{ $plugin->version }}</td>
								<td class="text-end">
									@if ($plugin->has_installer)
										@if ($plugin->installed && $plugin->activated)
											@if (!empty($plugin->options))
												@foreach($plugin->options as $option)
													@continue(!isset($option->url))
													<a class="btn btn-xs {{ (isset($option->btnClass) && !empty($option->btnClass)) ? $option->btnClass : 'btn-light' }}" href="{{ $option->url }}">
														<i class="{{ (isset($option->iClass) && !empty($option->iClass)) ? $option->iClass : 'fa fa-cog' }}"></i>
														{{ (isset($option->name) && !empty($option->name)) ? $option->name : trans('admin.Configure') }}
													</a>
												@endforeach
											@else
												-
											@endif
										@else
											-
										@endif
									@endif
								</td>
								<td class="text-end">
									@if ($plugin->has_installer)
										@if ($plugin->installed)
											@if ($plugin->activated)
												<a class="btn btn-xs btn-success btn-uninstall confirm-simple-action"
												   href="{{ admin_url('plugins/' . $plugin->name . '/uninstall') }}"
												>
													<i class="fa fa-toggle-on"></i> {{ trans('admin.Uninstall') }}
												</a>
											@else
												<a class="btn btn-xs btn-danger btn-install"
												   data-name="{!! $plugin->display_name !!}"
												   data-checkable="{{ (!empty($plugin->item_id)) ? 'true' : 'false' }}"
												   href="{{ admin_url('plugins/' . $plugin->name . '/install') }}"
												>
													<i class="fa fa-lock"></i> {{ trans('admin.Activate') }}
												</a>
											@endif
										@else
											<a class="btn btn-xs btn-light btn-install"
											   data-name="{!! $plugin->display_name !!}"
											   data-checkable="{{ (!empty($plugin->item_id)) ? 'true' : 'false' }}"
											   href="{{ admin_url('plugins/' . $plugin->name . '/install') }}"
											>
												<i class="fa fa-toggle-off"></i> {{ trans('admin.Install') }}
											</a>
										@endif
									@endif
									{{--
									<a class="btn btn-xs btn-danger" data-button-type="delete" href="{{ admin_url('plugins/' . $plugin->name . '/delete') }}">
										<i class="fa fa-trash-o"></i> {{ trans('admin.delete') }}
									</a>
									--}}
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>

        </div>
    </div>


	<div class="modal fade" id="purchaseCodeModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<h4 class="modal-title">{{ trans('admin.Plugin') }}</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ t('Close') }}"></button>
				</div>
				
				<form role="form" method="POST" action="">
					{!! csrf_field() !!}
				
					<div class="modal-body">
					
						@if (isset($errors) && $errors->any() && old('purchaseCodeForm')=='1')
							<div class="alert alert-danger">
								<ul class="list list-check">
									@foreach($errors->all() as $error)
										<li>{!! $error !!}</li>
									@endforeach
								</ul>
							</div>
						@endif
						
						{{-- purchase_code --}}
						<div class="mb-3 required <?php echo (isset($errors) && $errors->has('purchase_code_valid')) ? ' is-invalid' : ''; ?>">
							<label for="purchase_code" class="control-label">{{ trans('admin.Purchase Code') }}</label>
							<input id="purchaseCode" name="purchase_code" class="form-control required" placeholder="{{ trans('admin.purchase_code_placeholder') }}" value="{{ old('purchase_code') }}">
							<div class="form-text">{!! trans('admin.find_my_purchase_code') !!}</div>
						</div>
						
						<input type="hidden" name="displayName">
						<input type="hidden" name="installUrl">
						<input type="hidden" name="purchaseCodeForm" value="1">
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-light float-start" data-bs-dismiss="modal">{{ t('Close') }}</button>
						<button type="submit" class="btn btn-primary" id="btnSubmit">{{ trans('admin.Install') }}</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>

@endsection

@section('after_scripts')
    {{-- Ladda Buttons (loading buttons) --}}
    <script src="{{ asset('assets/plugins/ladda/spin.js') }}"></script>
    <script src="{{ asset('assets/plugins/ladda/ladda.js') }}"></script>
	
    <script>
        jQuery(document).ready(function($) {
        	
        	/* Installation: Display the Purchase Code Form */
            $(document).on('click', '.btn-install', function(e) {
				e.preventDefault(); /* prevents the submit or reload */
				
				/* Clear form existing data */
				clearFormData();
				
				/* Retrieve form data */
				let displayName = $(this).data('name');
				let installUrl = $(this).attr('href');
				let checkable = $(this).data('checkable');
                let isCheckable = (checkable === true || checkable === 'true');
                
                if (isCheckable) {
					return showInstallationForm(displayName, installUrl);
				} else {
					Swal.fire({
						text: langLayout.confirm.message.question,
						icon: 'warning',
						showCancelButton: true,
						confirmButtonText: langLayout.confirm.button.yes,
						cancelButtonText: langLayout.confirm.button.no
					}).then((result) => {
						if (result.isConfirmed) {
							
							redirect(installUrl);
			
						} else if (result.dismiss === Swal.DismissReason.cancel) {
							jsAlert(langLayout.confirm.message.cancel, 'info');
						}
					});
				}
				
				return false;
            });
            
            /* Installation: Submit the Purchase Code Form */
			$(document).on('click', '#btnSubmit', function(e) {
				e.preventDefault(); /* prevents the submit or reload */
				$('#purchaseCodeModal form').submit();
				
				return false;
			});
			
			@if (isset($errors) && $errors->any())
				@if ($errors->any() && old('purchaseCodeForm')=='1')
					let displayName = '{!! old('displayName') !!}';
					let installUrl = '{!! old('installUrl') !!}';
					showInstallationForm(displayName, installUrl);
				@endif
			@endif
			
        });
        
        function showInstallationForm(displayName, installUrl) {
        	$('#purchaseCodeModal h4.modal-title').html(displayName);
			$('#purchaseCodeModal [name="displayName"]').val(displayName);
			$('#purchaseCodeModal form').attr('action', installUrl);
			$('#purchaseCodeModal [name="installUrl"]').val(installUrl);
			
			/* Open Modal */
			let purchaseCodeModal = new bootstrap.Modal(document.getElementById('purchaseCodeModal'), {});
			purchaseCodeModal.show();
			
			return false;
        }
        
        function clearFormData() {
			$('#purchaseCodeModal h4.modal-title').html('');
			$('#purchaseCodeModal [name="displayName"]').val('');
			$('#purchaseCodeModal form').attr('action', '');
			$('#purchaseCodeModal [name="installUrl"]').val('');
			
			$('#purchaseCodeModal .alert.alert-danger').html('').hide();
			let purchaseCodeFieldSelector = '#purchaseCodeModal [name="purchase_code"]';
			$(purchaseCodeFieldSelector).val('');
			$(purchaseCodeFieldSelector).parent('div.input-group').removeClass('is-invalid');
		}
    </script>
@endsection

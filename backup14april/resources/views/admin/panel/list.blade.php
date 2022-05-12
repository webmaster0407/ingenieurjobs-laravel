@extends('admin.layouts.master')

<?php
$bulkActionAllowed = (
	isset($xPanel)
	&& (
		$xPanel->hasButton('bulk_deletion_btn')
		|| $xPanel->hasButton('bulk_activation_btn')
		|| $xPanel->hasButton('bulk_deactivation_btn')
		|| $xPanel->hasButton('bulk_approval_btn')
		|| $xPanel->hasButton('bulk_disapproval_btn')
	)
);
?>

@section('header')
	<div class="row page-titles">
		<div class="col-md-6 col-12 align-self-center">
			<h2 class="mb-0">
				<span class="text-capitalize">{!! $xPanel->entityNamePlural !!}</span>
				<small id="tableInfo">{{ trans('admin.all') }}</small>
			</h2>
		</div>
		<div class="col-md-6 col-12 align-self-center d-none d-md-flex justify-content-end">
			<ol class="breadcrumb mb-0 p-0 bg-transparent">
				<li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
				<li class="breadcrumb-item"><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
				<li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.list') }}</li>
			</ol>
		</div>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-12">
			
			@if (isTranslatableModel($xPanel->model))
			<div class="card mb-0 rounded">
				<div class="card-body">
					<h3 class="card-title"><i class="fa fa-question-circle"></i> {{ trans('admin.Help') }}</h3>
					<p class="card-text">
						{!! trans('admin.help_translatable_table') !!}
						@if (config('larapen.admin.show_translatable_field_icon'))
							&nbsp;{!! trans('admin.help_translatable_column') !!}
						@endif
					</p>
				</div>
			</div>
			@endif
			
			<div class="card rounded">
				
				<div class="card-header {{ $xPanel->hasAccess('create')?'with-border':'' }}">
					@include('admin.panel.inc.button_stack', ['stack' => 'top'])
					<div id="datatable_button_stack" class="float-end text-end"></div>
				</div>
				
				{{-- List Filters --}}
				@if ($xPanel->filtersEnabled())
					<div class="card-body">
						@include('admin.panel.inc.filters_navbar')
					</div>
				@endif
				
				<div class="card-body">
					
					<form id="bulkActionForm" action="{{ url($xPanel->getRoute() . '/bulk_actions') }}" method="POST">
						{!! csrf_field() !!}
						
						<table id="crudTable" class="dataTable table table-bordered table-striped display dt-responsive nowrap" style="width:100%">
							<thead>
							<tr>
								@if ($xPanel->details_row)
									<th data-orderable="false"></th> {{-- expand/minimize button column --}}
								@endif
	
								{{-- Table columns --}}
								@foreach ($xPanel->columns as $column)
									@if ($column['type'] == 'checkbox')
									<th {{ isset($column['orderable']) ? 'data-orderable=' .var_export($column['orderable'], true) : '' }}
										class="dt-checkboxes-cell dt-checkboxes-select-all sorting_disabled"
										tabindex="0"
										aria-controls="massSelectAll"
										rowspan="1"
										colspan="1"
										style="width: 14px; text-align: center; padding-right: 10px;"
										data-col="0"
										aria-label=""
									>
										<input type="checkbox" id="massSelectAll" name="massSelectAll">
									</th>
									@else
									<th {{ isset($column['orderable']) ? 'data-orderable=' .var_export($column['orderable'], true) : '' }}>
										{!! $column['label'] !!}
									</th>
									@endif
								@endforeach
	
								@if ( $xPanel->buttons->where('stack', 'line')->count() )
									<th data-orderable="false">{{ trans('admin.actions') }}</th>
								@endif
							</tr>
							</thead>
	
							<tbody>
							</tbody>
	
							<tfoot>
							<tr>
								@if ($xPanel->details_row)
									<th></th> {{-- expand/minimize button column --}}
								@endif
	
								{{-- Table columns --}}
								@foreach ($xPanel->columns as $column)
									<th>{{ $column['label'] }}</th>
								@endforeach
	
								@if ( $xPanel->buttons->where('stack', 'line')->count() )
									<th>{{ trans('admin.actions') }}</th>
								@endif
							</tr>
							</tfoot>
						</table>
						
					</form>

				</div>

				@include('admin.panel.inc.button_stack', ['stack' => 'bottom'])
				
        	</div>
    	</div>
	</div>
@endsection

@section('after_styles')
    {{-- DATA TABLES --}}
	{{--<link href="{{ asset('assets/plugins/datatables/css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css" />--}}
	<link href="{{ asset('assets/plugins/datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/datatables/css/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/datatables/extensions/Responsive-2.2.9/css/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
	
    {{-- CRUD LIST CONTENT - crud_list_styles stack --}}
    @stack('crud_list_styles')
    
    <style>
		@if ($bulkActionAllowed)
			/* tr > td:first-child, */
			table.dataTable > tbody > tr:not(.no-padding) > td:first-child {
				width: 30px;
				white-space: nowrap;
				text-align: center;
			}
		@endif
		
		/* Fix the 'Actions' column size */
		/* tr > td:last-child, */
		table.dataTable > tbody > tr:not(.no-padding) > td:last-child,
		table:not(.dataTable) > tbody > tr > td:last-child {
			width: 10px;
			white-space: nowrap;
		}
    </style>
@endsection

@section('after_scripts')
    {{-- DATA TABLES SCRIPT --}}
	<script src="{{ asset('assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/js/dataTables.bootstrap5.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/datatables/extensions/Responsive-2.2.9/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/plugins/datatables/extensions/Responsive-2.2.9/js/responsive.bootstrap5.js') }}" type="text/javascript"></script>
	
	{{--
	<script src="{{ asset('assets/plugins/datatables/js/pages/datatable/custom-datatable.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables/js/pages/datatable/datatable-basic.init.js') }}"></script>
	--}}

    @if (isset($xPanel->exportButtons) and $xPanel->exportButtons)
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" type="text/javascript"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js" type="text/javascript"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js" type="text/javascript"></script>
    @endif

    <script type="text/javascript">
        jQuery(document).ready(function($) {
	
			/* DEBUG */
			/* If don't want your end users to see the alert() message during error. */
			/* $.fn.dataTable.ext.errMode = 'throw'; */

            @if ($xPanel->exportButtons)
            	var dtButtons = function(buttons){
                    var extended = [];
                    for(var i = 0; i < buttons.length; i++){
                        var item = {
                            extend: buttons[i],
                            exportOptions: {
                                columns: [':visible']
                            }
                        };
                        switch(buttons[i]){
                            case 'pdfHtml5':
                                item.orientation = 'landscape';
                                break;
                        }
                        extended.push(item);
                    }
                    return extended;
                }
            @endif

            var table = $("#crudTable").DataTable({
				"pageLength": {{ $xPanel->getDefaultPageLength() }},
				"lengthMenu": [[10, 25, 50, 100, 250, 500], [10, 25, 50, 100, 250, 500]],
				/* Disable initial sort */
				"aaSorting": [],
				"language": {
					"emptyTable":     "{{ trans('admin.emptyTable') }}",
					"info":           "{{ trans('admin.info') }}",
					"infoEmpty":      "{{ trans('admin.infoEmpty') }}",
					"infoFiltered":   "{{ trans('admin.infoFiltered') }}",
					"infoPostFix":    "{{ trans('admin.infoPostFix') }}",
					"thousands":      "{{ trans('admin.thousands') }}",
					"lengthMenu":     "{{ trans('admin.lengthMenu') }}",
					"loadingRecords": "{{ trans('admin.loadingRecords') }}",
					"processing":     "{{ trans('admin.processing') }}",
					"search":         "{{ trans('admin.search') }}",
					"zeroRecords":    "{{ trans('admin.zeroRecords') }}",
					"paginate": {
						"first":      "{{ trans('admin.paginate.first') }}",
						"last":       "{{ trans('admin.paginate.last') }}",
						"next":       "{{ trans('admin.paginate.next') }}",
						"previous":   "{{ trans('admin.paginate.previous') }}"
					},
					"aria": {
						"sortAscending":  "{{ trans('admin.aria.sortAscending') }}",
						"sortDescending": "{{ trans('admin.aria.sortDescending') }}"
					}
				},
				responsive: true,

				@if ($xPanel->ajaxTable)
					"processing": true,
					"serverSide": true,
					"ajax": {
						"url": "{{ url($xPanel->route . '/search') . '?' . request()->getQueryString() }}",
						"type": "POST"
					},
				@endif
			
				@if ($bulkActionAllowed)
					/* Mass Select All */
					'columnDefs': [{
						'targets': [0],
						'orderable': false
					}],
				@endif

				@if ($xPanel->exportButtons)
					/* Show the export datatable buttons */
					dom: '<"p-l-0 col-md-6"l>B<"p-r-0 col-md-6"f>rt<"col-md-6 p-l-0"i><"col-md-6 p-r-0"p>',
					buttons: dtButtons([
						'copyHtml5',
						'excelHtml5',
						'csvHtml5',
						'pdfHtml5',
						'print',
						'colvis'
					]),
				@endif
	
				@if ($xPanel->hideSearchBar)
					searching: false,
				@endif
				
				/* Fire some actions after the data has been retrieved and renders the table */
				/* NOTE: This only fires once though. */
				'initComplete': function(settings, json) {
					/* $('[data-bs-toggle="tooltip"]').tooltip(); */
					/* $('[data-bs-toggle="tooltipHover"]').tooltip(); */
					
					/* Enable the tooltip */
					/* To prevent the tooltip in bootstrap doesn't work after ajax, use selector on exist element like body */
					let bodyEl = $('body');
					bodyEl.tooltip({selector: '[data-bs-toggle="tooltip"]'});
					bodyEl.tooltip({selector: '[data-bs-toggle="tooltipHover"]'});
				},
			
				/* Other initialisation options */
				drawCallback : function() {
					/* Page Info */
					var info = this.api().page.info();
					var textInfo = "{{ trans('admin.info') }}";
					textInfo = textInfo.replace('_START_', (info.recordsTotal > 0) ? (info.start + 1) : 0);
					textInfo = textInfo.replace('_END_', info.end);
					textInfo = textInfo.replace('_TOTAL_', addThousandsSeparator(info.recordsTotal, '{{ trans('admin.thousands') }}'));
					if (info.recordsTotal <= 0) {
						textInfo = '{{ trans('admin.infoEmpty') }}';
					}
					$('#tableInfo').html(textInfo);
				}
			});
			
            @if ($xPanel->exportButtons)
				/* Move the datatable buttons in the top-right corner and make them smaller */
				table.buttons().each(function(button) {
					if (button.node.className.indexOf('buttons-columnVisibility') == -1)
					{
						button.node.className = button.node.className + " btn-sm";
					}
				});
				$(".dt-buttons").appendTo($('#datatable_button_stack'));
            @endif
			
            $.ajaxPrefilter(function(options, originalOptions, xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-XSRF-TOKEN', token);
                }
            });
			
            /* Make the delete button work in the first result page */
            registerDeleteButtonAction();
			
            /* Make the delete button work on subsequent result pages */
            $('#crudTable').on('draw.dt', function () {
                registerDeleteButtonAction();

                @if ($xPanel->details_row)
					registerDetailsRowButtonAction();
                @endif
            }).dataTable();
			
            function registerDeleteButtonAction() {
				let deleteBtnEl = $('[data-button-type=delete]');
				
				deleteBtnEl.unbind('click');
                /* CRUD Delete */
                /* Ask for confirmation before deleting an item */
				deleteBtnEl.click(function(e) {
                    e.preventDefault();
					
					var thisEl = this;
					
					Swal.fire({
						text: langLayout.confirm.message.question,
						icon: 'warning',
						showCancelButton: true,
						confirmButtonText: langLayout.confirm.button.yes,
						cancelButtonText: langLayout.confirm.button.no
					}).then((result) => {
						if (result.isConfirmed) {
							
							if (isDemoDomain()) {
								/* Delete the row from the table */
								$(thisEl).parentsUntil('tr').parent().remove();
								
								return false;
							}
							
							deleteEntry(thisEl);
							
						} else if (result.dismiss === Swal.DismissReason.cancel) {
							pnAlert(langLayout.confirm.message.cancel, 'info');
						}
					});
                });
            }
            
            function deleteEntry(deleteBtnEl) {
				let deleteButton = $(deleteBtnEl);
				let deleteUrl = $(deleteBtnEl).attr('href');
				
				/* Make the AJAX request */
				let ajax = $.ajax({
					url: deleteUrl,
					type: 'DELETE'
				});
				ajax.done(function(xhr) {
					/* Show an alert with the result */
					pnAlert(langLayout.confirm.message.success, 'success');
					
					/* Delete the row from the table */
					deleteButton.parentsUntil('tr').parent().remove();
					
					/* Reload data after row deletion */
					table.ajax.reload(null, false);
				});
				ajax.fail(function(xhr) {
					let message = getJqueryAjaxError(xhr);
					if (message !== null) {
						pnAlert(message, 'error');
					}
				});
			}
			
			/* Mass Select All */
			$('body').on('change', '#massSelectAll', function() {
				let rows, checked, colIndex;
				rows = $('#crudTable').find('tbody tr');
				checked = $(this).prop('checked');
				colIndex = {{ (isset($xPanel->details_row) && $xPanel->details_row) ? 1 : 0 }};
				$.each(rows, function() {
					$($(this).find('td').eq(colIndex)).find('input').prop('checked', checked);
				});
			});
			
			/* Bulk Items Deletion */
			$('.bulk-action').click(function(e) {
				e.preventDefault();
				
				let clickedEl = $(this);
				let selectedItems = $('input[name="entryId[]"]:checked');
				
				if (selectedItems.length > 0) {
					Swal.fire({
						text: langLayout.confirm.message.question,
						icon: 'warning',
						showCancelButton: true,
						confirmButtonText: langLayout.confirm.button.yes,
						cancelButtonText: langLayout.confirm.button.no
					}).then((result) => {
						if (result.isConfirmed) {
							
							if (isDemoDomain()) {
								/* Delete the row from the table */
								$.each(selectedItems, function() {
									if (clickedEl.attr('name') == 'deletion') {
										$(this).parentsUntil('tr').parent().remove();
									}
								});
								
								return false;
							}
							
							let formEl = $('#bulkActionForm');
							bulkActions(formEl, clickedEl);
							
						} else if (result.dismiss === Swal.DismissReason.cancel) {
							pnAlert(langLayout.confirm.message.cancel, 'info');
						}
					});
				} else {
					let message = "{{ trans('admin.Please select at least one item below') }}";
					jsAlert(message, 'warning');
				}
				
				return false;
			});
			
			function bulkActions(formEl, clickedEl)
			{
				let submitUrl = $(formEl).attr('action');
				
				/* Get all checked checkboxes */
				let selectedItems = $('input[name="entryId[]"]:checked');
				
				/* Form POST data init. */
				let requestInputs = {
					'action': clickedEl.attr('name'), // Add the clicked button
					'entryId[]': []
				};
				
				/* Get all checked checkboxes to pass to the jQuery AJAX request */
				selectedItems.each(function() {
					requestInputs['entryId[]'].push($(this).val());
				});
				
				/* Make the AJAX request */
				let ajax = $.ajax({
					url: submitUrl,
					type: 'POST',
					data: requestInputs
				});
				ajax.done(function(xhr) {
					if (typeof xhr.success === 'undefined' || typeof xhr.message === 'undefined') {
						return false;
					}
					
					/* Show an alert with the result */
					let messageType = xhr.success ? 'success' : 'error';
					pnAlert(xhr.message, messageType);
					
					/* Delete the row from the table */
					$.each(selectedItems, function() {
						if (clickedEl.attr('name') == 'deletion') {
							$(this).parentsUntil('tr').parent().remove();
						}
					});
					
					/* Reload data after row deletion */
					table.ajax.reload(null, false);
					
					return false;
				});
				ajax.fail(function(xhr) {
					let message = getJqueryAjaxError(xhr);
					if (message !== null) {
						pnAlert(message, 'error');
					}
					
					return false;
				});
			}

            @if ($xPanel->details_row)
				function registerDetailsRowButtonAction() {
					/* Add event listener for opening and closing details */
					$('#crudTable tbody').on('click', 'td .details-row-button', function() {
						var tr = $(this).closest('tr');
						var btn = $(this);
						var row = table.row( tr );
	
						if (row.child.isShown()) {
							
							/* This row is already open - close it */
							$(this).removeClass('fa-minus-square').addClass('fa-plus-square');
							$('div.table_row_slider', row.child()).slideUp(function() {
								row.child.hide();
								tr.removeClass('shown');
							});
							
						} else {
							
							/* Open this row */
							$(this).removeClass('fa-plus-square').addClass('fa-minus-square');
							
							/* Get the details with ajax */
							let ajax = $.ajax({
								url: '{{ request()->url() }}/'+btn.data('entry-id')+'/details',
								type: 'GET',
							});
							ajax.done(function(xhr) {
								row.child("<div class='table_row_slider'>" + xhr + "</div>", 'no-padding').show();
								tr.addClass('shown');
								$('div.table_row_slider', row.child()).slideDown();
								registerDeleteButtonAction();
							});
							ajax.fail(function(xhr) {
								row.child("<div class='table_row_slider'>{{ trans('admin.details_row_loading_error') }}</div>").show();
								tr.addClass('shown');
								$('div.table_row_slider', row.child()).slideDown();
							});
							
						}
					});
				}
	
				registerDetailsRowButtonAction();
            @endif

        });

		/**
		 * Add Thousands Separator (for DataTable Info)
		 * @param nStr
		 * @param separator
		 * @returns {*}
		 */
		function addThousandsSeparator(nStr, separator = ',') {
			nStr += '';
			nStr = nStr.replace(separator, '');
			var x = nStr.split('.');
			var x1 = x[0];
			var x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + separator + '$2');
			}
			return x1 + x2;
		}
    </script>

    {{-- CRUD LIST CONTENT - crud_list_scripts stack --}}
    @stack('crud_list_scripts')
@endsection

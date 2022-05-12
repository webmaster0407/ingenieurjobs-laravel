{{-- Modal Change Country --}}
<div class="modal fade modalHasList" id="selectCountry" tabindex="-1" role="dialog" aria-labelledby="selectCountryLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			
			<div class="modal-header px-3">
				<h4 class="modal-title uppercase fw-bold" id="selectCountryLabel">
					<i class="far fa-map"></i> {{ t('Select a Country') }}
				</h4>
				
				<button type="button" class="close" data-bs-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">{{ t('Close') }}</span>
				</button>
			</div>
			
			<div class="modal-body">
				<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2">
					
					@if (isset($countries))
						@foreach ($countries as $code => $country)
							<div class="col mb-1 cat-list">
								<?php
								$countryUrl = dmUrl($country, '/', true, !((bool)config('plugins.domainmapping.installed')));
								?>
								<img src="{{ url('images/blank.gif') . getPictureVersion() }}"
									 class="flag flag-{{ $country->get('icode') }}"
									 style="margin-bottom: 4px; margin-right: 5px;"
								>
								<a href="{{ $countryUrl }}" data-bs-toggle="tooltip" data-bs-custom-class="modal-tooltip" title="{{ $country->get('name') }}">
									{{ Str::limit($country->get('name'), 21) }}
								</a>
							</div>
						@endforeach
					@endif
				
				</div>
			</div>
		
		</div>
	</div>
</div>

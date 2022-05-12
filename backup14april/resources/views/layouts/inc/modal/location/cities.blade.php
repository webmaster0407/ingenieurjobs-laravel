@if (isset($languageCode, $unWantedInputs))
	@if ($cities->count() > 0)
		<div class="row row-cols-md-3 row-cols-sm-2 row-cols-1">
			<?php
			$cityQueryArray = $queryArray = (isset($currSearch) && is_array($currSearch)) ? $currSearch : [];
			?>
			<div class="col mb-1 list-link list-unstyled">
				<?php
				if (isset($queryArray['distance'])) {
					unset($queryArray['distance']);
				}
				?>
				<a href="{{ \App\Helpers\UrlGen::search($queryArray, $unWantedInputs) }}">
					{{ t('All Cities', [], 'global', $languageCode) }}
				</a>
			</div>
			@foreach($cities as $city)
				<div class="col mb-1 list-link list-unstyled">
					@if (isset($cityId) && $cityId == $city->id)
						<strong>{{ $city->name }}</strong>
					@else
						<?php
						$cityQueryArray = array_merge($cityQueryArray, ['l' => $city->id]);
						?>
						<a href="{{ \App\Helpers\UrlGen::search($cityQueryArray, $unWantedInputs) }}"
						   data-bs-toggle="tooltip"
						   data-bs-custom-class="modal-tooltip"
						   title="{{ $city->name }}"
						>
							{{ Str::limit($city->name, 21) }}
						</a>
					@endif
				</div>
			@endforeach
		</div>
	@else
		<div class="row">
			<div class="col-12">
				@if (isset($adminCode) && !empty($adminCode))
					{{ t('no_cities_found', [], 'global', $languageCode) }}
				@else
					{{ t('select_a_location', [], 'global', $languageCode) }}
				@endif
			</div>
		</div>
	@endif
@endif
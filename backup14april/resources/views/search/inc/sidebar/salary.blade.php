<?php
// Clear Filter Button
$clearMinSalaryFilterBtn = \App\Helpers\UrlGen::getMinSalaryFilterClearLink($cat ?? null, $city ?? null);
$clearMaxSalaryFilterBtn = \App\Helpers\UrlGen::getMaxSalaryFilterClearLink($cat ?? null, $city ?? null);
?>
{{-- Salary (Min) --}}
<div class="list-filter">
	<h5 class="list-title">
		<span class="fw-bold">
			{{ t('min_salary_range') }}
		</span> {!! $clearMinSalaryFilterBtn !!}
	</h5>
	<div class="filter-salary filter-content number-range-slider-wrapper">
		<form role="form" class="form-inline" action="{{ request()->url() }}" method="GET">
			<?php $i = 0; ?>
			@foreach(request()->except(['page', 'minSalary', '_token']) as $key => $value)
				@if (is_array($value))
					@foreach($value as $k => $v)
						@if (is_array($v))
							@foreach($v as $ik => $iv)
								@continue(is_array($iv))
								<input type="hidden" name="{{ $key.'['.$k.']['.$ik.']' }}" value="{{ $iv }}">
							@endforeach
						@else
							<input type="hidden" name="{{ $key.'['.$k.']' }}" value="{{ $v }}">
						@endif
					@endforeach
				@else
					<input type="hidden" name="{{ $key }}" value="{{ $value }}">
				@endif
			@endforeach
			<div class="row px-1 gx-1 gy-1">
				<div class="col-12 mb-3 mt-3 number-range-slider" id="minSalaryRangeSlider"></div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<input type="number"
						   min="0"
						   id="minSalaryMin"
						   name="minSalary[min]"
						   class="form-control"
						   placeholder="{{ t('Min') }}"
						   value="{{ request()->get('minSalary')['min'] ?? null }}"
					>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<input type="number"
						   min="0"
						   id="minSalaryMax"
						   name="minSalary[max]"
						   class="form-control"
						   placeholder="{{ t('Max') }}"
						   value="{{ request()->get('minSalary')['max'] ?? null }}"
					>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<button class="btn btn-default btn-block" type="submit">{{ t('GO') }}</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div style="clear:both"></div>

{{-- Salary (Max) --}}
<div class="list-filter">
	<h5 class="list-title">
		<span class="fw-bold">
			{{ t('max_salary_range') }}
		</span> {!! $clearMaxSalaryFilterBtn !!}
	</h5>
	<div class="filter-salary filter-content number-range-slider-wrapper">
		<form role="form" class="form-inline" action="{{ request()->url() }}" method="GET">
			<?php $i = 0; ?>
			@foreach(request()->except(['page', 'maxSalary', '_token']) as $key => $value)
				@if (is_array($value))
					@foreach($value as $k => $v)
						@if (is_array($v))
							@foreach($v as $ik => $iv)
								@continue(is_array($iv))
								<input type="hidden" name="{{ $key.'['.$k.']['.$ik.']' }}" value="{{ $iv }}">
							@endforeach
						@else
							<input type="hidden" name="{{ $key.'['.$k.']' }}" value="{{ $v }}">
						@endif
					@endforeach
				@else
					<input type="hidden" name="{{ $key }}" value="{{ $value }}">
				@endif
			@endforeach
			<div class="row px-1 gx-1 gy-1">
				<div class="col-12 mb-3 mt-3 number-range-slider" id="maxSalaryRangeSlider"></div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<input type="number"
						   min="0"
						   id="maxSalaryMin"
						   name="maxSalary[min]"
						   class="form-control"
						   placeholder="{{ t('Min') }}"
						   value="{{ request()->get('maxSalary')['min'] ?? null }}"
					>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<input type="number"
						   min="0"
						   id="maxSalaryMax"
						   name="maxSalary[max]"
						   class="form-control"
						   placeholder="{{ t('Max') }}"
						   value="{{ request()->get('maxSalary')['max'] ?? null }}"
					>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<button class="btn btn-default btn-block" type="submit">{{ t('GO') }}</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div style="clear:both"></div>

@section('after_scripts')
	@parent
	<link href="{{ url('assets/plugins/noUiSlider/15.5.0/nouislider.css') }}" rel="stylesheet">
	<style>
		/* Hide Arrows From Input Number */
		/* Chrome, Safari, Edge, Opera */
		.number-range-slider-wrapper input::-webkit-outer-spin-button,
		.number-range-slider-wrapper input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}
		/* Firefox */
		.number-range-slider-wrapper input[type=number] {
			-moz-appearance: textfield;
		}
	</style>
@endsection
@section('after_scripts')
	@parent
	<script src="{{ url('assets/plugins/noUiSlider/15.5.0/nouislider.js') }}"></script>
	@php
		$minSalary = (int)config('settings.list.min_salary', 0);
		$maxSalary = (int)config('settings.list.max_salary', 10000);
		$salarySliderStep = (int)config('settings.list.salary_slider_step', 50);
		
		$startMinSalary = (int)(request()->get('minSalary')['min'] ?? $minSalary);
		$endMinSalary = (int)(request()->get('minSalary')['max'] ?? $maxSalary);
		$startMaxSalary = (int)(request()->get('maxSalary')['min'] ?? $minSalary);
		$endMaxSalary = (int)(request()->get('maxSalary')['max'] ?? $maxSalary);
	@endphp
	<script>
		$(document).ready(function ()
		{
			let minSalary = {{ $minSalary }};
			let maxSalary = {{ $maxSalary }};
			let salarySliderStep = {{ $salarySliderStep }};
			
			{{-- Min Salary --}}
			let startMinSalary = {{ $startMinSalary }};
			let endMinSalary = {{ $endMinSalary }};
			
			let minSalaryRangeSliderEl = document.getElementById('minSalaryRangeSlider');
			noUiSlider.create(minSalaryRangeSliderEl, {
				connect: true,
				start: [startMinSalary, endMinSalary],
				step: salarySliderStep,
				keyboardSupport: true,     			  /* Default true */
				keyboardDefaultStep: 5,    			  /* Default 10 */
				keyboardPageMultiplier: 5, 			  /* Default 5 */
				keyboardMultiplier: salarySliderStep, /* Default 1 */
				range: {
					'min': minSalary,
					'max': maxSalary
				}
			});
			
			let minSalaryMinEl = document.getElementById('minSalaryMin');
			let minSalaryMaxEl = document.getElementById('minSalaryMax');
			
			minSalaryRangeSliderEl.noUiSlider.on('update', function (values, handle) {
				let value = values[handle];
				
				if (handle) {
					minSalaryMaxEl.value = Math.round(value);
				} else {
					minSalaryMinEl.value = Math.round(value);
				}
			});
			minSalaryMinEl.addEventListener('change', function () {
				minSalaryRangeSliderEl.noUiSlider.set([this.value, null]);
			});
			minSalaryMaxEl.addEventListener('change', function () {
				if (this.value <= maxSalary) {
					minSalaryRangeSliderEl.noUiSlider.set([null, this.value]);
				}
			});
			
			{{-- Max Salary --}}
			let startMaxSalary = {{ $startMaxSalary }};
			let endMaxSalary = {{ $endMaxSalary }};
			
			let maxSalaryRangeSliderEl = document.getElementById('maxSalaryRangeSlider');
			noUiSlider.create(maxSalaryRangeSliderEl, {
				connect: true,
				start: [startMaxSalary, endMaxSalary],
				step: salarySliderStep,
				keyboardSupport: true,     			  /* Default true */
				keyboardDefaultStep: 5,    			  /* Default 10 */
				keyboardPageMultiplier: 5, 			  /* Default 5 */
				keyboardMultiplier: salarySliderStep, /* Default 1 */
				range: {
					'min': minSalary,
					'max': maxSalary
				}
			});
			
			let maxSalaryMinEl = document.getElementById('maxSalaryMin');
			let maxSalaryMaxEl = document.getElementById('maxSalaryMax');
			
			maxSalaryRangeSliderEl.noUiSlider.on('update', function (values, handle) {
				let value = values[handle];
				
				if (handle) {
					maxSalaryMaxEl.value = Math.round(value);
				} else {
					maxSalaryMinEl.value = Math.round(value);
				}
			});
			maxSalaryMinEl.addEventListener('change', function () {
				maxSalaryRangeSliderEl.noUiSlider.set([this.value, null]);
			});
			maxSalaryMaxEl.addEventListener('change', function () {
				if (this.value <= maxSalary) {
					maxSalaryRangeSliderEl.noUiSlider.set([null, this.value]);
				}
			});
		});
	</script>
@endsection
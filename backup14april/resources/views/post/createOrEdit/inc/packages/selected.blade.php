@if (isset($selectedPackage, $paymentMethods) and !empty($selectedPackage) and $paymentMethods->count() > 0)
							
	<input class="form-check-input package-selection hide"
		   type="radio"
		   name="package_id"
		   id="packageId-{{ $selectedPackage->id }}"
		   value="{{ $selectedPackage->id }}"
		   data-name="{{ $selectedPackage->name }}"
		   data-currencysymbol="{{ $selectedPackage->currency->symbol }}"
		   data-currencyinleft="{{ $selectedPackage->currency->in_left }}" checked
	>
	<p id="price-{{ $selectedPackage->id }}" class="hide">
		@if ($selectedPackage->currency->in_left == 1)
			<span class="price-currency">{!! $selectedPackage->currency->symbol !!}</span>
		@endif
		<span class="price-int">{{ $selectedPackage->price }}</span>
		@if ($selectedPackage->currency->in_left == 0)
			<span class="price-currency">{!! $selectedPackage->currency->symbol !!}</span>
		@endif
	</p>
	
	<table id="packagesTable" class="table table-hover checkboxtable mb-0">
		<tr>
			<td class="text-start align-middle p-3 border-top-0">
				@includeFirst([
					config('larapen.core.customizedViewPath') . 'post.createOrEdit.inc.payment-methods',
					'post.createOrEdit.inc.payment-methods'
				])
			</td>
			<td class="text-end align-middle p-3 border-top-0">
				<p class="mb-0">
					<strong>
						{{ t('Payable Amount') }}:
						<span class="price-currency amount-currency currency-in-left" style="display: none;"></span>
						<span class="payable-amount">0</span>
						<span class="price-currency amount-currency currency-in-right" style="display: none;"></span>
					</strong>
				</p>
			</td>
		</tr>
	</table>
	
	@includeFirst([
		config('larapen.core.customizedViewPath') . 'post.createOrEdit.inc.payment-methods.plugins',
		'post.createOrEdit.inc.payment-methods.plugins'
	])
	
@endif
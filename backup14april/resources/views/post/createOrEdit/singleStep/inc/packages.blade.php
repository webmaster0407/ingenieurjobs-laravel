@if (isset($paymentMethods) and $paymentMethods->count() > 0)
	@if (isset($selectedPackage) and !empty($selectedPackage))
		
		<?php $currentPackagePrice = $selectedPackage->price; ?>
		<div class="content-subheading">
			<i class="fas fa-wallet"></i>
			<strong>{{ t('Payment') }}</strong>
		</div>
		
		<div class="col-md-12 page-content mb-4">
			<div class="inner-box">
				
				<div class="row">
					<div class="col-sm-12">
						
						<div class="form-group mb-0">
							<fieldset>
								
								@includeFirst([
									config('larapen.core.customizedViewPath') . 'post.createOrEdit.inc.packages.selected',
									'post.createOrEdit.inc.packages.selected'
								])
							
							</fieldset>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	
	@else
		
		@if (isset($packages) and $packages->count() > 0)
			<div class="content-subheading">
				<i class="fas fa-tags"></i>
				<strong>{{ t('Packages') }}</strong>
			</div>
			
			<div class="col-md-12 page-content mb-4">
				<div class="inner-box">
					
					<div class="row">
						<div class="col-sm-12">
							<fieldset>
								
								@includeFirst([
									config('larapen.core.customizedViewPath') . 'post.createOrEdit.inc.packages',
									'post.createOrEdit.inc.packages'
								])
							
							</fieldset>
						
						</div>
					</div>
				</div>
			</div>
		@endif
		
	@endif
@endif

@section('after_styles')
	@parent
@endsection

@section('after_scripts')
	@parent
	<script>
		@if (isset($packages) and isset($paymentMethods) and $packages->count() > 0 and $paymentMethods->count() > 0)
		
			var currentPackagePrice = {{ isset($currentPackagePrice) ? $currentPackagePrice : 0 }};
			var currentPaymentIsActive = {{ isset($currentPaymentIsActive) ? $currentPaymentIsActive : 0 }};
			$(document).ready(function ()
			{
				/* Show price & Payment Methods */
				var selectedPackage = $('input[name=package_id]:checked').val();
				var packagePrice = getPackagePrice(selectedPackage);
				var packageCurrencySymbol = $('input[name=package_id]:checked').data('currencysymbol');
				var packageCurrencyInLeft = $('input[name=package_id]:checked').data('currencyinleft');
				var paymentMethod = $('#paymentMethodId').find('option:selected').data('name');
				showAmount(packagePrice, packageCurrencySymbol, packageCurrencyInLeft);
				showPaymentSubmitButton(currentPackagePrice, packagePrice, currentPaymentIsActive, paymentMethod);
				
				/* Select a Package */
				$('.package-selection').click(function () {
					selectedPackage = $(this).val();
					packagePrice = getPackagePrice(selectedPackage);
					packageCurrencySymbol = $(this).data('currencysymbol');
					packageCurrencyInLeft = $(this).data('currencyinleft');
					showAmount(packagePrice, packageCurrencySymbol, packageCurrencyInLeft);
					showPaymentSubmitButton(currentPackagePrice, packagePrice, currentPaymentIsActive, paymentMethod);
				});
				
				/* Select a Payment Method */
				$('#paymentMethodId').on('change', function () {
					paymentMethod = $(this).find('option:selected').data('name');
					showPaymentSubmitButton(currentPackagePrice, packagePrice, currentPaymentIsActive, paymentMethod);
				});
				
				/* Form Default Submission */
				$('#submitPostForm').on('click', function (e) {
					e.preventDefault();
					
					if (packagePrice <= 0) {
						$('#postForm').submit();
					}
					
					return false;
				});
			});
		
		@endif
		
		/* Show or Hide the Payment Submit Button */
		/* NOTE: Prevent Package's Downgrading */
		/* Hide the 'Skip' button if Package price > 0 */
		function showPaymentSubmitButton(currentPackagePrice, packagePrice, currentPaymentIsActive, paymentMethod)
		{
			/* This feature is related to the Multi Step Form */
			return false;
		}
	</script>
@endsection
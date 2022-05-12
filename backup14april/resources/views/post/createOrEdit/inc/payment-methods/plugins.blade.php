@if (isset($paymentMethods) and $paymentMethods->count() > 0)
	{{-- Payment Plugins --}}
	<?php $hasCcBox = 0; ?>
	@foreach($paymentMethods as $paymentMethod)
		@if (view()->exists('payment::' . $paymentMethod->name))
			@include('payment::' . $paymentMethod->name, [$paymentMethod->name . 'PaymentMethod' => $paymentMethod])
		@endif
		<?php if ($paymentMethod->has_ccbox == 1 && $hasCcBox == 0) $hasCcBox = 1; ?>
	@endforeach
@endif
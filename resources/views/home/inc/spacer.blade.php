<?php
$hideOnMobile = isset($hideOnMobile) ? $hideOnMobile : '';
?>
@if (isset($paddingTopExists))
	@if (isset($firstSection) && !$firstSection)
		<div class="p-0 mt-lg-4 mt-md-3 mt-3{{ $hideOnMobile }}"></div>
	@else
		@if (!$paddingTopExists)
			<div class="p-0 mt-lg-4 mt-md-3 mt-3{{ $hideOnMobile }}"></div>
		@endif
	@endif
@else
	<div class="p-0 mt-lg-4 mt-md-3 mt-3{{ $hideOnMobile }}"></div>
@endif
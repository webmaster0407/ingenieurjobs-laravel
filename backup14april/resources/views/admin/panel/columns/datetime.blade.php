{{-- localized datetime using jenssegers/date --}}
<td data-order="{{ $entry->{$column['name']} }}">
	<?php
	try {
		$dateColumnValue = (new \Illuminate\Support\Carbon($entry->{$column['name']}))->timezone(\App\Helpers\Date::getAppTimeZone());
	} catch (\Throwable $e) {
		$dateColumnValue = new \Illuminate\Support\Carbon($entry->{$column['name']});
	}
	?>
	{{ \App\Helpers\Date::format($dateColumnValue, 'datetime') }}
</td>
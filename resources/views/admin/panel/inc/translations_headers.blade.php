<div style="margin-left: {{ (15 * ($level - 1)) }}px">
	<h4>
		<?php
		// $header = ucfirst(str_replace(['_', '-'], ' ', trim($header)));
		$header = htmlentities($header);
		echo $header;
		?>
		<a class="toggle-inputs" href="#"><i class="glyphicon glyphicon-plus-sign"></i></a>
	</h4>
	<div class="lang-input-box ms-2">
		{!! $langFile->displayInputs($item, $parents, $header, $level) !!}
	</div>
</div>

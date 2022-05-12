<div class="header">
	<nav class="navbar fixed-top navbar-site navbar-light bg-light navbar-expand-md" role="navigation">
		<div class="container">
			
			<div class="navbar-identity p-sm-0">
				{{-- Logo --}}
				<a href="{{ url('/') }}" class="navbar-brand logo logo-title">
					<?php
					$logoImgStyle = 'width:auto; height:40px; float:left; margin:0 5px 0 0;';
					$logoImg = '<img src="' . url('images/logo.png') . '" style="' . $logoImgStyle . '"/>';
					try {
						if (is_link(public_path('storage'))) {
							if (\Storage::disk('public')->exists(config('larapen.core.logo'))) {
								$logoImg = '<img src="' . \Storage::disk('public')->url(config('larapen.core.logo')) . '" style="' . $logoImgStyle . '"/>';
							}
						}
					} catch (\Throwable $e) {}
					
					// Print Logo
					echo $logoImg;
					?>
				</a>
			</div>
			
			<div class="navbar-collapse collapse" id="navbarsDefault">
				<ul class="nav navbar-nav me-md-auto navbar-left"></ul>
				<ul class="nav navbar-nav ms-auto navbar-right"></ul>
			</div>
		
		</div>
	</nav>
</div>

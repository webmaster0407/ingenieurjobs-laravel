<?php

try {
	
	/* FILES */
	\File::deleteDirectory(app_path('Plugins/'));
	\File::deleteDirectory(base_path('packages/larapen/admin/src/config/'));
	\File::deleteDirectory(resource_path('lang/vendor/'));
	\File::deleteDirectory(public_path('vendor/adminlte/'));
	
	
	/* DATABASE */
	// ...
	
} catch (\Exception $e) {
}

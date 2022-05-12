<?php

try {
	
	/* FILES */
	\File::deleteDirectory(base_path('packages/larapen/admin/'));
	\File::deleteDirectory(public_path('vendor/admin/'));
	\File::deleteDirectory(public_path('vendor/admin-theme/'));
	\File::deleteDirectory(public_path('vendor/icon-fonts/'));
	\File::deleteDirectory(resource_path('views/vendor/admin/'));
	
	
	/* DATABASE */
	
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}

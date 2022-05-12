<?php

try {
	
	/* FILES */
	\File::delete(app_path('Macros/EloquentBuilderMacros.php'));
	\File::delete(app_path('Macros/QueryBuilderMacros.php'));
	
	
	/* DATABASE */
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}

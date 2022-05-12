<?php

try {
	
	/* FILES */
	if (\File::exists(storage_path('app/public/resumes/'))) {
		\File::moveDirectory(storage_path('app/public/resumes/'), storage_path('app/private/resumes/'), true);
	}
	
	
	/* DATABASE */
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}

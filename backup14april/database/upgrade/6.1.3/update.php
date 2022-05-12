<?php

try {
	
	/* FILES */
	\File::delete(app_path('Http/Middleware/CheckBrowserLanguage.php'));
	\File::delete(app_path('Http/Middleware/CheckCountryLanguage.php'));
	\File::delete(app_path('Http/Middleware/SetAppLocale.php'));
	
	/* DATABASE */
	
} catch (\Exception $e) {}





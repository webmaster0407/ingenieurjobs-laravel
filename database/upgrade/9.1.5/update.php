<?php

try {
	
	/* FILES */
	\File::delete(app_path('Console/Commands/AdsClear.php'));
	\File::delete(app_path('Http/Controllers/Web/Locale/SetLocaleController.php'));
	\File::delete(app_path('Helpers/ArrayHelper.php'));
	
	
	/* DATABASE */
	\Schema::dropIfExists('sessions');
	if (!\Schema::hasTable('sessions')) {
		\Schema::create('sessions', function ($table) {
			$table->string('id')->primary();
			$table->foreignId('user_id')->nullable()->index();
			$table->string('ip_address', 45)->nullable();
			$table->text('user_agent')->nullable();
			$table->text('payload');
			$table->integer('last_activity')->index();
		});
	}
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}

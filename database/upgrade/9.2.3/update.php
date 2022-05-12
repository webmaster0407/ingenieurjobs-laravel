<?php

try {
	
	/* FILES */
	
	
	/* DATABASE */
	if (!\Illuminate\Support\Facades\Schema::hasColumn('payments', 'currency_code')) {
		\Illuminate\Support\Facades\Schema::table('payments', function ($table) {
			$table->string('currency_code', 3)->nullable()->after('amount');
		});
	}
	
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}

<?php

try {
	
	/* FILES */
	
	/* DATABASE */
	if (!\Schema::hasColumn('advertising', 'integration')) {
		\Schema::table('advertising', function ($table) {
			$table->string('integration', 50)->nullable()->comment('unitSlot or autoFit')->after('id');
		});
	}
	if (!\Schema::hasColumn('advertising', 'is_responsive')) {
		\Schema::table('advertising', function ($table) {
			$table->boolean('is_responsive')->nullable()->default(false)->after('integration');
		});
	}
	if (!\Schema::hasColumn('advertising', 'description')) {
		\Schema::table('advertising', function ($table) {
			$table->string('description', 255)->nullable()->comment('Translated in the languages files')->after('provider_name');
		});
	}
	
	if (\Schema::hasColumn('advertising', 'integration')) {
		\DB::table('advertising')->whereIn('slug', ['top', 'bottom'])->update([
			'integration' => 'unitSlot',
			'description' => 'advertising_unitSlot_hint',
		]);
	}
	$advertising = \App\Models\Advertising::withoutGlobalScopes([\App\Models\Scopes\ActiveScope::class])
		->where('slug', 'auto')
		->first();
	if (empty($advertising)) {
		$advertisingData = [
			'slug'                => 'auto',
			'integration'         => 'autoFit',
			'is_responsive'       => 1,
			'provider_name'       => 'Google AdSense',
			'description'         => 'advertising_autoFit_hint',
			'tracking_code_large' => null,
			'active'              => 0,
		];
		$advertising = \App\Models\Advertising::create($advertisingData);
	}
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}





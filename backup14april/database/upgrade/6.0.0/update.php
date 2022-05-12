<?php

try {
	
	/* FILES */
	\File::delete(app_path('Http/Controllers/Admin/SubCategoryController.php'));
	\File::delete(app_path('Http/Controllers/Post/CreateOrEdit/Traits/PaymentTrait.php'));
	\File::delete(config_path('larapen/routes.php'));
	\File::delete(resource_path('views/post/createOrEdit/inc/form-plugins.blade.php'));
	\File::delete(resource_path('views/search/serp.blade.php'));
	\File::delete(resource_path('views/search/inc/fields.blade.php'));
	
	
	/* DATABASE */
	\DB::table('settings')->where('key', '=', 'single')->update([
		'name'        => 'Ads (Form & Single Page)',
		'description' => 'Ads (Form & Single Page) Options',
	]);
	if (!\Schema::hasColumn('payments', 'amount')) {
		\Schema::table('payments', function ($table) {
			$table->unsignedDecimal('amount', 10, 2)->default(0.00)->after('transaction_id');
		});
	}
	if (\Schema::hasColumn('payments', 'amount')) {
		$payments = \App\Models\Payment::with(['package']);
		if ($payments->count() > 0) {
			foreach ($payments->cursor() as $payment) {
				if (isset($payment->package) && !empty($payment->package)) {
					$payment->amount = $payment->package->price;
				} else {
					$payment->amount = 0;
				}
				$payment->save();
			}
		}
	}
	\Schema::table('packages', function ($table) {
		$table->text('description')->nullable()->change();
	});
	if (!\Schema::hasColumn('packages', 'promo_duration')) {
		\Schema::table('packages', function ($table) {
			$table->integer('promo_duration')->nullable()->default(30)->comment('In days')->after('currency_code');
		});
	}
	if (!\Schema::hasColumn('packages', 'pictures_limit')) {
		\Schema::table('packages', function ($table) {
			$table->integer('pictures_limit')->nullable()->default(0)->after('duration');
		});
	}
	if (!\Schema::hasColumn('packages', 'facebook_ads')) {
		\Schema::table('packages', function ($table) {
			$table->boolean('facebook_ads')->nullable()->default(false)->after('description');
		});
	}
	if (!\Schema::hasColumn('packages', 'google_ads')) {
		\Schema::table('packages', function ($table) {
			$table->boolean('google_ads')->nullable()->default(false)->after('facebook_ads');
		});
	}
	if (!\Schema::hasColumn('packages', 'twitter_ads')) {
		\Schema::table('packages', function ($table) {
			$table->boolean('twitter_ads')->nullable()->default(false)->after('google_ads');
		});
	}
	if (!\Schema::hasColumn('packages', 'recommended')) {
		\Schema::table('packages', function ($table) {
			$table->boolean('recommended')->nullable()->default(false)->after('twitter_ads');
		});
	}
	
	$languages = \App\Models\Language::query()->get();
	if ($languages->count() > 0) {
		\Illuminate\Support\Facades\DB::table('meta_tags')->where('page', 'pricing')->delete();
		$translationOf = null;
		foreach ($languages as $lang) {
			$metaTag = [
				'page'        => 'pricing',
				'title'       => 'Pricing - {app.name}',
				'description' => 'Pricing - {app.name}',
				'keywords'    => '{app.name}, {country.name}, pricing, free ads, classified, ads, script, app, premium ads',
				'active'      => 1,
			];
			if (\Schema::hasColumn('meta_tags', 'translation_lang') && \Schema::hasColumn('meta_tags', 'translation_lang')) {
				$metaTag = [
					'translation_lang' => $lang->abbr,
					'translation_of'   => 0,
					'page'             => 'pricing',
					'title'            => 'Pricing - {app.name}',
					'description'      => 'Pricing - {app.name}',
					'keywords'         => '{app.name}, {country.name}, pricing, free ads, classified, ads, script, app, premium ads',
					'active'           => 1,
				];
			}
			$metaTagId = \Illuminate\Support\Facades\DB::table('meta_tags')->insertGetId($metaTag);
			if ($lang->abbr == config('appLang.abbr')) {
				$translationOf = $metaTagId;
			}
		}
		if (!empty($translationOf)) {
			if (\Schema::hasColumn('meta_tags', 'translation_lang') && \Schema::hasColumn('meta_tags', 'translation_lang')) {
				$affected = \Illuminate\Support\Facades\DB::table('meta_tags')
					->where('page', 'pricing')
					->update(['translation_of' => $translationOf]);
			}
		}
	}
	
	$params = [
		'adjacentTable' => 'categories',
		'nestedTable'   => 'categories',
	];
	$transformer = new \App\Helpers\Categories\AdjacentToNested($params);
	try {
		$transformer->getAndSetAdjacentItemsIds();
		$transformer->convertChildrenRecursively(0);
		$transformer->setNodesDepth();
	} catch (\Exception $e) {
		dd($e);
	}
	
	// Create the Nested Set indexes ('lft', 'rgt' & 'depth')
	$transformer->createNestedSetIndexes();
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}





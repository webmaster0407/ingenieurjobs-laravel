<?php

try {
	
	/* FILES */
	\File::delete(database_path('migrations/2020_10_13_045427_create_time_zones_table.php'));
	\File::delete(database_path('seeders/TimeZoneSeeder.php'));
	\File::delete(app_path('Models/TimeZone.php'));
	\File::delete(app_path('Observers/TimeZoneObserver.php'));
	\File::delete(app_path('Http/Controllers/Admin/TimeZoneController.php'));
	\File::delete(app_path('Http/Requests/Admin/TimeZoneRequest.php'));
	
	\File::delete(database_path('migrations/2020_10_13_045430_create_messages_table.php'));
	\File::delete(app_path('Models/Message.php'));
	\File::delete(app_path('Models/Traits/ConversationTrait.php'));
	\File::delete(app_path('Observers/MessageObserver.php'));
	\File::delete(app_path('Http/Controllers/Account/ConversationsController.php'));
	\File::delete(app_path('Http/Controllers/Ajax/ConversationController.php'));
	\File::delete(resource_path('views/account/conversations.blade.php'));
	\File::delete(resource_path('views/account/messages.blade.php'));
	\File::delete(resource_path('views/account/inc/reply-message.blade.php'));
	
	\File::delete(database_path('migrations/2020_10_13_045430_create_payments_table.php'));
	\File::delete(database_path('migrations/2020_10_13_045430_create_pictures_table.php'));
	
	
	/* DATABASE */
	if (\Schema::hasColumn('currencies', 'font_arial')) {
		\Schema::table('currencies', function ($table) {
			$table->renameColumn('font_arial', 'symbol');
		});
	}
	if (\Schema::hasColumn('currencies', 'html_entity')) {
		\Schema::table('currencies', function ($table) {
			$table->renameColumn('html_entity', 'html_entities');
		});
	}
	if (\Schema::hasColumn('currencies', 'font_code2000')) {
		\Schema::table('currencies', function ($table) {
			$table->dropColumn('font_code2000');
		});
	}
	if (\Schema::hasColumn('currencies', 'unicode_decimal')) {
		\Schema::table('currencies', function ($table) {
			$table->dropColumn('unicode_decimal');
		});
	}
	if (\Schema::hasColumn('currencies', 'unicode_hex')) {
		\Schema::table('currencies', function ($table) {
			$table->dropColumn('unicode_hex');
		});
	}
	
	if (!\Schema::hasColumn('languages', 'date_format')) {
		\Schema::table('languages', function ($table) {
			$table->string('date_format', 100)->nullable()->after('russian_pluralization');
		});
	}
	if (!\Schema::hasColumn('languages', 'datetime_format')) {
		\Schema::table('languages', function ($table) {
			$table->string('datetime_format', 100)->nullable()->after('date_format');
		});
	}
	
	if (!\Schema::hasColumn('countries', 'time_zone')) {
		\Schema::table('countries', function ($table) {
			$table->string('time_zone', 50)->nullable()->after('equivalent_fips_code');
		});
	}
	if (!\Schema::hasColumn('countries', 'date_format')) {
		\Schema::table('countries', function ($table) {
			$table->string('date_format', 100)->nullable()->after('time_zone');
		});
	}
	if (!\Schema::hasColumn('countries', 'datetime_format')) {
		\Schema::table('countries', function ($table) {
			$table->string('datetime_format', 100)->nullable()->after('date_format');
		});
	}
	if (!\Schema::hasColumn('users', 'time_zone')) {
		\Schema::table('users', function ($table) {
			$table->string('time_zone', 50)->nullable()->after('accept_marketing_offers');
		});
	}
	if (!\Schema::hasColumn('users', 'last_activity')) {
		\Schema::table('users', function ($table) {
			$table->datetime('last_activity')->nullable()->after('closed');
		});
	}
	\Schema::dropIfExists('time_zones');
	$permissions = \DB::table('permissions')->where('name', 'LIKE', 'time-zone-%')->delete();
	
	\Schema::dropIfExists('messages');
	if (!\Schema::hasTable('threads')) {
		\Schema::create('threads', function ($table) {
			$table->bigIncrements('id');
			$table->bigInteger('post_id')->unsigned()->nullable();
			$table->string('subject', 200)->nullable();
			$table->bigInteger('deleted_by')->unsigned()->nullable();
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["post_id"]);
		});
	}
	if (!\Schema::hasTable('threads_messages')) {
		\Schema::create('threads_messages', function ($table) {
			$table->bigIncrements('id');
			$table->bigInteger('thread_id')->unsigned()->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->mediumtext('body')->nullable();
			$table->string('filename', 200)->nullable();
			$table->bigInteger('deleted_by')->unsigned()->nullable();
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["thread_id"]);
			$table->index(["user_id"]);
		});
	}
	if (!\Schema::hasTable('threads_participants')) {
		\Schema::create('threads_participants', function ($table) {
			$table->bigIncrements('id');
			$table->bigInteger('thread_id')->unsigned()->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->timestamp('last_read')->nullable();
			$table->boolean('is_important')->nullable()->default('0');
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["thread_id"]);
			$table->index(["user_id"]);
		});
	}
	
} catch (\Exception $e) {
	dump($e->getMessage());
	dd('in ' . str_replace(base_path(), '', __FILE__));
}

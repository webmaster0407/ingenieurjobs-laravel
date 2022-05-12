<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertising', function (Blueprint $table) {
			$table->increments('id');
			$table->string('integration', 50)->nullable()->comment('unitSlot or autoFit');
			$table->boolean('is_responsive')->nullable()->default('0');
			$table->string('slug', 50);
			$table->string('provider_name', 100)->nullable();
			$table->string('description', 255)->nullable()->comment('Translated in the languages files');
			$table->text('tracking_code_large')->nullable();
			$table->text('tracking_code_medium')->nullable();
			$table->text('tracking_code_small')->nullable();
			$table->boolean('active')->unsigned()->nullable()->default('1');
			$table->unique(["slug"]);
			$table->index(["active"]);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('advertising');
	}
}

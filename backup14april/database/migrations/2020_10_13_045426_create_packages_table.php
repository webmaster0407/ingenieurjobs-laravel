<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function (Blueprint $table) {
			$table->increments('id');
			$table->text('name')->nullable()->comment('In country language');
			$table->text('short_name')->nullable()->comment('In country language');
			$table->enum('ribbon', ['red', 'orange', 'green'])->nullable();
			$table->boolean('has_badge')->unsigned()->nullable()->default('0');
			$table->decimal('price', 10, 2)->unsigned()->nullable();
			$table->string('currency_code', 3)->nullable();
			$table->integer('promo_duration')->nullable()->default('30')->comment('In days');
			$table->integer('duration')->unsigned()->nullable()->default('30')->comment('In days');
			$table->text('description')->nullable()->comment('In country language');
			$table->integer('facebook_ads_duration')->unsigned()->nullable()->default('0');
			$table->integer('google_ads_duration')->unsigned()->nullable()->default('0');
			$table->integer('twitter_ads_duration')->unsigned()->nullable()->default('0');
			$table->integer('linkedin_ads_duration')->unsigned()->nullable()->default('0');
			$table->boolean('recommended')->nullable()->default('0');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('lft')->unsigned()->nullable();
			$table->integer('rgt')->unsigned()->nullable();
			$table->integer('depth')->unsigned()->nullable();
			$table->boolean('active')->unsigned()->nullable()->default('0');
			$table->index(["lft"]);
			$table->index(["rgt"]);
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
		Schema::dropIfExists('packages');
	}
}

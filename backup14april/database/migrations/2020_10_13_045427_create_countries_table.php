<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function (Blueprint $table) {
			$table->increments('id');
			$table->char('code', 2);
			$table->char('iso3', 3)->nullable();
			$table->integer('iso_numeric')->unsigned()->nullable();
			$table->char('fips', 2)->nullable();
			$table->text('name')->nullable();
			$table->string('capital', 100)->nullable();
			$table->integer('area')->unsigned()->nullable();
			$table->integer('population')->unsigned()->nullable();
			$table->char('continent_code', 4)->nullable();
			$table->char('tld', 4)->nullable();
			$table->string('currency_code', 3)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('postal_code_format', 50)->nullable();
			$table->string('postal_code_regex', 200)->nullable();
			$table->string('languages', 50)->nullable();
			$table->string('neighbours', 50)->nullable();
			$table->string('equivalent_fips_code', 100)->nullable();
			$table->string('time_zone', 50)->nullable();
			$table->string('date_format', 100)->nullable();
			$table->string('datetime_format', 100)->nullable();
			$table->string('background_image', 255)->nullable();
			$table->enum('admin_type', ['0', '1', '2'])->nullable()->default('0');
			$table->boolean('admin_field_active')->unsigned()->nullable()->default('0');
			$table->boolean('active')->nullable()->default('1');
			$table->timestamps();
			$table->unique(["code"]);
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
		Schema::dropIfExists('countries');
	}
}

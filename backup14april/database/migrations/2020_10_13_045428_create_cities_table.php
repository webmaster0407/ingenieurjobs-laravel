<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('country_code', 2)->nullable();
			$table->text('name');
			$table->float('longitude')->nullable()->comment('longitude in decimal degrees (wgs84)');
			$table->float('latitude')->nullable()->comment('latitude in decimal degrees (wgs84)');
			$table->char('feature_class', 1)->nullable();
			$table->string('feature_code', 10)->nullable();
			$table->string('subadmin1_code', 100)->nullable();
			$table->string('subadmin2_code', 100)->nullable();
			$table->bigInteger('population')->nullable();
			$table->string('time_zone', 100)->nullable();
			$table->boolean('active')->nullable()->default('1');
			$table->timestamps();
			$table->index(["country_code"]);
			$table->index(["subadmin1_code"]);
			$table->index(["subadmin2_code"]);
			$table->index(["population"]);
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
		Schema::dropIfExists('cities');
	}
}

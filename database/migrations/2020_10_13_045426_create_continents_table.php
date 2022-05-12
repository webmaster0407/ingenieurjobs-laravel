<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContinentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('continents', function (Blueprint $table) {
			$table->increments('id');
			$table->string('code', 2);
			$table->string('name', 100);
			$table->boolean('active')->nullable()->default('1');
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
		Schema::dropIfExists('continents');
	}
}

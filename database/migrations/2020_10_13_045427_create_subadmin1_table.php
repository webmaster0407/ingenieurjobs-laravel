<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubadmin1Table extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subadmin1', function (Blueprint $table) {
			$table->increments('id');
			$table->string('code', 100);
			$table->string('country_code', 2)->nullable();
			$table->text('name');
			$table->boolean('active')->unsigned()->nullable()->default('1');
			$table->unique(["code"]);
			$table->index(["country_code"]);
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
		Schema::dropIfExists('subadmin1');
	}
}

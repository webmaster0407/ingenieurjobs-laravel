<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned();
			$table->string('name', 255);
			$table->string('logo', 255)->nullable();
			$table->text('description')->nullable();
			$table->string('country_code', 2)->nullable();
			$table->bigInteger('city_id')->unsigned()->nullable();
			$table->string('address', 255)->nullable();
			$table->string('phone', 60)->nullable();
			$table->string('fax', 60)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('website', 255)->nullable();
			$table->string('facebook', 200)->nullable();
			$table->string('twitter', 200)->nullable();
			$table->string('linkedin', 200)->nullable();
			$table->string('googleplus', 200)->nullable();
			$table->string('pinterest', 200)->nullable();
			$table->timestamps();
			$table->index(["user_id"]);
			$table->index(["country_code"]);
			$table->index(["city_id"]);
			$table->index(["created_at"]);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('companies');
	}
}

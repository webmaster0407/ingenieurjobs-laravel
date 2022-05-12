<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesectionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('home_sections', function (Blueprint $table) {
			$table->increments('id');
			$table->string('method', 100);
			$table->string('name', 100);
			$table->text('value')->nullable();
			$table->string('view', 200);
			$table->text('field')->nullable();
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('lft')->unsigned()->nullable();
			$table->integer('rgt')->unsigned()->nullable();
			$table->integer('depth')->unsigned()->nullable();
			$table->boolean('active')->unsigned()->nullable()->default('0');
			$table->unique(["method"]);
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
		Schema::dropIfExists('home_sections');
	}
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentmethodsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_methods', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->nullable();
			$table->string('display_name', 100)->nullable();
			$table->text('description')->nullable();
			$table->boolean('has_ccbox')->unsigned()->nullable()->default('0');
			$table->boolean('is_compatible_api')->nullable()->default('0');
			$table->text('countries')->nullable()->comment('Countries codes separated by comma.');
			$table->integer('lft')->unsigned()->nullable();
			$table->integer('rgt')->unsigned()->nullable();
			$table->integer('depth')->unsigned()->nullable();
			$table->integer('parent_id')->unsigned()->nullable()->default('0');
			$table->boolean('active')->nullable()->default('0');
			$table->index(["has_ccbox"]);
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
		Schema::dropIfExists('payment_methods');
	}
}

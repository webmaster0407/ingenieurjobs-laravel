<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlacklistTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blacklist', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->enum('type', ['domain', 'email', 'ip', 'word'])->nullable();
			$table->string('entry', 100)->default('');
			$table->index(["type", "entry"]);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('blacklist');
	}
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsmessagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads_messages', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('thread_id')->unsigned()->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->mediumtext('body')->nullable();
			$table->string('filename', 200)->nullable();
			$table->bigInteger('deleted_by')->unsigned()->nullable();
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["thread_id"]);
			$table->index(["user_id"]);
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
		Schema::dropIfExists('threads_messages');
	}
}

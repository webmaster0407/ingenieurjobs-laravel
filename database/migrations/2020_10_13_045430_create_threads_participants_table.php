<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsparticipantsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('threads_participants', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('thread_id')->unsigned()->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->timestamp('last_read')->nullable();
			$table->boolean('is_important')->nullable()->default('0');
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["thread_id"]);
			$table->index(["user_id"]);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('threads_participants');
	}
}

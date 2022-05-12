<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('post_id')->unsigned()->nullable();
			$table->integer('package_id')->unsigned()->nullable();
			$table->integer('payment_method_id')->unsigned()->nullable();
			$table->string('transaction_id', 255)->nullable()->comment('Transaction\'s ID at the Provider');
			$table->decimal('amount', 10, 2)->unsigned();
			$table->boolean('active')->unsigned()->nullable()->default('1');
			$table->timestamps();
			$table->index(["payment_method_id"]);
			$table->index(["package_id"]);
			$table->index(["post_id"]);
			$table->index(["active"]);
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
		Schema::dropIfExists('payments');
	}
}

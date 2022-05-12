<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('country_code', 2)->nullable();
			$table->string('language_code', 10)->nullable();
			$table->tinyInteger('user_type_id')->unsigned()->nullable();
			$table->integer('gender_id')->unsigned()->nullable();
			$table->string('name', 100);
			$table->string('photo', 255)->nullable();
			$table->string('about', 255)->nullable();
			$table->string('phone', 60)->nullable();
			$table->boolean('phone_hidden')->unsigned()->nullable()->default('0');
			$table->string('username', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password', 60)->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->boolean('is_admin')->unsigned()->nullable()->default('0');
			$table->boolean('can_be_impersonated')->unsigned()->nullable()->default('1');
			$table->boolean('disable_comments')->unsigned()->nullable()->default('0');
			$table->string('ip_addr', 50)->nullable();
			$table->string('provider', 50)->nullable()->comment('facebook, google, twitter, linkedin, ...');
			$table->string('provider_id', 50)->nullable()->comment('Provider User ID');
			$table->string('email_token', 32)->nullable();
			$table->string('phone_token', 32)->nullable();
			$table->boolean('verified_email')->unsigned()->nullable()->default('1');
			$table->boolean('verified_phone')->unsigned()->nullable()->default('1');
			$table->boolean('accept_terms')->nullable()->default('1');
			$table->boolean('accept_marketing_offers')->nullable()->default('1');
			$table->string('time_zone', 50)->nullable();
			$table->boolean('blocked')->unsigned()->nullable()->default('0');
			$table->boolean('closed')->unsigned()->nullable()->default('0');
			$table->datetime('last_activity')->nullable();
			$table->timestamp('last_login_at')->nullable();
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["country_code"]);
			$table->index(["gender_id"]);
			$table->index(["user_type_id"]);
			$table->index(["verified_email"]);
			$table->index(["verified_phone"]);
			$table->index(["username"]);
			$table->index(["phone"]);
			$table->index(["email"]);
			$table->index(["is_admin"]);
			$table->index(["can_be_impersonated"]);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}

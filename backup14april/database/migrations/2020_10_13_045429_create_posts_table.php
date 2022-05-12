<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('country_code', 2)->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->bigInteger('company_id')->unsigned()->nullable();
			$table->integer('category_id')->unsigned()->nullable();
			$table->integer('post_type_id')->unsigned()->nullable();
			$table->string('company_name', 200)->nullable();
			$table->text('company_description')->nullable();
			$table->string('logo', 255)->nullable();
			$table->string('title', 191);
			$table->text('description');
			$table->text('tags')->nullable();
			$table->decimal('salary_min', 10, 2)->unsigned()->nullable();
			$table->decimal('salary_max', 10, 2)->unsigned()->nullable();
			$table->integer('salary_type_id')->unsigned()->nullable()->default('1');
			$table->boolean('negotiable')->unsigned()->nullable()->default('0');
			$table->string('start_date', 100)->nullable();
			$table->string('application_url', 255)->nullable();
			$table->string('contact_name', 191)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('phone', 50)->nullable();
			$table->boolean('phone_hidden')->unsigned()->nullable()->default('0');
			$table->string('address', 191)->nullable();
			$table->bigInteger('city_id')->unsigned()->nullable();
			$table->float('lon')->nullable()->comment('longitude in decimal degrees (wgs84)');
			$table->float('lat')->nullable()->comment('latitude in decimal degrees (wgs84)');
			$table->string('ip_addr', 50)->nullable();
			$table->integer('visits')->unsigned()->nullable()->default('0');
			$table->string('email_token', 32)->nullable();
			$table->string('phone_token', 32)->nullable();
			$table->string('tmp_token', 32)->nullable();
			$table->boolean('verified_email')->unsigned()->nullable()->default('0');
			$table->boolean('verified_phone')->unsigned()->nullable()->default('1');
			$table->boolean('accept_terms')->nullable()->default('0');
			$table->boolean('accept_marketing_offers')->nullable()->default('0');
			$table->boolean('reviewed')->unsigned()->nullable()->default('0');
			$table->boolean('featured')->unsigned()->nullable()->default('0');
			$table->boolean('archived')->unsigned()->nullable()->default('0');
			$table->timestamp('archived_at')->nullable();
			$table->boolean('archived_manually')->unsigned()->nullable()->default('0');
			$table->timestamp('deletion_mail_sent_at')->nullable();
			$table->string('partner', 50)->nullable();
			$table->timestamp('deleted_at')->nullable();
			$table->timestamps();
			$table->index(["lon", "lat"]);
			$table->index(["country_code"]);
			$table->index(["user_id"]);
			$table->index(["category_id"]);
			$table->index(["title"]);
			$table->index(["contact_name"]);
			$table->index(["address"]);
			$table->index(["city_id"]);
			$table->index(["reviewed"]);
			$table->index(["salary_min", "salary_max"]);
			$table->index(["featured"]);
			$table->index(["post_type_id"]);
			$table->index(["verified_email"]);
			$table->index(["verified_phone"]);
			$table->index(["company_id"]);
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
		Schema::dropIfExists('posts');
	}
}

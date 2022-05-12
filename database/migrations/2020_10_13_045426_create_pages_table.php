<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->enum('type', ['standard', 'terms', 'privacy', 'tips']);
			$table->text('name')->nullable();
			$table->string('slug', 150)->nullable();
			$table->text('title')->nullable();
			$table->string('picture', 255)->nullable();
			$table->mediumtext('content')->nullable();
			$table->string('external_link', 255)->nullable();
			$table->string('name_color', 10)->nullable();
			$table->string('title_color', 10)->nullable();
			$table->boolean('target_blank')->unsigned()->nullable()->default('0');
			$table->text('seo_title')->nullable();
			$table->text('seo_description')->nullable();
			$table->text('seo_keywords')->nullable();
			$table->integer('lft')->unsigned()->nullable();
			$table->integer('rgt')->unsigned()->nullable();
			$table->integer('depth')->unsigned()->nullable();
			$table->boolean('excluded_from_footer')->unsigned()->nullable()->default('0');
			$table->boolean('active')->unsigned()->nullable()->default('1');
			$table->timestamps();
			$table->index(["slug"]);
			$table->index(["parent_id"]);
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
		Schema::dropIfExists('pages');
	}
}

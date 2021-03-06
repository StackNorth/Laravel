<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nickname');
			$table->string('email')->nullable();
			$table->string('website')->nullable();
			$table->text('content')->nullable();
			$table->integer('article_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article_comments');
	}

}

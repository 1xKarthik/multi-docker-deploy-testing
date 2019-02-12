<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('about', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('full_name', 100);
			$table->string('title')->nullable();
			$table->text('linkedin_url', 65535)->nullable();
			$table->text('github_url', 65535)->nullable();
			$table->integer('intro_id')->unsigned()->nullable()->index('intro_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('about');
	}

}

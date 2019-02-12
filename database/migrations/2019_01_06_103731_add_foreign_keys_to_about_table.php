<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAboutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('about', function(Blueprint $table)
		{
			$table->foreign('intro_id', 'about_intro_content_id_fk')->references('id')->on('intro_content')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('about', function(Blueprint $table)
		{
			$table->dropForeign('about_intro_content_id_fk');
		});
	}

}

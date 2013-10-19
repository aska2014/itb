<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoSpecsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('video_specs', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('title');

            $table->string('language');

            $table->integer('video_id')->unsigned();
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('CASCADE');

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
		Schema::drop('video_specs');
	}

}

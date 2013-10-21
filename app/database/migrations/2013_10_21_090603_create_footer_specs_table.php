<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterSpecsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footer_specs', function(Blueprint $table)
		{
			$table->increments('id');

            $table->text('part1');
            $table->text('part2');
            $table->text('part3');

            $table->string('language');

            $table->integer('footer_id')->unsigned();
            $table->foreign('footer_id')->references('id')->on('footer')->onDelete('CASCADE');

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
		Schema::drop('footer_specs');
	}

}

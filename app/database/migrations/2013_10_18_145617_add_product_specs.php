<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProductSpecs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('products', function(Blueprint $table)
        {
            $table->smallInteger('type');
        });


        Schema::table('product_specs', function(Blueprint $table)
        {
            $table->text('description');
            $table->text('specifications');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('products', function($table)
        {
            $table->dropColumn('type');
        });

        Schema::table('product_specs', function($table)
        {
            $table->dropColumn('description', 'specifications');
        });
	}

}
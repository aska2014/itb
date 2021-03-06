<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_info', function(Blueprint $table)
		{
            $table->string('mobile');

            $table->string('contact_email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_info', function(Blueprint $table)
		{
            $table->dropColumn('mobile');
		});
	}
}
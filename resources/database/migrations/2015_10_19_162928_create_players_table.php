<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('franchise_players', function(Blueprint $table)
		{
			$table->increments('id');
            $table->tinyInteger('user_id');
            $table->tinyInteger('franchise_id');
            $table->string('accredit_category', 20);
            $table->string('name_franchise');
            $table->string('name');
            $table->string('nationality');
            $table->string('personal_id', 19);
            $table->string('role');
            $table->string('date_of_birth');
            $table->string('country_of_birth');
            $table->string('mobile', 20);
            $table->string('passport_expiry');
            $table->string('noc_authority');
            $table->string('email');
            $table->string('photo');
            $table->string('attachment');
            $table->tinyInteger('status')->default('0');
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
		Schema::drop('franchise_players');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->string('name');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('full_address');
			$table->string('phone');
			$table->string('phone_home');
			$table->string('city');
			$table->string('state/postcode');
			$table->string('country');
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
		Schema::drop('clients');
	}

}

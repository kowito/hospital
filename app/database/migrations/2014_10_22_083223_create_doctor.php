<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 50)->default('');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('nickname', 100)->default('');
			$table->date('birthdate')->default('1970-01-01');
			$table->string('sex', 50)->default('');
			$table->string('age', 50)->default('');
			$table->string('phone');
			$table->text('address');
			$table->softDeletes();
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
		Schema::drop('doctor');
	}

}

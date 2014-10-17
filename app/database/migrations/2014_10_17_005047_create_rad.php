<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('xn_code',20);
			
			$table->string('title',50);
			$table->string('first_name');
			$table->string('last_name');
			
			$table->string('xlab_status');
			$table->string('xlab_note');
			$table->text('memo');
			$table->text('logs');
			$table->dateTime('case_entry',20);

			$table->boolean('confidential')->default(0);
			$table->boolean('status')->default(1);
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
		Schema::drop('rads');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLab extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lab', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lab_code', 20);

			$table->unsignedInteger('patient_id');
			$table->foreign('patient_id')->references('id')->on('patients');

			$table->boolean('status');
			$table->boolean('confidential');
			$table->text('lab_status');
			$table->text('lab_note');
			$table->text('memo');
			$table->text('logs');
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
		Schema::drop('lab');
	}

}

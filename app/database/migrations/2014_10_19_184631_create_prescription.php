<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('case_entry');
			$table->text('drug_list');
			$table->string('cash_total',20);

			$table->unsignedInteger('patient_id');
			$table->foreign('patient_id')->references('id')->on('patients');

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
		Schema::drop('prescriptions');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicalSupply extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medical_supply', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('drug_code');
			$table->string('drug_name');
			$table->string('drug_commonname');
			$table->string('drug_tradename');
			$table->string('drug_ingredient');
			$table->text('drug_usage');
			$table->text('drug_dose');
			$table->text('drug_package');
			$table->text('drug_period');
			$table->text('drug_price');
			$table->text('drug_cost');
			$table->text('drug_stock');
			$table->string('drug_status');
			$table->string('drug_note');
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
		Schema::drop('medical_supply');
	}

}

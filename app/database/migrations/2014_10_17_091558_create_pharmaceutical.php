<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmaceutical extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pharmaceuticals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('case_entry');
			$table->text('drug_list');
			$table->string('cash_total',20);
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
		Schema::drop('pharmaceuticals');
	}

}

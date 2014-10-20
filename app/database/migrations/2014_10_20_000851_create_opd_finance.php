<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpdFinance extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opd_finance', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('patient_id');
			$table->foreign('patient_id')->references('id')->on('patients');
			$table->boolean('status');
			$table->datetime('case_entry');
			$table->text('cash_list');
			$table->string('cash_total', 20);
			$table->text('cash_status');
			$table->text('cash_note');
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
		Schema::drop('opd_finance');
	}

}

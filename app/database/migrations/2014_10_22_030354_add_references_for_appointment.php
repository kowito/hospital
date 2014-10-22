<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddReferencesForAppointment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('appointment', function(Blueprint $table)
		{
			$table->unsignedInteger('type_id');
			$table->foreign('type_id')->references('id')->on('appointment_type');
			
			$table->unsignedInteger('employee_id');
			$table->foreign('employee_id')->references('id')->on('employees');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('appointment', function(Blueprint $table)
		{
			$table->dropColumn('type_id');
			$table->dropColumn('employee_id');
		});
	}

}

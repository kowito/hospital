<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatient extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('hn_code', 20);
			$table->string('an_code', 20);
			$table->string('ln_code', 20);
			$table->string('vn_code', 20);
			$table->string('hold_user');
			$table->string('title', 50)->default('ไม่ระบุ');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('nickname', 100)->default('ไม่ระบุ');
			$table->boolean('medical_status')->default(0);
			$table->string('medical_case')->default(0);
			$table->datetime('case_entry');
			$table->datetime('case_close');
			$table->text('case_cause');
			$table->string('doctor_on_case');
			$table->string('order2close', 10);
			$table->string('spec_IDC9', 100);
			$table->string('spec_IDC10', 100);
			$table->text('doctor_actions');
			$table->text('doctor_diagnosis');
			$table->text('doctor_comment');
			$table->boolean('mainlist_drugs')->default(0);
			$table->boolean('social_welfare')->default(0);
			$table->string('sex', 50);
			$table->string('age', 50);
			$table->string('height', 20)->default('');
			$table->string('weight', 20)->default('');
			$table->string('bmi_value', 20);
			$table->string('blood_group', 20);
			$table->string('blood_type', 20);
			$table->string('vital_temp', 20);
			$table->string('vital_bloodpressure', 20);
			$table->string('vital_heartbeat', 20);
			$table->text('additional_data');
			$table->string('lab_need', 10);
			$table->text('lab_list');
			$table->text('lab_results');
			$table->string('xray_need', 100);
			$table->text('xray_list');
			$table->text('xray_results');
			$table->text('drugs_list');
			$table->text('expense_list');
			$table->text('expense_total');
			$table->text('related_documents');
			$table->text('memo');
			$table->text('logs');
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
		Schema::drop('patient');
	}

}

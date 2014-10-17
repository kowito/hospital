<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerson extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('hn_code', 20)
			$table->string('an_code', 20)
			$table->string('ln_code', 20)
			$table->string('vn_code', 20)
			$table->string('hold_user')
			$table->string('title', 50)->default('')
			$table->string('first_name')
			$table->string('last_name')
			$table->string('nickname', 100)->default('')
			$table->boolean('medical_status', 20)->default(0)
			$table->text('medical_case')
			$table->string('social_welfare', 20)->default('')
			$table->string('national_ID', 20)
			$table->string('welfare_ID', 20)
			$table->string('passport_ID', 20)
			$table->string('foreigner_ID', 20)
			$table->string('hn_mom', 20)
			$table->date('birthdate')
			$table->string('birthdate_estimate', 20)->default('')
			$table->string('sex', 50)->default('')
			$table->string('age', 50)->default('')
			$table->string('height', 20)
			$table->string('weight', 20)
			$table->string('bmi_value', 20)
			$table->string('blood_group', 20)
			$table->string('blood_type', 20)
			$table->text('drug_allergic')
			$table->text('medical_history')
			$table->string('nationality')->default('')
			$table->string('race')->default('')
			$table->string('religion')->default('')
			$table->string('language')->default('')
			$table->string('phone')
			$table->string('marital_status')->default('0')
			$table->string('spouse_name')
			$table->string('spouse_surname')
			$table->string('spouse_nickname', 100)
			$table->string('spouse_phone')
			$table->string('contactor_name')
			$table->string('contactor_surname')
			$table->string('contactor_nickname', 100)
			$table->string('contactor_relation')
			$table->string('contactor_phone')
			$table->text('contactor_addr')
			$table->string('old_name')
			$table->string('old_surname')
			$table->string('occupation')->default('')
			$table->text('current_addr')
			$table->text('registration_addr')
			$table->string('father_name')
			$table->string('father_surname')
			$table->string('mother_name')
			$table->string('mother_surname')
			$table->string('heir', 50)
			$table->string('hid', 20)
			$table->string('pid', 20)
			$table->string('did', 20)
			$table->string('cid', 20)
			$table->string('company_name', 1000)
			$table->string('salary', 50)
			$table->text('education')
			$table->datetime('normal')
			$table->datetime('case_emergency')
			$table->datetime('case_accidental')
			$table->datetime('ase_nativity')
			$table->datetime('case_specific')
			$table->datetime('case_annual')
			$table->datetime('case_another')
			$table->string('years2digits', 2)
			$table->text('memo')
			$table->text('logs')
			$table->boolean('closed')->default(0)
			$table->text('closed_reason')
			$table->datetime('closed_date')
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
		Schema::drop('person');
	}

}

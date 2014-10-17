<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployee extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('title', 50)->default('ไม่ระบุ');
			$table->string('nickname', 100);
			$table->string('national_ID', 20);
			$table->string('passport_ID', 20);
			$table->string('foreigner_ID', 20);
			$table->date('birthdate');
			$table->string('sex', 50);
			$table->string('age', 50);
			$table->string('nationality')->default('ไม่ระบุ');
			$table->string('race')->default('ไม่ระบุ');
			$table->string('religion')->default('ไม่ระบุ');
			$table->string('phone');
			$table->string('marital_status')->default('ไม่ระบุ');
			$table->string('spouse_name');
			$table->string('spouse_surname');
			$table->string('spouse_nickname', 100);
			$table->string('spouse_phone');
			$table->string('contactor_name');
			$table->string('contactor_surname');
			$table->string('contactor_nickname', 100);
			$table->string('contactor_relation');
			$table->string('contactor_phone');
			$table->string('old_name');
			$table->string('old_surname');
			$table->text('current_addr');
			$table->text('registeration_addr');
			$table->string('father_name');
			$table->string('father_surname');
			$table->string('mother_name');
			$table->string('mother_surname');
			$table->string('heir', 50);
			$table->string('hid', 20);
			$table->string('pid', 20);
			$table->string('did', 20);
			$table->string('salary', 50);
			$table->text('education');
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
		Schema::drop('employees');
	}

}

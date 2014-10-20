<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdc10 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idc10', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code_idc10', 20);
			$table->string('name_idc10');
			$table->text('symptoms');
			$table->text('diagnosis');
			$table->text('periods');
			$table->text('drugs');
			$table->text('drugs_usage');
			$table->text('solutions');
			$table->string('note_idc10');
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
		Schema::drop('idc10');
	}

}

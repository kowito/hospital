<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdc9 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idc9', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code_idc9', 20);
			$table->string('name_idc9');
			$table->text('action');
			$table->decimal('price');
			$table->string('note_idc9');
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
		Schema::drop('idc9');
	}

}

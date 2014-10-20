<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLabGroupToLab extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lab', function(Blueprint $table)
		{
			$table->unsignedInteger('lab_group_id');
			$table->foreign('lab_group_id')->references('id')->on('lab_group');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lab', function(Blueprint $table)
		{
			$table->dropColumn('lab_group_id');

		});
	}

}

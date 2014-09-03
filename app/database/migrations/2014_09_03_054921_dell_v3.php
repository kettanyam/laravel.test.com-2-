<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DellV3 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dell', function(Blueprint $table)
		{
			//
			$table->dropColumn('car');
		});

		Schema::table('mb4', function($table)
		{
			$table->dropColumn('car');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mb4', function(Blueprint $table)
		{
			//
			$table->dropColumn('car');
		});
	}

}

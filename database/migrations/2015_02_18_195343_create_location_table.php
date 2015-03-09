<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('location',function($table)
	{
			$table->increments('id');
			$table->string('country',30);
			$table->string('province',20);
			$table->string('city',20);
			$table->string('town',20);
			$table->timestamps();
			$table->string('backupA')->nullable();
			$table->string('backupB')->nullable();
	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('location');
	}

}

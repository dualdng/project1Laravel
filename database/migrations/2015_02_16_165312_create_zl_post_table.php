<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZlPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// create post table
		Schema::create('zl_post',function($table)
		{
				$table->increments('id');
				$table->string('title',50);
				$table->text('content');
				$table->string('location');
				$table->integer('price');
				$table->integer('author');
				$table->string('communication',50);
				$table->tinyInteger('post_type');
				$table->string('focus');
				$table->timestamps();
				$table->tinyInteger('sex')->nullable();
				$table->string('job',20)->nullable();
				$table->tinyInteger('type')->nullable();
				$table->string('direction',10)->nullable();
				$table->tinyInteger('dress')->nullable();
				$table->float('square',3,2)->nullable();
				$table->string('facility',30)->nullable();
				$table->string('backup_a')->nullable();
				$table->string('backup_b')->nullable();
		}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('zl_post');
	}

}

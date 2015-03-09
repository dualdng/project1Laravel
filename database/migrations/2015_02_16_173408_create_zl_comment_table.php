<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZlCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
			Schema::create('zl_comment',function($table)
			{
				$table->increments('id');
				$table->integer('post_id');
				$table->integer('parent_id');
				$table->integer('user_id');
				$table->text('comment');
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
		Schema::drop('zl_comment');
	}

}

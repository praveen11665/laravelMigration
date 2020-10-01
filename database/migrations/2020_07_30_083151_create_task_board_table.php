<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskBoardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_board', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->boolean('pinned')->default(0);
			$table->integer('firm_id')->default(0);
			$table->integer('user_id')->default(0);
			$table->boolean('default')->default(0);
			$table->timestamps();
			$table->boolean('deleted')->default(0);
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_board');
	}

}

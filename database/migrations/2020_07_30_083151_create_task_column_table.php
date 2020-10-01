<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskColumnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_column', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('task_view_id');
			$table->string('column');
			$table->integer('order')->default(0);
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
		Schema::drop('task_column');
	}

}

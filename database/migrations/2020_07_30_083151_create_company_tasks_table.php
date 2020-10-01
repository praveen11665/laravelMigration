<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_tasks', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('task_id');
			$table->integer('user_id');
			$table->dateTime('start_date')->nullable();
			$table->time('estimation_hours')->nullable();
			$table->string('summary', 250);
			$table->string('task_status', 250);
			$table->string('type', 250);
			$table->string('category', 250);
			$table->timestamps();
			$table->boolean('deleted');
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
		Schema::drop('company_tasks');
	}

}

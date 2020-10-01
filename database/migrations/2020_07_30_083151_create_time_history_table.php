<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimeHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_history', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('task_id');
			$table->integer('user_id');
			$table->bigInteger('start_time')->nullable();
			$table->bigInteger('end_time')->nullable();
			$table->integer('entry_number')->nullable();
			$table->integer('override_time')->nullable()->comment('-1 = Captured time before Reset to Previous Time.
> 0 = user overrides time when updating disposition status.
NULL = gives normal recorded time.');
			$table->timestamps();
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
		Schema::drop('time_history');
	}

}

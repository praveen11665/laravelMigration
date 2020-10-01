<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDispositionHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disposition_history', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('task_id');
			$table->string('timestamp', 250);
			$table->integer('user_id')->comment('User that performed the disposition');
			$table->string('action', 250);
			$table->string('previous_status', 250)->comment('If the task status was changed, this is the previous task status');
			$table->string('previous_time', 250)->comment('If the task time was changed this is the previous time
');
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
		Schema::drop('disposition_history');
	}

}

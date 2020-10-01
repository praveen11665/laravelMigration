<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskDispositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_disposition', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('task_id');
			$table->integer('user_id');
			$table->integer('history_id');
			$table->string('status', 250)->nullable();
			$table->text('reason', 65535)->nullable();
			$table->integer('entry_number')->nullable();
			$table->timestamp('previous_due_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('previous_assigned')->nullable();
			$table->dateTime('current_due_date')->nullable();
			$table->string('current_assigned')->nullable();
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
		Schema::drop('task_disposition');
	}

}

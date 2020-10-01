<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_comments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('thread_id');
			$table->integer('task_id');
			$table->text('comment', 65535);
			$table->integer('resolve')->default(0);
			$table->date('comment_date')->nullable();
			$table->integer('assign_to')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->boolean('deleted')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_comments');
	}

}

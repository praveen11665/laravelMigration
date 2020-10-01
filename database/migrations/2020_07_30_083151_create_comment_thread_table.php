<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_thread', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('task_id');
			$table->boolean('in_company')->comment('1.If the comment thread is visible to members outside of the company');
			$table->boolean('resolve');
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
		Schema::drop('comment_thread');
	}

}

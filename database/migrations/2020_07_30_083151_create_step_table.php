<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('task_id');
			$table->string('name', 250);
			$table->string('description', 250);
			$table->integer('order');
			$table->dateTime('done')->nullable()->comment('1.If the step is marked as finished');
			$table->string('link', 250)->nullable();
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
		Schema::drop('step');
	}

}

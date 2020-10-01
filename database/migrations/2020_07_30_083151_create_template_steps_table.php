<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_steps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('template_id');
			$table->string('name')->nullable();
			$table->text('description', 65535)->nullable();
			$table->integer('order')->default(0);
			$table->text('action_link', 65535)->nullable();
			$table->timestamps();
			$table->integer('deleted')->nullable()->default(0);
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
		Schema::drop('template_steps');
	}

}

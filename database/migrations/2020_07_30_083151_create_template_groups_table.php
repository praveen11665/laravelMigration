<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_groups', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 250);
			$table->string('templates', 250);
			$table->boolean('type')->comment('1. Task Template 2. Project Template');
			$table->boolean('is_global')->default(1);
			$table->integer('firm_id')->default(0);
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
		Schema::drop('template_groups');
	}

}

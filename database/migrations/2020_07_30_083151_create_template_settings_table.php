<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('template_id');
			$table->string('task_type', 250)->nullable();
			$table->string('priority', 250)->nullable();
			$table->string('assinged_role', 250)->nullable();
			$table->boolean('requires_review')->nullable();
			$table->integer('service_role')->nullable();
			$table->string('service_line', 250)->nullable();
			$table->string('module', 250)->nullable();
			$table->string('billing', 250)->nullable();
			$table->string('tags')->nullable();
			$table->boolean('status')->nullable()->comment('1.Active, 2.InActive');
			$table->dateTime('due')->nullable();
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
		Schema::drop('template_settings');
	}

}

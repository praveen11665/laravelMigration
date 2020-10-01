<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('project_group_id');
			$table->string('name', 250);
			$table->text('tasks')->comment('List of Tasks in this template');
			$table->integer('created_by');
			$table->integer('company_id');
			$table->integer('service_line')->nullable();
			$table->integer('billing_default')->nullable();
			$table->boolean('status')->default(1)->comment('1.Active');
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
		Schema::drop('project_templates');
	}

}

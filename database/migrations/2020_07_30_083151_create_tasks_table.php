<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 250);
			$table->integer('company_id')->nullable();
			$table->integer('email_id')->nullable();
			$table->string('display_id', 250)->nullable();
			$table->integer('group_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('type')->nullable();
			$table->integer('status')->nullable();
			$table->integer('parent')->nullable();
			$table->string('estimated_time')->nullable();
			$table->integer('priority')->nullable();
			$table->string('assigned_roles')->nullable();
			$table->boolean('requires_review')->default(0);
			$table->boolean('client')->nullable();
			$table->string('reviewer', 250)->nullable();
			$table->integer('service_line')->nullable();
			$table->integer('project')->nullable();
			$table->integer('module')->nullable();
			$table->integer('billing')->nullable();
			$table->text('action_link', 65535)->nullable();
			$table->text('help_resources', 65535)->nullable();
			$table->string('tags', 250)->nullable();
			$table->dateTime('due')->nullable();
			$table->string('time_notes', 250)->nullable();
			$table->string('disposition_status')->nullable();
			$table->integer('created_by')->nullable();
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
		Schema::drop('tasks');
	}

}

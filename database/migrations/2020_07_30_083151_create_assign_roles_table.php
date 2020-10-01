<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assign_roles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('service_role');
			$table->string('company_id');
			$table->boolean('is_global');
			$table->integer('firm_id');
			$table->boolean('firm_setting');
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
		Schema::drop('assign_roles');
	}

}

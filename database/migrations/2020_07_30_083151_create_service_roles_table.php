<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_roles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('role');
			$table->boolean('is_global');
			$table->integer('firm_id')->default(0);
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
		Schema::drop('service_roles');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceRoleUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_role_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('service_role_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('company_id')->unsigned();
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
		Schema::drop('service_role_users');
	}

}

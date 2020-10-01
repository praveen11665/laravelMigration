<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailConfigUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_config_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('email_config_domain_id')->unsigned();
			$table->integer('firm_id')->unsigned()->default(0);
			$table->string('domain', 100);
			$table->string('email_id', 150);
			$table->integer('privacy')->unsigned()->default(1)->comment('1=Full Access To History, 2=No Email Access, 3=Private Email');
			$table->timestamps();
			$table->boolean('deleted')->nullable()->default(0);
			$table->softDeletes();
			$table->text('signature', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_config_users');
	}

}

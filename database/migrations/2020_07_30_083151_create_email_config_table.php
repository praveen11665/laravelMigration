<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_config', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('firm_id')->unsigned()->default(0);
			$table->boolean('capture')->default(0);
			$table->integer('capture_from')->unsigned()->default(0)->comment('1=G-Suite, 2=Office 365, 3= Both');
			$table->boolean('automatically_delete')->default(0);
			$table->timestamps();
			$table->boolean('deleted')->nullable()->default(0);
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
		Schema::drop('email_config');
	}

}

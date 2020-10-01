<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientSuccessTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_success_tags', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 250);
			$table->integer('firm_id')->default(0);
			$table->timestamps();
			$table->boolean('deleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_success_tags');
	}

}

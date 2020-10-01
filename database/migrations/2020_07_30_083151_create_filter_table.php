<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filter', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 300);
			$table->string('icon', 250);
			$table->integer('user_id');
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
		Schema::drop('filter');
	}

}

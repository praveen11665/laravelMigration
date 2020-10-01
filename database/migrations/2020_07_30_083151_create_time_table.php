<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date')->nullable();
			$table->integer('team_member');
			$table->time('hours')->nullable();
			$table->boolean('billable')->default(0);
			$table->string('qbo_item', 250)->nullable();
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
		Schema::drop('time');
	}

}

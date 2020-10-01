<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceLineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_line', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('is_global_firm');
			$table->integer('firm_id')->nullable()->default(0);
			$table->string('name', 250);
			$table->integer('company_id')->default(0);
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
		Schema::drop('service_line');
	}

}

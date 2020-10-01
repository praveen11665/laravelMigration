<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('template')->nullable();
			$table->integer('company_id')->nullable()->index('company_id');
			$table->integer('service_line')->nullable()->default(0);
			$table->integer('billing')->nullable()->default(0);
			$table->integer('status')->nullable()->default(0);
			$table->integer('firm_id')->default(0);
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
		Schema::drop('project');
	}

}

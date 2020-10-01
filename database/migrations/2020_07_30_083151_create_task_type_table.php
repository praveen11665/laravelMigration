<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_type', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('type')->comment('1.accounting_task_type , 2.tax_task_type , 3.payroll_task_type , 4.other_task_type');
			$table->string('name', 250);
			$table->integer('firm_id')->default(0);
			$table->string('company_id', 11)->default('0');
			$table->timestamps();
			$table->boolean('deleted');
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
		Schema::drop('task_type');
	}

}

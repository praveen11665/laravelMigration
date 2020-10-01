<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_config', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('is_global');
			$table->integer('company_id')->default(0);
			$table->boolean('service_lines')->comment('1.Accounting, 2.Tax, 3.Payroll/HR');
			$table->boolean('accounting_type')->comment('1.Accounts Payable, 2.Accounts Receivable, 3.Bank Reconciliation, 4.Card Reconciliation, 5.Revenue Recognition, 6.Expense Recognition, 7. 1099, 8.Other');
			$table->integer('task_type')->comment('1.Tax Planning, 2.Tax Preparation, 3.Other');
			$table->string('service_roles', 200)->comment('1. Bookkeeper,  2.Accountant, 3.Accounting Team Leader, 4.Controller, 5.CFO, 6.Payroll Specialist, 7.HR Manager, 8.Tax Specialist, 9.Tax Manager, 10.Client Success Manager, 11.Salesperson');
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
		Schema::drop('task_config');
	}

}

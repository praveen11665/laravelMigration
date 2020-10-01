<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_contacts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('firm_id')->default(0);
			$table->integer('company_id');
			$table->string('field', 250);
			$table->integer('field_type');
			$table->string('field_values', 250);
			$table->string('default_values', 250);
			$table->integer('order')->nullable();
			$table->timestamps();
			$table->timestamp('deleted_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('deleted')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_contacts');
	}

}

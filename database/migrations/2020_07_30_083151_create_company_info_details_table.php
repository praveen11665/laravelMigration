<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyInfoDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_info_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_info_id')->default(0);
			$table->string('value', 250)->default('0');
			$table->integer('company_id')->default(0);
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
		Schema::drop('company_info_details');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailConfigDomainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_config_domains', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('firm_id')->unsigned()->default(0);
			$table->string('name');
			$table->string('domain');
			$table->string('domain_admin');
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
		Schema::drop('email_config_domains');
	}

}

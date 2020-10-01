<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateRecurrenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_recurrence', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('template_id');
			$table->string('cron_string', 250);
			$table->dateTime('start_on')->nullable();
			$table->dateTime('end_on')->nullable();
			$table->string('weekend_rule', 250);
			$table->string('holiday_rule', 250);
			$table->integer('holiday_calendar');
			$table->timestamps();
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
		Schema::drop('template_recurrence');
	}

}

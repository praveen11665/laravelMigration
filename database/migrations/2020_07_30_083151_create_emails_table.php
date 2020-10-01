<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->nullable();
			$table->integer('firm_id')->unsigned()->default(0);
			$table->integer('user_id')->unsigned()->default(0);
			$table->string('mail_id', 50)->nullable();
			$table->string('threadId', 50)->nullable();
			$table->integer('historyId')->unsigned()->nullable();
			$table->string('from')->nullable();
			$table->string('from_name');
			$table->string('from_email');
			$table->string('to')->nullable();
			$table->string('to_name')->nullable();
			$table->string('to_email');
			$table->string('cc_email')->nullable();
			$table->string('bcc_email')->nullable();
			$table->string('subject')->nullable();
			$table->text('body', 65535);
			$table->text('headers', 65535);
			$table->text('labelIds', 65535);
			$table->text('inlineFiles', 65535);
			$table->text('attachFiles', 65535);
			$table->string('snippet', 300);
			$table->string('date', 50);
			$table->string('internalDate', 50);
			$table->string('draftId', 50);
			$table->boolean('type')->default(1)->comment('1.Received, 2.Draft, 3.Sent Item, 4. Archive, 5. Discard Draf');
			$table->dateTime('view_time')->nullable();
			$table->timestamps();
			$table->boolean('deleted')->nullable()->default(0);
			$table->softDeletes();
			$table->text('delivered_to', 65535);
			$table->integer('project_id')->unsigned();
			$table->integer('task_id')->unsigned();
			$table->integer('task_type_id')->unsigned();
			$table->integer('billing_id')->unsigned();
			$table->text('time_note', 65535);
			$table->text('internal_comment', 65535);
			$table->integer('composing_time')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emails');
	}

}

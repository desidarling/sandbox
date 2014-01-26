<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('Messages', function(Blueprint $table) {
			$table->increments('id');
			$table->date('date');
			$table->integer('user_from')->unsigned();
			$table->integer('user_to')->unsigned();
			$table->boolean('read');
			$table->text('subject');
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('Messages');
	}
}
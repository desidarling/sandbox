<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('Comments', function(Blueprint $table) {
			$table->increments('id');
			$table->date('date');
			$table->integer('user_from')->unsigned();
			$table->integer('user_to')->unsigned();
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('Comments');
	}
}
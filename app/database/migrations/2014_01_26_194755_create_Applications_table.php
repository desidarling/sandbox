<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration {

	public function up()
	{
		Schema::create('Applications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('program_id')->unsigned();
			$table->mediumInteger('season_id');
			$table->tinyInteger('status');
			$table->mediumInteger('stipend');
		});
	}

	public function down()
	{
		Schema::drop('Applications');
	}
}
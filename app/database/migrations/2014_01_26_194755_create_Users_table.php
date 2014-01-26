<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('Users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 15);
			$table->string('password', 20);
			$table->boolean('is_admin');
		});
	}

	public function down()
	{
		Schema::drop('Users');
	}
}
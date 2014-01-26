<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserProfilesTable extends Migration {

	public function up()
	{
		Schema::create('User_Profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('gre_taken');
			$table->date('date_to_take_gre');
			$table->tinyInteger('what_sub_gre');
			$table->date('date_to_take_sub');
			$table->string('email', 100);
			$table->boolean('registered');
			$table->float('gpa');
			$table->smallInteger('gre');
			$table->smallInteger('sub_gre');
			$table->string('country', 100);
			$table->string('city', 50);
			$table->mediumInteger('year');
			$table->string('major', 20);
			$table->tinyInteger('work_experience');
			$table->tinyInteger('research_experience');
			$table->tinyInteger('gender');
			$table->tinyInteger('anonymity');
		});
	}

	public function down()
	{
		Schema::drop('User_Profiles');
	}
}
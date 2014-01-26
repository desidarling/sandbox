<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentsTable extends Migration {

	public function up()
	{
		Schema::create('Departments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('school_id')->unsigned();
			$table->string('name', 90);
			$table->text('address');
			$table->string('phone', 20);
			$table->string('chair_name', 40);
			$table->string('chair_email', 80)->default('N/A');
			$table->string('contact_name', 40);
			$table->string('contact_email', 80);
			$table->smallInteger('total_full_faculty');
			$table->smallInteger('total_faculty');
			$table->mediumInteger('total_grad_students');
			$table->smallInteger('total_postdocs');
			$table->smallInteger('total_firstyears');
			$table->tinyInteger('total_firstyear_female')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Departments');
	}
}
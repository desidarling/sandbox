<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration {

	public function up()
	{
		Schema::create('Schools', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 200);
			$table->text('address');
			$table->string('phone')->default('N/A');
			$table->string('city', 60);
			$table->string('state', 50);
			$table->string('country', 70);
			$table->string('website', 80);
			$table->boolean('is_public');
			$table->integer('total_faculty');
			$table->integer('total_grad_faculty');
			$table->integer('total_students');
			$table->integer('total_grad_students');
			$table->mediumInteger('full_instate_tuition');
			$table->mediumInteger('full_outstate_tuition');
			$table->mediumInteger('instate_per_credit');
			$table->mediumInteger('outstate_per_credit');
			$table->tinyInteger('credits_for_fulltime');
			$table->mediumInteger('tuition_waivers');
			$table->boolean('have_domestic_loans');
			$table->boolean('have_int_loans');
		});
	}

	public function down()
	{
		Schema::drop('Schools');
	}
}
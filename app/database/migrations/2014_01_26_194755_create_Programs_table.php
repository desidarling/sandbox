<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramsTable extends Migration {

	public function up()
	{
		Schema::create('Programs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('school_id')->unsigned();
			$table->integer('department_id')->unsigned();
			$table->tinyInteger('degree_type');
			$table->string('contact_name', 40);
			$table->string('contact_email', 80);
			$table->mediumInteger('avg_ta_stipend');
			$table->mediumInteger('avg_ra_stipend');
			$table->mediumInteger('avg_fellow_stipend');
			$table->text('stipend_notes');
			$table->date('dom_app_deadline');
			$table->date('int_app_deadline');
			$table->tinyInteger('app_fee');
			$table->boolean('need_gre');
			$table->boolean('need_subj_gre');
			$table->float('min_gpa');
			$table->smallInteger('2013_apps');
			$table->smallInteger('2013_admits');
			$table->smallInteger('2013_enrolled');
			$table->boolean('need_toefl');
			$table->mediumInteger('min_pbt');
			$table->mediumInteger('min_ibt');
			$table->mediumInteger('avg_gre');
			$table->mediumInteger('min_gre');
			$table->text('requirements');
			$table->text('other_info');
		});
	}

	public function down()
	{
		Schema::drop('Programs');
	}
}
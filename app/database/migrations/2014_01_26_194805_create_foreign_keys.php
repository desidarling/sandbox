<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Departments', function(Blueprint $table) {
			$table->foreign('school_id')->references('id')->on('Schools')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Programs', function(Blueprint $table) {
			$table->foreign('school_id')->references('id')->on('Schools')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Programs', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('Departments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Applications', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('User_Profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Applications', function(Blueprint $table) {
			$table->foreign('program_id')->references('id')->on('Programs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->foreign('user_from')->references('id')->on('User_Profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->foreign('user_to')->references('id')->on('User_Profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Messages', function(Blueprint $table) {
			$table->foreign('user_from')->references('id')->on('User_Profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Messages', function(Blueprint $table) {
			$table->foreign('user_to')->references('id')->on('User_Profiles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Departments', function(Blueprint $table) {
			$table->dropForeign('Departments_school_id_foreign');
		});
		Schema::table('Programs', function(Blueprint $table) {
			$table->dropForeign('Programs_school_id_foreign');
		});
		Schema::table('Programs', function(Blueprint $table) {
			$table->dropForeign('Programs_department_id_foreign');
		});
		Schema::table('Applications', function(Blueprint $table) {
			$table->dropForeign('Applications_user_id_foreign');
		});
		Schema::table('Applications', function(Blueprint $table) {
			$table->dropForeign('Applications_program_id_foreign');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->dropForeign('Comments_user_from_foreign');
		});
		Schema::table('Comments', function(Blueprint $table) {
			$table->dropForeign('Comments_user_to_foreign');
		});
		Schema::table('Messages', function(Blueprint $table) {
			$table->dropForeign('Messages_user_from_foreign');
		});
		Schema::table('Messages', function(Blueprint $table) {
			$table->dropForeign('Messages_user_to_foreign');
		});
	}
}
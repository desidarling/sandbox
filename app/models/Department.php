<?php

class Department extends Eloquent {

	protected $table = 'Departments';
	public $timestamps = false;
	protected $softDelete = false;

	public function SchoolDeparments()
	{
		return $this->hasOne('Department', 'school_id');
	}

}
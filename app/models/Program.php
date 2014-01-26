<?php

class Program extends Eloquent {

	protected $table = 'Programs';
	public $timestamps = false;
	protected $softDelete = false;

	public function PtoD()
	{
		return $this->hasOne('Program', 'department_id');
	}

}
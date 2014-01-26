<?php

class Application extends Eloquent {

	protected $table = 'Applications';
	public $timestamps = false;
	protected $softDelete = false;

	public function Applications()
	{
		return $this->hasOne('Application', 'program_id');
	}

	public function AtoU()
	{
		return $this->hasOne('Application', 'user_id');
	}

}
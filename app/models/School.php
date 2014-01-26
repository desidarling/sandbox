<?php

class School extends Eloquent {

	protected $table = 'Schools';
	public $timestamps = false;
	protected $softDelete = false;

	public function school()
	{
		return $this->hasOne('School');
	}

}
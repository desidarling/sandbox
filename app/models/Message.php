<?php

class Message extends Eloquent {

	protected $table = 'Messages';
	public $timestamps = false;
	protected $softDelete = false;

	public function UFtoUP()
	{
		return $this->hasOne('Message', 'user_from');
	}

	public function UTtoUP()
	{
		return $this->hasOne('Message', 'user_to');
	}

}
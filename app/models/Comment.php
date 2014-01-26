<?php

class Comment extends Eloquent {

	protected $table = 'Comments';
	public $timestamps = false;
	protected $softDelete = false;

	public function UFtoUP()
	{
		return $this->hasOne('Comment', 'user_from');
	}

	public function UTtoUP()
	{
		return $this->hasOne('Comment', 'user_to');
	}

}
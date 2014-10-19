<?php

class Patient extends Eloquent {
	protected $fillable = [];

	public function getFullName()
	{
		return $this->getAttribute('first_name').' '.$this->getAttribute('last_name');
	}
}

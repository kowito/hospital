<?php

class Employee extends \Eloquent {
	protected $fillable = [];
	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
	);

}

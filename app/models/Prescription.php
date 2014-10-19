<?php

class Prescription extends \Eloquent {
	protected $fillable = [];

	public static $rules = array
	(
		'cash_total' => 'required',
		'drug_list' => 'required',
	);


	public function patient()
	{
	    return $this->belongsTo('Patient');
	}

}

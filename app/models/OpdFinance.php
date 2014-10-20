<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class OpdFinance extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'opd_finance';

	public static $rules = array
	(
		'cash_total' => 'required',
	);

	public function patient()
	{
			return $this->belongsTo('Patient');
	}
}

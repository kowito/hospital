<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Company extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'company';

	public static $rules = array
	(
		'cash_total' => 'required',
	);
}

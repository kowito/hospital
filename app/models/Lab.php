<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class Lab extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'lab';

	public function lab_group()
	{
			return $this->belongsTo('LabGroup');
	}

	public function patient()
	{
			return $this->belongsTo('Patient');
	}
}

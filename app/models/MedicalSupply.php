<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class MedicalSupply extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'medical_supply';

}

<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Idc9 extends \Eloquent {
	use SoftDeletingTrait;

	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'idc9';
}

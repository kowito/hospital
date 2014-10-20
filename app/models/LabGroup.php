<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LabGroup extends Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'lab_group';
}

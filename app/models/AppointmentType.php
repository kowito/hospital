<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AppointmentType extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'appointment_type';
}

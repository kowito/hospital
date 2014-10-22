<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Appointment extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'appointment';

	public function appointmentType()
	{
			return $this->belongsTo('AppointmentType');
	}


	public function employee()
	{
			return $this->belongsTo('Employee');
	}

}

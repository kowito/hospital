<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class Doctor extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at'];
	protected $table = 'doctor';

	public static function boot()
  {
      parent::boot();

      static::saving(function($doctor)
      {
					$dateNow = new DateTime();
					$doctor->age = $dateNow->diff(DateTime::createFromFormat('Y-m-d', $doctor->birthdate))->format("%d");

      });
  }
}

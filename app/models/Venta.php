<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Venta extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'ventas';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function ventaDetalle()
	{
		return $this->hasMany('Ventadetalle','venta_id');
	}




	public function clientes()
	{
		return $this->belongsTo('Cliente');
	}




	public function usuarios()
	{
		return $this->belongsTo('Usuario');
	}

}

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Ventadetalle extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'ventas_detalles';

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

	public function venta()
	{
		return $this->belongsTo('Venta');
	}


	public function producto()
	{
		return $this->belongsTo('Producto');
	}

	public function unidadMedida()
	{
		return $this->belongsTo('Unidadmedida');
	}



}
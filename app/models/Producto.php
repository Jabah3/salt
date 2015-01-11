<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Producto extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'productos';

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

/*
	public function productoProveedor()
	{
		return $this->hasMany('Productoproveedor','producto_id')
	}

	public function compaProducto()
	{
		return $this->hasMany('Compraproducto','producto_id');
	}
*/
	public function receta()
	{
		return $this->hasMany('Receta', 'producto_id');
	}

}

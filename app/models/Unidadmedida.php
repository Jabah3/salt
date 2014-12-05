<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Unidadmedida extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'unidad_medidas';

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

	public function insumo()
	{
		return $this->hasMany('Insumo','unidad_medida_id');
	}

	public function ventaDetalle()
	{
		return $this->hasMany('Ventadetalle','unidad_medida_id');
	}

}

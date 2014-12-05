<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'usuarios';

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

	public function registroEvento()
	{
		return $this->hasMany('Registroevento', 'usuario_id')
	}

	public function venta()
	{
		return $this->hasMany('Venta', 'usuario_id');
	}



	public function grupo()
	{
		return $this->belongsTo('Grupo');
	}

	public function sucursal()
	{
		return $this->belongsTo('Sucursal');
	}

	public function rol()
	{
		return $this->belongsTo('Rol');
	}

}

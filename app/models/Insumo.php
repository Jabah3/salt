<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Insumo extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'insumos';

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
	
	public function comprainsumos(){
		return $this->hasMany('Comprainsumo','id');
		//return $this->hasMany('Deposito');
	}

	public function proveedores(){
		return $this->belongsToMany('Proveedor','insumos_proveedores');
		//return $this->hasMany('Deposito');
	}



}

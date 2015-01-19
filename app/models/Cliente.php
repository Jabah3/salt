<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Cliente extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clientes';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

	
	public function venta(){
	    return $this->belongsTo('Ventas');
	}


	public function getReminderId(){
		return $this->id;
	}


}

<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Receta extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'recetas';

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

	public function producto()
	{
		return $this->belongsTo('Producto');
	}

	public function insumo()
	{
		return $this->belongsTo('Insumo');
	}

}

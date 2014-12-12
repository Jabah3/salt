<?php

class RolController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$roles=Rol::all();
		return View::make('roles.index')->with('roles',$roles);
	}



	public function postGuardarol()
	{
		$Rol = new Rol; 
		$Rol->nombre=$nombre=Input::get('nombre');
		$Rol->descripcion=$descripcion=Input::get('descripcion');
		$Rol->save();

		return $nombre;
	}





	public function postEliminarol()
	{
		$id=Input::get('id');
	 	$eliminarol = Rol::find($id);
	        
	    if (is_null ($eliminarol))
	    {
	        App::abort(404);
	    }
	        
	    $eliminarol->delete();
	}




	

}

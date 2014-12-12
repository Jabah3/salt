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



	public function postEditarol()
	{
		$id=Input::get('id');
		$rol = Rol::where('id', '=', $id)->get();
		return $interfaz="<div id='ModalEditaRol' class='reveal-modal' data-reveal>
  <h2>Edita Rol</h2>
	<form action='roles/guardarol' method='post' name='FormularioAgregaRol' id='FormularioAgregaRol' >

        <div class='row'>
          <div class='large-12 columns'>
            <label>Nombre
              <input type='text' id='nombre' name='nombre' value='".$id."' placeholder='Escribe el nombre del Rol' required>
            </label>
          </div>
        </div>

        <div class='row'>
          <div class='large-12 columns'>
            <label>Descripción
              <textarea name='descripcion' id='descripcion' placeholder='Escribre una Descripcion del rol'></textarea>
            </label>
          </div>
        </div>

		<div class='row'>
          <div class='large-4 columns'>
          </div>

          <div class='large-4 columns'>
          </div>

          <div class='large-4 columns'>
         	<input type='submit' value='Guardar' class='button succes expand'>
          </div>
        </div>
    </form>
    <a class='close-reveal-modal'>&#215;</a>
</div>
";

	}


}

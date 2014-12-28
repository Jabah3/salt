<?php

class UnidadmedidaController extends BaseController {

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
		$unidadmedida = DB::table('unidad_medidas')->orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('unidadmedidas.contenido', array('unidadmedida' => $unidadmedida))->render());
        	}

		return View::make('unidadmedidas.index')->with('unidadmedida',$unidadmedida);
	}





	public function postGuardaunidadmedida()
	{
		$Unidadmedida = new Unidadmedida; 
		$Unidadmedida->tipo_unidad=$tipo_unidad=Input::get('tipo_unidad');
		$Unidadmedida->unidad_medida=$unidad_medida=Input::get('unidad_medida');
		$Unidadmedida->descripcion=$descripcion=Input::get('descripcion');
		$Unidadmedida->save();

		return $tipo_unidad;
	}





	public function postGuardaedicionrol()
	{
		Rol::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'nombre'=>Input::get('nombre'),				
				'descripcion'=>Input::get('descripcion')
			)
		);
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



	public function postFormatoeditarol()
	{
		$id=Input::get('id');
		$rol = Rol::where('id', '=', $id)->get();

		foreach ($rol as $value) {

			return $interfaz="<div id='ModalEditaRol' class='reveal-modal' data-reveal>
							  <h2>Edita Rol</h2>
								<form action='roles/guardaedicionrol' method='post' name='FormularioGuardaEdicionRol' id='FormularioGuardaEdicionRol' >
								<input type='hidden' name='id' id='id' value='".$value->id."'/>
							        <div class='row'>
							          <div class='large-12 columns'>
							            <label>Nombre
							              <input type='text' id='nombre' name='nombre' value='".$value->nombre."' placeholder='Escribe el nombre del Rol' required>
							            </label>
							          </div>
							        </div>

							        <div class='row'>
							          <div class='large-12 columns'>
							            <label>Descripción
							              <textarea name='descripcion' id='descripcion' placeholder='Escribre una Descripcion del rol'>".$value->descripcion."</textarea>
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










}

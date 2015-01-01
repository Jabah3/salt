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





	public function postGuarda()
	{
		$Unidadmedida = new Unidadmedida; 
		$Unidadmedida->tipo_unidad=$tipo_unidad=Input::get('tipo_unidad');
		$Unidadmedida->unidad_medida=$unidad_medida=Input::get('unidad_medida');
		$Unidadmedida->descripcion=$descripcion=Input::get('descripcion');
		$Unidadmedida->save();

		return $tipo_unidad;
	}





	public function postGuardaedicion()
	{
		Unidadmedida::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'tipo_unidad'=>Input::get('tipo'),				
				'unidad_medida'=>Input::get('medida'),
				'descripcion'=>Input::get('descripcion')

			)
		);
	}




	public function postElimina()
	{
		$id=Input::get('id');
	 	$eliminarol = Unidadmedida::find($id);
	        
	    if (is_null ($eliminarol))
	    {
	        App::abort(404);
	    }
	        
	    $eliminarol->delete();
	}



	public function postFormatoedita()
	{
		$id=Input::get('id');
		$uri=Input::get('uri');
		$rol = Unidadmedida::where('id', '=', $id)->get();

		foreach ($rol as $value) {

			return $interfaz="<div id='ModalEdita' class='reveal-modal' data-reveal>
							  <h2>Edita Rol</h2>
								<form action='$uri/guardaedicion' method='post' name='FormularioGuardaEdicion' id='FormularioGuardaEdicion' >
								<input type='hidden' name='id' id='id' value='".$value->id."'/>
							        <div class='row'>
							          <div class='large-12 columns'>
							            <label>Nombre
							              <input type='text' id='tipo' name='tipo' value='".$value->tipo_unidad."' placeholder='Escribe el nombre del Rol' required>
							            </label>
							          </div>
							        </div>

							        <div class='row'>
							          <div class='large-12 columns'>
							            <label>Descripción
							              <textarea name='medida' id='medida' placeholder='Escribre una Descripcion del rol'>".$value->unidad_medida."</textarea>
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

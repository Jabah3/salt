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
		//$unidadmedida = DB::table('unidad_medidas')->orderBy('created_at', 'desc')->paginate(5);
		$unidadmedida = Unidadmedida::orderBy('created_at', 'desc')->paginate(5);

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
	 	$elimina = Unidadmedida::find($id);
	        
	    if (is_null ($elimina))
	    {
	        App::abort(404);
	    }
	        
	    $elimina->delete();
	}



	public function postFormatoedita()
	{
		$id=Input::get('id');
		$uri=Input::get('uri');
		$unidadmedida = Unidadmedida::where('id', '=', $id)->get();
		return View::make('unidadmedidas.editaformato')->with('unidadmedida',$unidadmedida)->with('uri',$uri);




	}










}

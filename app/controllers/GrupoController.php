<?php

class GrupoController extends BaseController {

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
		//$grupo = DB::table('unidad_medidas')->orderBy('created_at', 'desc')->paginate(5);
		$grupos= Grupo::orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('grupos.contenido', array('grupos' => $grupos))->render());
        	}

		return View::make('grupos.index')->with('grupos',$grupos);
	}





	public function postGuarda()
	{
		$grupo = new Grupo; 
		$grupo->nombre=$nombre=Input::get('nombre');
		$grupo->descripcion=$descripcion=Input::get('descripcion');
		$grupo->save();

		return $nombre;
	}





	public function postGuardaedicion()
	{
		Grupo::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'nombre'=>Input::get('nombre'),				
				'descripcion'=>Input::get('descripcion')

			)
		);
	}




	public function postElimina()
	{
		$id=Input::get('id');
	 	$elimina = Grupo::find($id);
	        
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
		$grupo = Grupo::where('id', '=', $id)->get();
		return View::make('grupos.editaformato')->with('grupo',$grupo)->with('uri',$uri);

	}




}

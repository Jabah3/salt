<?php

class ClienteController extends BaseController {

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
		
		
		$clientes= Cliente::orderBy('created_at', 'desc')->paginate(5);

		if (Request::ajax()) {
            return Response::json(View::make('clientes.contenido', array('clientes' => $clientes))->render());
        }

		return View::make('clientes.index')->with('clientes',$clientes);
	}



	public function postGuarda()
	{
		$clientes = new Cliente; 
		$clientes->nombres= Input::get('nombres');
		$clientes->apellidos= Input::get('apellidos');
		$clientes->telefono= Input::get('telefono');
		$clientes->email= Input::get('email');
		$clientes->calle= Input::get('calle');
		$clientes->ciudad= Input::get('ciudad');
		$clientes->estado= Input::get('estado');
		$clientes->sexo= Input::get('sexo');
		$clientes->foto= Input::get('foto');
		$clientes->descripcion= Input::get('descripcion');


		$clientes->save();

		//return $nombres;
	}



	public function postGuardaedicion()
	{
		Cliente::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'nombres'=> Input::get('nombres'),
				'apellidos'=> Input::get('apellidos'),
				'telefono'=> Input::get('telefono'),
				'email'=> Input::get('email'),
				'calle'=> Input::get('calle'),
				'ciudad'=> Input::get('ciudad'),
				'estado'=> Input::get('estado'),
				'sexo'=> Input::get('sexo'),
				'foto'=> Input::get('foto'),
				'descripcion' => Input::get('descripcion')
			)
		);
	}



	public function postElimina()
	{
		$id=Input::get('id');
	 	$elimina = Cliente::find($id);
	        
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
		$clientes = Cliente::where('id', '=', $id)->get();

		return View::make('clientes.editaformato')->with('clientes',$clientes)->with('uri',$uri);
	}







}

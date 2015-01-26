<?php

class ProveedorController extends BaseController {

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
		$proveedores= Proveedor::orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('proveedores.contenido', array('proveedores' => $proveedores))->render());
        	}

		return View::make('proveedores.index')->with('proveedores',$proveedores);
	}

		public function postGuarda()
	{
		$grupo = new Proveedor; 
		$grupo->nombre=$nombre=Input::get('nombre');
		$grupo->descripcion=$descripcion=Input::get('rfc');
		$grupo->save();

		return $nombre;
	}



	public function postGuardaedicion()
	{
		//$Rol = new Rol; 
		Log::info('Estos son los Input: ', array('context' => Input::get()) );
		Proveedor::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'empresa'=>Input::get('empresa'),
				'nombre'=>Input::get('nombre'),	
				'rfc'=>Input::get('rfc'),
				'pais'=>Input::get('pais'),	
				'estado'=>Input::get('estado'),
				'ciudad'=>Input::get('ciudad'),	
				'codigo_postal'=>Input::get('codigo_postal'),	
				'colonia'=>Input::get('colonia'),		
				'calle'=>Input::get('calle'),	
				'telefono'=>Input::get('telefono'),	
				'email'=>Input::get('email'),
				'activo'=>Input::get('activo'),		
			)
		);
	}




	public function postElimina()
	{
		$id=Input::get('id');
	 	$elimina = Proveedor::find($id);
	        
	    if (is_null ($elimina))
	    {
	        App::abort(404);
	    }
	        
	    $elimina->delete();
	}




	public function postFormatoedita()
	{
		$id=Input::get('id');

		$proveedor = Proveedor::where('id', '=', $id)->get();
		$uri=Input::get('uri');
		return View::make('proveedores.editaformato')->with('proveedor',$proveedor)->with('uri',$uri);
	}

}

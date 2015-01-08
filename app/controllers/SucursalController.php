<?php

class SucursalController extends BaseController {

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
		//$sucursal = DB::table('unidad_medidas')->orderBy('created_at', 'desc')->paginate(5);
		$sucursales= Sucursal::orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('sucursales.contenido', array('sucursales' => $sucursales))->render());
        	}

		return View::make('sucursales.index')->with('sucursales',$sucursales);
	}



	public function postGuarda()
	{
		$sucursal = new Sucursal; 
		$sucursal->nombre=$nombre=Input::get('nombre');		
	    $sucursal->ciudad=$ciudad=Input::get('ciudad');
	    $sucursal->calle=$calle=Input::get('calle');
	    $sucursal->colonia=$colonia=Input::get('colonia');
	    $sucursal->giro=$giro=Input::get('giro');
	    $sucursal->rfc=$rfc=Input::get('rfc');
	    $sucursal->mensaje_sucursal=$mensaje_sucursal=Input::get('mensaje_sucursal');
	    $sucursal->pagina_web=$pagina_web=Input::get('pagina_web');
	    $sucursal->descripcion=$descripcion=Input::get('descripcion');

		$sucursal->save();

		return $nombre;
	}





	public function postGuardaedicion()
	{
		Sucursal::where('id', '=', Input::get('id'))->update
		(
			array
			(
				'nombre'=>Input::get('nombre'),			
				'ciudad'=>Input::get('ciudad'),
				'calle'=>Input::get('calle'),
				'colonia'=>Input::get('colonia'),
				'giro'=>Input::get('giro'),
				'rfc'=>Input::get('rfc'),
				'mensaje_sucursal'=>Input::get('mensaje_sucursal'),
				'pagina_web'=>Input::get('pagina_web'),
				'descripcion'=>Input::get('descripcion')

			)
		);
	}




	public function postElimina()
	{
		$id=Input::get('id');
	 	$elimina = Sucursal::find($id);
	        
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
		$sucursales = Sucursal::where('id', '=', $id)->get();
		return View::make('sucursales.editaformato')->with('sucursales',$sucursales)->with('uri',$uri);
	}








}

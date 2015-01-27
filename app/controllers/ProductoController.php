<?php

class ProductoController extends BaseController {

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
		//$roles = DB::table('roles')->orderBy('created_at', 'desc')->paginate(5);
		$productos= Producto::orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('productos.contenido', array('productos' => $productos))->render());
        	}

		return View::make('productos.index')->with('productos',$productos);
	}


	public function postGuarda()
	{
		$Producto = new Producto; 
		$Producto->nombre           =Input::get('nombre');
		$Producto->materia_prima    =Input::get('materia_prima');
		$Producto->codigo_barra     =Input::get('codigo_barra');
		$Producto->precio_venta     =Input::get('precio_venta');
		//$Producto->costo_produccion =Input::get('costo_produccion');
		$Producto->activo           =1;
		//$Producto->fecha            =Input::get('fecha');
		$Producto->marca            =Input::get('marca');
		$Producto->descripcion      =Input::get('descripcion');
		//$Producto->stock            =Input::get('stock');
		$Producto->stock_minimo     =Input::get('stock_minimo');
		$Producto->stock_maximo     =Input::get('stock_maximo');
		$Producto->imagen           =Input::get('imagen');
		$Producto->cantidad         =Input::get('cantidad');
		//$Producto->proveedores_id   =Input::get('proveedores_id');
		$Producto->codigo           =Input::get('codigo');
		//$Producto->unidad_medidas_id=Input::get('unidad_medidas_id');
		$Producto->iva            	=Input::get('iva');
		//$Producto->categoria_id     =Input::get('categoria_id');
		$Producto->caducidad        =Input::get('caducidad');
		//$Producto->usuario_id       =Input::get('usuario_id');
		$Producto->save();

		//return $nombre;
	}



	public function postGuardaedicion()
	{
		//$Rol = new Rol; 
		Producto::where('id', '=', Input::get('id'))->update
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
	 	$elimina = Producto::find($id);
	        
	    if (is_null ($elimina))
	    {
	        App::abort(404);
	    }
	        
	    $elimina->delete();
	}




	public function postFormatoedita()
	{
		$id=Input::get('id');
		$rol = Producto::where('id', '=', $id)->get();
		$uri=Input::get('uri');
		return View::make('roles.editaformato')->with('rol',$rol)->with('uri',$uri);
	}





}

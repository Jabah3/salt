<?php

class UsuarioController extends BaseController {

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
		$usuarios= Usuario::orderBy('created_at', 'desc')->paginate(5);

		    if (Request::ajax()) {
            	return Response::json(View::make('usuarios.contenido', array('usuarios' => $usuarios))->render());
        	}

		return View::make('usuarios.index')->with('usuarios',$usuarios);
	}


	public function postGuarda()
	{
		$Rol = new Usuario; 
		$Rol->nombres=$nombres=Input::get('nombres');
	    $Rol->apellidos=$apellidos=Input::get('apellidos');
	    $Rol->rol_id=$rol_id=Input::get('rol_id');
	    $Rol->sucursal_id=$sucursal_id=Input::get('sucursal_id');
	    $Rol->telefono=$telefono=Input::get('telefono');
	    $Rol->email=$email=Input::get('email');
	    $Rol->grupos_id=$grupos_id=Input::get('grupos_id');
	    $Rol->ciudad=$ciudad=Input::get('ciudad');
	    $Rol->estado=$estado=Input::get('estado');
	    $Rol->activo=$activo=Input::get('activo');
	    $Rol->sexo=$sexo=Input::get('sexo');
	    $Rol->foto=$foto=Input::get('foto');
	    $Rol->descripcion=$descripcion=Input::get('descripcion');
		$Rol->save();

		return $nombres;
	}



	public function postGuardaedicion()
	{
		//$Rol = new Rol; 
		Rol::where('id', '=', Input::get('id'))->update
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
	 	$elimina = Rol::find($id);
	        
	    if (is_null ($elimina))
	    {
	        App::abort(404);
	    }
	        
	    $elimina->delete();
	}




	public function postFormatoedita()
	{
		$id=Input::get('id');
		$rol = Rol::where('id', '=', $id)->get();
		$uri=Input::get('uri');
		return View::make('usuarios.editaformato')->with('rol',$rol)->with('uri',$uri);
	}


	public function getPaginacion()
	{	
		//return $someUsers = Rol::where('id', '>', 1)->simplePaginate(6);
		//return View::make('photos.show', array('photos' => $photos));
  /** 	$per_page=5;
	$Rol = DB::table('roles')->paginate($per_page, array('id', 'nombre', 'created_at'));

	$paginacion=1;
		foreach ($Rol as $order){
		    //echo $order->id." "; 
		    echo $paginacion++." ";
		}

	echo $total = DB::table('roles')->count();
	echo "habra ".$steps=$total/$per_page;*/		
	}








}

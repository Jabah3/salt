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
		$roles = Rol::all( array('id','nombre'));
		$sucursales = Sucursal::all( array('id','nombre'));
		$grupos = Grupo::all( array('id','nombre'));

		//$users = DB::table('users')->select('name as user_name')->get();

		    if (Request::ajax()) {
            	return Response::json(View::make('usuarios.contenido', array('usuarios' => $usuarios))->render());
        	}

		return View::make('usuarios.index')->with('usuarios',$usuarios)->with('roles',$roles)->with('sucursales',$sucursales)->with('grupos',$grupos);
	}


	public function postGuarda()
	{
		$Usuarios = new Usuario; 
		$Usuarios->usuario=$usuario=Input::get('usuario');
		//$Usuarios->contrasena=$contrasena=Input::get('contrasena');
		$Usuarios->contrasena=Hash::make(Input::get('contrasena'));
		$Usuarios->nombre=$nombres=Input::get('nombre');
	    $Usuarios->apellido=$apellidos=Input::get('apellido');
	    $Usuarios->rol_id=$rol_id=Input::get('rol_id');
	    $Usuarios->sucursal_id=$sucursal_id=Input::get('sucursal_id');
	    $Usuarios->telefono=$telefono=Input::get('telefono');
	    $Usuarios->email=$email=Input::get('email');
	    $Usuarios->grupo_id=$grupos_id=Input::get('grupo_id');
	    $Usuarios->ciudad=$ciudad=Input::get('ciudad');
	    $Usuarios->estado=$estado=Input::get('estado');
	    $Usuarios->activo=1;
	    $Usuarios->sexo=$sexo=Input::get('sexo');
	    $Usuarios->foto=$foto=Input::get('foto');
	    $Usuarios->descripcion=$descripcion=Input::get('descripcion');
		$Usuarios->save();

		return $nombres;


	}



	public function postGuardaedicion()
	{
		//$Rol = new Rol; 
		Usuario::where('id', '=', Input::get('id'))->update
		(
			array
			(
				//'contrasena'	=>Hash::make(Input::get('contrasena')),
				'nombre'		=>Input::get('nombre'),
			    'apellido'		=>Input::get('apellido'),
			    'rol_id'		=>Input::get('rol_id'),
			    'sucursal_id'	=>Input::get('sucursal_id'),
			    'telefono'		=>Input::get('telefono'),
			    'email'			=>Input::get('email'),
			    'grupo_id'		=>Input::get('grupo_id'),
			    'ciudad'		=>Input::get('ciudad'),
			    'estado'		=>Input::get('estado'),
			    'activo'		=>1,
			    'sexo'			=>Input::get('sexo'),
			    'foto'			=>Input::get('foto'),
			    'descripcion'	=>Input::get('descripcion')

			)
		);
	}




	public function postElimina()
	{
		$id=Input::get('id');
	 	$elimina = Usuario::find($id);
	        
	    if (is_null ($elimina))
	    {
	        App::abort(404);
	    }
	        
	    $elimina->delete();
	}




	public function postFormatoedita()
	{
		$id=Input::get('id');
		$usuarios = Usuario::where('id', '=', $id)->get();
		//Crypt::decrypt(Input::get('txtContraseniaEncriptada'));
		$uri=Input::get('uri');
		$roles = Rol::all( array('id','nombre'));
		$sucursales = Sucursal::all( array('id','nombre'));
		$grupos = Grupo::all( array('id','nombre'));

		return View::make('usuarios.editaformato')
			->with('usuarios',$usuarios)
			->with('roles',$roles)
			->with('sucursales',$sucursales)
			->with('grupos',$grupos)
			->with('uri',$uri);
	}










}

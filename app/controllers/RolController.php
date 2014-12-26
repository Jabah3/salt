<?php

class RolController extends BaseController {

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
		$roles = DB::table('roles')->orderBy('created_at', 'desc')->paginate(5);
		return View::make('roles.index')->with('roles',$roles);
	}

	public function getCambia()
	{
		$roles = DB::table('roles')->orderBy('created_at', 'desc')->paginate(5);
		return View::make('roles.contenido')->with('roles',$roles);
	}



	public function postGuardarol()
	{
		$Rol = new Rol; 
		$Rol->nombre=$nombre=Input::get('nombre');
		$Rol->descripcion=$descripcion=Input::get('descripcion');
		$Rol->save();

		return $nombre;
	}



	public function postGuardaedicionrol()
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












	public function getRefreshrol()
	{
		$roles=Rol::all();


			$interfaz="";
		foreach ($roles as $rol) {
			$interfaz.="	
			<tr>
				<input type='hidden' name='id' id='id' value='".$rol->id."'/>
				<td>".$rol->nombre."</td>
				<td>".$rol->descripcion."</td>
				<td> <a href='#' id='eliminar' onclick='eliminarol(".$rol->id.");'>ELIM</a> <a  href='#' onclick='formatoeditarol(".$rol->id.");' id=''>EDIT</a>
	    		</td>
	    	</tr>";
    	}
    	echo $interfaz;
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

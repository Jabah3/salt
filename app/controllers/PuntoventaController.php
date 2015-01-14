<?php

class PuntoventaController extends BaseController {

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
		//$productos=Producto::orderBy('created_at', 'desc')
		//$productos=Producto::
		$productos=DB::table('productos AS P')
			->select()
			->join('categorias AS C', 'C.id', '=', 'P.categoria_id')
			->select('P.imagen','P.id','P.nombre','C.color')
            //->groupBy('C.id')
            ->get();

/*
$ingresos = DB::table('deposits AS D')
	->leftJoin('incomes AS I', 'I.id', '=', 'D.income_id')
	->leftJoin('branches AS B', 'B.num_branch', '=', 'I.id_branch')
	->select('I.date','I.id','I.total_sale','I.cantidad_depositar','I.orfis_sale','I.voucher_sale','B.name_branch',DB::raw('count(D.id) AS total_depositos'))
	->groupBy('I.id')
    ->get(); 

*/
		return View::make('puntoventa.index')->with('productos',$productos);
	}




	public function postBusqueda(){

		$b=Input::get('b');

        $productos = Producto::where('nombre', 'LIKE',"%$b%")->orWhere('codigo_barra', 'LIKE', "%$b%")->get();

		return View::make('puntoventa.busqueda')->with('productos',$productos);
		   /* foreach($productos as $prod){
		   	 echo   '<div class="large-4 columns"> 
		          		<div class="title">'.$prod->nombre.'</div>     		          
		     		</div>';
    		}*/
	}






}

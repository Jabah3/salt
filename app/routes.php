<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('principal');
});


Route::get('ejemplo', function()
{
	return "Holaaa";
});



Route::get('pagina', function()
{
	return View::make('pagination.slider');
});


Route::get('pagina2', function()
{
	return View::make('enterable');
});


/*Llamamos al controlador Auth*/

Route::get('login','AuthController@showLogin'); // Mostrar login
Route::post('login','AuthController@postLogin'); // Verificar datos
Route::get('logout','AuthController@logOut'); //Finalizar sesion

Route::group(['before' => 'auth'], function()
{
	Route::get('/','HomneController@showWelcome'); // Vista de inicio
});


Route::controller('roles','RolController');
Route::controller('unidad_medida','UnidadmedidaController');
Route::controller('usuarios','UsuarioController');
Route::controller('clientes','ClienteController');
Route::controller('grupos','GrupoController');
Route::controller('insumos','InsumoController');
Route::controller('inventarios','InventarioController');
Route::controller('productos','ProductoController');
Route::controller('proveedores','ProveedorController');
Route::controller('recetas','RecetaController');
Route::controller('ventas','VentaController');
Route::controller('sucursales','SucursalController');
Route::controller('punto_venta','PuntoventaController');


HTML::macro('clever_link', function($route, $text) {	
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}else{
		$active = '';
	}
  return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});
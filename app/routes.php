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


Route::controller('roles','RolController');
Route::controller('clientes','ClienteController');
Route::controller('grupos','GrupoController');
Route::controller('insumos','InsumoController');
Route::controller('inventarios','InventarioController');
Route::controller('productos','ProductoController');
Route::controller('proveedores','ProveedorController');
Route::controller('recetas','RecetaController');
Route::controller('ventas','VentaController');
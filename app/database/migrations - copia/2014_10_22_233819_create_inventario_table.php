<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventario',function($tabla){
			$tabla->increments('id');
			$tabla->integer('id_producto_insumo');
			$tabla->integer('tipo_inventario');
			$tabla->double('stock');
			$tabla->double('minimo');
			$tabla->double('maximo');
			$tabla->double('invetario_col');
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inventario');
	}

}

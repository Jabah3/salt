<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraInsumoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compra_insumo',function($tabla){
			$tabla->increments('id');
			$tabla->string('id_insumo');
			$tabla->integer('cantidad_insumo');
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('compra_insumo');
	}

}

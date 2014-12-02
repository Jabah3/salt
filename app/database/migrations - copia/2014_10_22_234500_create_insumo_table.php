<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insumo',function($tabla){
			$tabla->increments('id')->unsigned();
			$tabla->integer('id_unidad');
			$tabla->double('insumo_col');
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
		Schema::drop('insumo');
	}

}

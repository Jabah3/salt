<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablasSaltTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


		Schema::create('unidad_medida',function($tabla){
			$tabla->increments('id');
			$tabla->string('tipo_unidad');
			$tabla->integer('unidad_medida');
			$tabla->integer('descripcion');
			$tabla->timestamps();
		});




		Schema::create('rol',function($tabla){
			$tabla->increments('id');						
			$tabla->string('nombre');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});

		Schema::create('sucursal',function($tabla){
			$tabla->increments('id');						
			$tabla->string('nombre');
			$tabla->string('ciudad');
			$tabla->string('calle');
			$tabla->string('colonia');
			$tabla->string('giro');
			$tabla->timestamps();
		});

		Schema::create('grupo',function($tabla){
			$tabla->increments('id');						
			$tabla->string('nombre');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});


		Schema::create('usuarios',function($tabla){
			$tabla->increments('id');						
			$tabla->string('nombres');
			$tabla->string('apellidos');
			$tabla->integer('rol_id')->unsigned();
			$tabla->foreign('rol_id')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('sucursal_id')->unsigned();
			$tabla->foreign('sucursal_id')->references('id')->on('sucursal')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('telefono');
			$tabla->string('email');
			$tabla->integer('grupo_id')->unsigned();
			$tabla->foreign('grupo_id')->references('id')->on('grupo')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('ciudad');
			$tabla->string('estado');
			$tabla->integer('activo');
			$tabla->string('sexo');
			$tabla->string('foto');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});
		

		
		Schema::create('insumo',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->integer('unidad_medida_id')->unsigned();
			$tabla->foreign('unidad_medida_id')->references('id')->on('unidad_medida')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('descripcion');
			$tabla->string('marca');
			$tabla->double('activo');
			$tabla->double('caducidad');
			$tabla->double('imagen');
			$tabla->timestamps();
		});


		Schema::create('proveedor',function($tabla){
			$tabla->increments('id');			
			$tabla->string('empresa');			
			$tabla->string('nombre');
			$tabla->string('rfc');	
			$tabla->string('pais');	
			$tabla->string('estado');
			$tabla->string('ciudad');	
			$tabla->integer('codigo_postal');
			$tabla->string('colonia');	
			$tabla->string('calle');
			$tabla->string('telefono');				
			$tabla->string('email');
			$tabla->integer('activo');
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumo')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});

		Schema::create('producto',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->string('materia_prima');
			$tabla->integer('codigo_barra');
			$tabla->double('precio_venta');
			$tabla->double('costo_produccion');
			$tabla->string('activo');
			$tabla->string('fecha');
			$tabla->string('marca');
			$tabla->string('descripcion');
			$tabla->double('stock');
			$tabla->double('stock_minimo');
			$tabla->double('stock_maximo');
			$tabla->string('imagen');
			$tabla->double('cantidad');
			$tabla->integer('proveedor_id')->unsigned();
			$tabla->foreign('proveedor_id')->references('id')->on('proveedor')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('codigo');
			$tabla->integer('unidad_medida_id')->unsigned();
			$tabla->foreign('unidad_medida_id')->references('id')->on('unidad_medida')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('iva');
			$tabla->string('caducidad');
			$tabla->integer('usuario_id')->unsigned();
			$tabla->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});

		Schema::create('insumo_producto',function($tabla){
			$tabla->increments('id');
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumo')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade')->onUpdate('cascade');
		});
		


		Schema::create('inventario',function($tabla){
			$tabla->increments('id');
			$tabla->integer('producto_insumo_id')->unsigned();
			$tabla->foreign('producto_insumo_id')->references('id')->on('insumo_producto')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('tipo_inventario');
			$tabla->double('stock');
			$tabla->double('minimo');
			$tabla->double('maximo');
			$tabla->double('invetario_col');
			$tabla->timestamps();
		});







		Schema::create('compra_insumo',function($tabla){
			$tabla->increments('id');			
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumo')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('cantidad_insumo');
			$tabla->integer('costo');
			$tabla->timestamps();
		});




		Schema::create('insumo_proveedor',function($tabla){
			$tabla->increments('id');			
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumo')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});



		Schema::create('receta',function($tabla){
			$tabla->increments('id');			
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumo')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('cantidad');	
			$tabla->string('descripcion');
			$tabla->string('nombre');
			$tabla->timestamps();		
		});



		Schema::create('producto_proveedor',function($tabla){
			$tabla->increments('id');						
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('proveedor_id')->unsigned();		
			$tabla->foreign('proveedor_id')->references('id')->on('proveedor')->onDelete('restrict')->onUpdate('restrict');	
		});




		Schema::create('compra_producto',function($tabla){
			$tabla->increments('id');						
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('unidad_medida_id')->unsigned();
			$tabla->foreign('unidad_medida_id')->references('id')->on('unidad_medida')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('cantidad_producto');
			$tabla->timestamps();
		});



		Schema::create('registro_eventos',function($tabla){
			$tabla->increments('id');						
			$tabla->string('tipo_evento');
			$tabla->integer('usuario_id')->unsigned();
			$tabla->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('observaciones');
			$tabla->timestamps();
		});

		Schema::create('clientes',function($tabla){
			$tabla->increments('id');						
			$tabla->string('nombres');
			$tabla->string('apellidos');
			$tabla->integer('rol_id')->unsigned();
			$tabla->foreign('rol_id')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('sucursal_id')->unsigned();
			$tabla->foreign('sucursal_id')->references('id')->on('sucursal')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('telefono');
			$tabla->string('email');
			$tabla->string('calle');
			$tabla->string('ciudad');
			$tabla->string('estado');
			$tabla->integer('activo');
			$tabla->string('sexo');
			$tabla->string('foto');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});

		Schema::create('venta',function($tabla){
			$tabla->increments('id');						
			$tabla->double('total');
			$tabla->double('efectivo');
			$tabla->double('cambio');
			$tabla->integer('folio');
			$tabla->integer('cliente_id')->unsigned();
			$tabla->foreign('cliente_id')->references('id')->on('clientes')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('usuario_id')->unsigned();
			$tabla->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});

		Schema::create('venta_detalle',function($tabla){
			$tabla->increments('id');						
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('venta_id')->unsigned();
			$tabla->foreign('venta_id')->references('id')->on('venta')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('precio');
			$tabla->string('tipo_venta');
			$tabla->integer('unidad_medida_id')->unsigned();
			$tabla->foreign('unidad_medida_id')->references('id')->on('unidad_medida')->onDelete('restrict')->onUpdate('restrict');
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
		
		//Tablas Con llaves foraneas
		Schema::drop('compra_insumo');
		Schema::drop('insumo_has_producto');
		

		//tablas independientes
		Schema::drop('insumo');
		Schema::drop('producto');
		Schema::drop('inventario');
		
	}

}

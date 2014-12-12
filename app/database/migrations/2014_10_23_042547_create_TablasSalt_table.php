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


		Schema::create('unidad_medidas',function($tabla){
			$tabla->increments('id');
			$tabla->string('tipo_unidad');
			$tabla->double('unidad_medida');
			$tabla->integer('descripcion');
			$tabla->timestamps();
		});



		Schema::create('roles',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});



		Schema::create('sucursales',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->string('ciudad');
			$tabla->string('calle');
			$tabla->string('colonia');
			$tabla->string('giro');
			$tabla->string('rfc');
			$tabla->string('mensaje_sucursal');
			$tabla->string('pagina_web');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});



		Schema::create('grupos',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->string('descripcion');
			$tabla->timestamps();
		});


		Schema::create('usuarios',function($tabla){
			$tabla->increments('id');
			$tabla->string('usuario')->unique();
			$tabla->string('contrasena');
			$tabla->string('nombre');
			$tabla->string('apellido');
			$tabla->integer('rol_id')->unsigned();
			$tabla->foreign('rol_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('sucursal_id')->unsigned();
			$tabla->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('telefono');
			$tabla->string('email')->uniqued();
			$tabla->integer('grupo_id')->unsigned();
			$tabla->foreign('grupo_id')->references('id')->on('grupos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('ciudad');
			$tabla->string('estado');
			$tabla->integer('activo');
			$tabla->string('sexo');
			$tabla->string('foto');
			$tabla->string('descripcion');
			$tabla->string('remember_token',100)->nullable();
			$tabla->timestamps();
		});



		Schema::create('insumos',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->integer('unidad_medidas_id')->unsigned();
			$tabla->foreign('unidad_medidas_id')->references('id')->on('unidad_medidas')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('descripcion');
			$tabla->string('marca');
			$tabla->integer('activo');
			$tabla->date('caducidad');
			$tabla->string('imagen');
			$tabla->timestamps();
		});


		Schema::create('proveedores',function($tabla){
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
			$tabla->foreign('insumo_id')->references('id')->on('insumos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});

		Schema::create('productos',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre');
			$tabla->string('materia_prima');
			$tabla->integer('codigo_barra');
			$tabla->double('precio_venta');
			$tabla->double('costo_produccion');
			$tabla->integer('activo');
			$tabla->date('fecha');
			$tabla->string('marca');
			$tabla->string('descripcion');
			$tabla->double('stock');
			$tabla->double('stock_minimo');
			$tabla->double('stock_maximo');
			$tabla->string('imagen');
			$tabla->double('cantidad');
			$tabla->integer('proveedores_id')->unsigned();
			$tabla->foreign('proveedores_id')->references('id')->on('proveedores')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('codigo');
			$tabla->integer('unidad_medidas_id')->unsigned();
			$tabla->foreign('unidad_medidas_id')->references('id')->on('unidad_medidas')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('iva');
			$tabla->date('caducidad');
			$tabla->integer('usuario_id')->unsigned();
			$tabla->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});


		Schema::create('insumos_productos',function($tabla){
			$tabla->increments('id');
			$tabla->integer('insumos_id')->unsigned();
			$tabla->foreign('insumos_id')->references('id')->on('insumos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('productos_id')->unsigned();
			$tabla->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
		});





		Schema::create('inventarios',function($tabla){
			$tabla->increments('id');
			$tabla->integer('producto_insumo_id')->unsigned();
			$tabla->foreign('producto_insumo_id')->references('id')->on('insumos_productos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('tipo_inventario');
			$tabla->double('stock');
			$tabla->double('minimo');
			$tabla->double('maximo');
			$tabla->double('invetario_col');
			$tabla->timestamps();
		});



		Schema::create('compras_insumos',function($tabla){
			$tabla->increments('id');
			$tabla->integer('insumo_id')->unsigned();
			$tabla->foreign('insumo_id')->references('id')->on('insumos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('cantidad_insumo');
			$tabla->double('costo');
			$tabla->timestamps();
		});




		Schema::create('insumos_proveedores',function($tabla){
			$tabla->increments('id');
			$tabla->integer('insumos_id')->unsigned();
			$tabla->foreign('insumos_id')->references('id')->on('insumos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->timestamps();
		});



		Schema::create('recetas',function($tabla){
			$tabla->increments('id');
			$tabla->integer('insumos_id')->unsigned();
			$tabla->foreign('insumos_id')->references('id')->on('insumos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('productos_id')->unsigned();
			$tabla->foreign('productos_id')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('cantidad');
			$tabla->string('descripcion');
			$tabla->string('nombre');
			$tabla->timestamps();
		});



		Schema::create('productos_proveedores',function($tabla){
			$tabla->increments('id');
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('proveedor_id')->unsigned();
			$tabla->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('restrict')->onUpdate('restrict');
		});




		Schema::create('compras_productos',function($tabla){
			$tabla->increments('id');
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('unidad_medida_id')->unsigned();
			$tabla->foreign('unidad_medida_id')->references('id')->on('unidad_medidas')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('cantidad_producto');
			$tabla->timestamps();
		});



		Schema::create('registros_eventos',function($tabla){
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
			$tabla->foreign('rol_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('sucursal_id')->unsigned();
			$tabla->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('restrict')->onUpdate('restrict');
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



		Schema::create('ventas',function($tabla){
			$tabla->increments('id');
			$tabla->double('total');
			$tabla->double('efectivo');
			$tabla->double('cambio');
			$tabla->integer('folio');
			$tabla->integer('cliente_id')->unsigned();
			$tabla->foreign('cliente_id')->references('id')->on('clientes')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('usuario_id')->unsigned();
			$tabla->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('subtotal');
			$tabla->timestamps();
		});




		Schema::create('ventas_detalles',function($tabla){
			$tabla->increments('id');
			$tabla->integer('producto_id')->unsigned();
			$tabla->foreign('producto_id')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
			$tabla->integer('venta_id')->unsigned();
			$tabla->foreign('venta_id')->references('id')->on('ventas')->onDelete('restrict')->onUpdate('restrict');
			$tabla->double('precio');
			$tabla->string('tipo_venta');
			$tabla->integer('unidad_medida_id')->unsigned();
			$tabla->foreign('unidad_medida_id')->references('id')->on('unidad_medidas')->onDelete('restrict')->onUpdate('restrict');
			$tabla->string('detalle_venta');
			$tabla->timestamps();
		});



		Schema::create('tipo_tiendas',function($tabla){
			$tabla->increments('id');
			$tabla->string('tipo_tienda');
			$tabla->string('detalle');
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

		Schema::drop('clientes');
		Schema::drop('compras_insumos');
		Schema::drop('compras_productos');
		Schema::drop('grupos');
		Schema::drop('insumos');
		Schema::drop('insumos_productos');
		Schema::drop('insumos_proveedors');
		Schema::drop('inventarios');
		Schema::drop('productos');
		Schema::drop('productos_proveedors');
		Schema::drop('proveedores');
		Schema::drop('recetas');
		Schema::drop('registros_eventos');
		Schema::drop('roles, sucursales');
		Schema::drop('unidades_medidas');
		Schema::drop('usuarios');
		Schema::drop('ventas');
		Schema::drop('ventas_detalles');
		Schema::drop('tipo_tiendas');

	}

}

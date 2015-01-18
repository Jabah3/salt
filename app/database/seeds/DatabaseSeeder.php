<?php


class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('RolesTablaSeeder');
        $this->command->info('Roles table seeded!');

        $this->call('GruposTablaSeeder');
        $this->command->info('Grupos table seeded!');

        $this->call('SucursalesTablaSeeder');
        $this->command->info('Sucursales table seeded!');

        $this->call('UsuariosTablaSeeder');
        $this->command->info('Usuarios table seeded!');

        $this->call('CategoriasTablaSeeder');
        $this->command->info('Sucursales table seeded!');

        $this->call('GruposTablaSeeder');
        $this->command->info('Sucursales table seeded!');

        $this->call('ProductosTablaSeeder');
        $this->command->info('Sucursales table seeded!');

    }

}



class RolesTablaSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->insert(array(
                'nombre' => 'Administrador de Sistema',
                'descripcion' => "Administrador"    
        ));
        DB::table('roles')->insert(array(
                'nombre' => 'Administrador',
                'descripcion' => "Administrador"    
        ));
        DB::table('roles')->insert(array(
                'nombre' => 'Empleado',
                'descripcion' => "Empleado"    
        ));
        DB::table('roles')->insert(array(
                'nombre' => 'Cocina',
                'descripcion' => "Cocineros"    
        ));
    }

}


class GruposTablaSeeder extends Seeder {

    public function run()
    {
        DB::table('grupos')->insert(array(
                'nombre' => 'Administradores',
                'descripcion' => "Administradores Del sistema"    
        ));
        DB::table('grupos')->insert(array(
                'nombre' => 'Ventas',
                'descripcion' => "Servicios de Ventas"    
        ));
        DB::table('grupos')->insert(array(
                'nombre' => 'Cocina',
                'descripcion' => "Servicio de Cocina"    
        ));

    }

}




class SucursalesTablaSeeder extends Seeder {

    public function run()
    {
        DB::table('sucursales')->insert(array(
                'nombre' => 'Centro',
                'ciudad' => "Xalapa",
                'calle' => 'Lucio S/N',    
                'colonia' => 'Centro',
                'giro' => 'Comida',
                'rfc' => 'COMO234674HFG',
                'mensaje_sucursal' => 'Un Mensaje de sucursal',
                'pagina_web' => 'http://somepage.com',
                'descripcion' => 'Una descripcion para la sucursal',
        ));
    }

}




class UsuariosTablaSeeder extends Seeder {

    public function run()
    {
        DB::table('usuarios')->insert(array(
                'usuario' => 'gibrancordoba',
                'contrasena' =>  Hash::make('123456'),
                'nombre' => 'Oscar Gibran',
                'apellido' => "Cordoba Mendez",
                'rol_id' => 1,
                'sucursal_id' => 1,
                'telefono' => "Cordoba Mendez",
                'email' => "Cordoba Mendez",
                'grupo_id' => 1,
                'ciudad' => "Xalapa",
                'estado' => "Veracruz",
                'activo' => 1,
                'sexo' => "Masculino",
                'foto' => "../somewhere/ever",
                'descripcion' => "Una Descripccion"

        ));

    }

}


class ProductosTablaSeeder extends Seeder {
    public function run()
    {
        DB::table('productos')->insert(array(
                'id' => '1',
                'nombre' => 'Hamburguesa chica',
                'materia_prima' => NULL,
                'codigo_barra' => '111111111',
                'precio_venta' => '10',
                'costo_produccion' => '8',
                'activo' => '1',
                'fecha' => '2015-01-09',
                'marca' => 'Propia',
                'descripcion' => 'Hamburquesa Chica',
                'stock' => '100',
                'stock_minimo' => '5',
                'stock_maximo' => '200',
                'imagen' => 'hamburguesa_chica.png',
                'cantidad' => '23',
                'proveedores_id' => NULL,
                'codigo' => '200',
                'unidad_medidas_id' => NULL,
                'iva' => '0.16',
                'categoria_id' => '1',
                'caducidad' => NULL,
                'usuario_id' => NULL,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
        ));

        DB::table('productos')->insert(array(
                'id' => '2',
                'nombre' => 'Hamburguesa Mediana',
                'materia_prima' => NULL,
                'codigo_barra' => '222222222',
                'precio_venta' => '15',
                'costo_produccion' => '10',
                'activo' => '1',
                'fecha' => '2015-01-09',
                'marca' => 'Propia',
                'descripcion' => 'Hamburguesa Chica',
                'stock' => '100',
                'stock_minimo' => '5',
                'stock_maximo' => '200',
                'imagen' => 'hamburguesa_mediana.png',
                'cantidad' => '23',
                'proveedores_id' => NULL,
                'codigo' => '300',
                'unidad_medidas_id' => NULL,
                'iva' => '0.16',
                'categoria_id' => '1',
                'caducidad' => NULL,
                'usuario_id' => NULL,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
        ));

        DB::table('productos')->insert(array(
                'id' => '3',
                'nombre' => 'Hamburguesa Grande',
                'materia_prima' => NULL,
                'codigo_barra' => '333333333',
                'precio_venta' => '20',
                'costo_produccion' => '15',
                'activo' => '1',
                'fecha' => '2015-01-09',
                'marca' => 'Propia',
                'descripcion' => 'Hamburguesa Grande',
                'stock' => '100',
                'stock_minimo' => '5',
                'stock_maximo' => '200',
                'imagen' => 'hamburguesa_grande.png',
                'cantidad' => '23',
                'proveedores_id' => NULL,
                'codigo' => '400',
                'unidad_medidas_id' => NULL,
                'iva' => '0.16',
                'categoria_id' => '1',
                'caducidad' => NULL,
                'usuario_id' => NULL,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
        ));
    }
}



class CategoriasTablaSeeder extends Seeder {
    public function run()
    {
        DB::table('categorias')->insert(array(
                'id' => '1',
                'nombre' => 'Bebidas',
                'descripcion' => 'Bebidas',
                'color' => '#c0b0b0',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
        ));

        DB::table('categorias')->insert(array(
                'id' => '2',
                'nombre' => 'Comida',
                'descripcion' => 'Comida',
                'color' => '#f3a2a2',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
        ));
    }
}
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
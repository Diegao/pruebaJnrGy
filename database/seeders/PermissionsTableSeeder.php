<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'Ver configuración',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            1 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'Crear configuración',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            2 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'Editar configuración',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            3 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'Eliminar configuración',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            4 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'Ver opcion menu',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            5 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'Crear opcion menu',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            6 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'Editar opcion menu',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            7 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'Eliminar opcion menu',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            8 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'Ver permisos',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            9 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'Crear permisos',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            10 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'Editar permisos',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            11 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'Eliminar permisos',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            12 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'Ver roles',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            13 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'Crear roles',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            14 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'Editar roles',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            15 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'Eliminar roles',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            16 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 17,
                'name' => 'Ver usuarios',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            17 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 18,
                'name' => 'Crear usuarios',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            18 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 19,
                'name' => 'Editar usuarios',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            19 => 
            array (
                'created_at' => '2024-05-04 09:43:14',
                'guard_name' => 'web',
                'id' => 20,
                'name' => 'Eliminar usuarios',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            20 => 
            array (
                'created_at' => '2024-05-04 09:45:38',
                'guard_name' => 'web',
                'id' => 21,
                'name' => 'Ver Clientes',
                'updated_at' => '2024-05-04 09:45:38',
            ),
            21 => 
            array (
                'created_at' => '2024-05-04 09:45:47',
                'guard_name' => 'web',
                'id' => 22,
                'name' => 'Crear Clientes',
                'updated_at' => '2024-05-04 09:45:47',
            ),
            22 => 
            array (
                'created_at' => '2024-05-04 09:45:55',
                'guard_name' => 'web',
                'id' => 23,
                'name' => 'Editar Clientes',
                'updated_at' => '2024-05-04 09:45:55',
            ),
            23 => 
            array (
                'created_at' => '2024-05-04 09:46:04',
                'guard_name' => 'web',
                'id' => 24,
                'name' => 'Eliminar Clientes',
                'updated_at' => '2024-05-04 09:46:04',
            ),
        ));
        
        
    }
}
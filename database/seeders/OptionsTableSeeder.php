<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'color' => 'text-olive',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-chart-line',
                'icono_r' => NULL,
                'id' => 1,
                'nombre' => 'Dashboard',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'dashboard',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            1 => 
            array (
                'color' => 'text-maroon',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => '2024-05-04 09:51:30',
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-tools',
                'icono_r' => NULL,
                'id' => 2,
                'nombre' => 'Admin',
                'option_id' => NULL,
                'orden' => 15,
                'ruta' => '',
                'updated_at' => '2024-05-04 09:51:30',
            ),
            2 => 
            array (
                'color' => 'text-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-users',
                'icono_r' => NULL,
                'id' => 3,
                'nombre' => 'Usuarios',
                'option_id' => 2,
                'orden' => 0,
                'ruta' => 'users.index',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            3 => 
            array (
                'color' => 'text-purple',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-user-tag',
                'icono_r' => NULL,
                'id' => 4,
                'nombre' => 'Roles',
                'option_id' => 2,
                'orden' => 2,
                'ruta' => 'roles.index',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            4 => 
            array (
                'color' => 'text-indigo',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-key',
                'icono_r' => NULL,
                'id' => 5,
                'nombre' => 'Permisos',
                'option_id' => 2,
                'orden' => 3,
                'ruta' => 'permissions.index',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            5 => 
            array (
                'color' => 'text-teal',
                'created_at' => '2021-03-14 21:17:37',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-cogs',
                'icono_r' => NULL,
                'id' => 6,
                'nombre' => 'Configuraciones',
                'option_id' => 2,
                'orden' => 4,
                'ruta' => 'profile.business',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            6 => 
            array (
                'color' => 'text-indigo',
                'created_at' => '2021-03-14 21:11:34',
                'deleted_at' => '2024-05-04 09:51:34',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-file-code',
                'icono_r' => NULL,
                'id' => 7,
                'nombre' => 'Developer',
                'option_id' => NULL,
                'orden' => 25,
                'ruta' => 'x',
                'updated_at' => '2024-05-04 09:51:34',
            ),
            7 => 
            array (
                'color' => 'text-purple',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-check-circle',
                'icono_r' => NULL,
                'id' => 8,
                'nombre' => 'Prueba API\'S',
                'option_id' => 7,
                'orden' => 21,
                'ruta' => 'dev.prueba.api',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            8 => 
            array (
                'color' => 'text-indigo',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-cogs',
                'icono_r' => NULL,
                'id' => 9,
                'nombre' => 'Configuraciones',
                'option_id' => 7,
                'orden' => 20,
                'ruta' => 'dev.configurations.index',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            9 => 
            array (
                'color' => 'text-purple',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-passport',
                'icono_r' => NULL,
                'id' => 10,
                'nombre' => 'Clientes Passport',
                'option_id' => 7,
                'orden' => 22,
                'ruta' => 'dev.passport.clients',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            10 => 
            array (
                'color' => 'text-orange',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-list',
                'icono_r' => NULL,
                'id' => 11,
                'nombre' => 'Menu',
                'option_id' => 7,
                'orden' => 1,
                'ruta' => 'options.index',
                'updated_at' => '2024-05-04 09:43:14',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:44:03',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-user',
                'icono_r' => NULL,
                'id' => 12,
                'nombre' => 'Soporte Tecnico',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => '/',
                'updated_at' => '2024-05-04 09:44:03',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:44:24',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-users',
                'icono_r' => NULL,
                'id' => 13,
                'nombre' => 'Clientes',
                'option_id' => 12,
                'orden' => 0,
                'ruta' => 'clientes.index',
                'updated_at' => '2024-05-04 09:44:24',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:45:00',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-calculator',
                'icono_r' => NULL,
                'id' => 14,
                'nombre' => 'Factorial',
                'option_id' => 12,
                'orden' => 0,
                'ruta' => 'factorial',
                'updated_at' => '2024-05-04 09:45:00',
            ),
            14 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:45:16',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 15,
                'nombre' => 'Amortizacion',
                'option_id' => 12,
                'orden' => 0,
                'ruta' => 'amortizacion',
                'updated_at' => '2024-05-04 09:45:16',
            ),
        ));
        
        
    }
}
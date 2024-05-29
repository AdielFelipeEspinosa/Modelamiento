<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'Nombres' => 'Adiel',
                'Apellidos' => 'Espinosa',
                'Correo' => 'adiel@example.com',
                'Celular' => '3117159040',
                'Direccion' => 'Cra 15',
                'password' => Hash::make('123'),
                'Fecha_Registro' => now(),
                'Roles_idRoles' => 1,
                'Departamentos_idDepartamentos' => 1
            ],
            [
                'Nombres' => 'Cristian',
                'Apellidos' => 'Musse',
                'Correo' => 'musse@example.com',
                'Celular' => '1234567890',
                'Direccion' => 'Cra 16',
                'password' => Hash::make('123'),
                'Fecha_Registro' => now(),
                'Roles_idRoles' => 2,
                'Departamentos_idDepartamentos' => 1
            ]
        ];

        DB::table('Users')->insert($datos);
    }
}

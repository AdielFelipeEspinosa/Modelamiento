<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Departamentos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'Nombre' => 'Popayan',
                'Municipios_idMunicipios' => 1
            ]
        ];

        DB::table('Departamentos')->insert($datos);
    }
}

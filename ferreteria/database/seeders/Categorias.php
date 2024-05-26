<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'Nombre' => 'Herramienta'
            ],
            [
                'Nombre' => 'Acabados'
            ]
        ];

        DB::table('categorias')->insert($datos);
    }
}

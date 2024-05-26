<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'Nombre' => 'Taladro',
                'Descripcion' => 'Taladro Makita perfecta para trabajos de la casa',
                'Precio' => 800000,
                'Cantidad' => 10,
                'Link' => 'https://easycolombia.vtexassets.com/arquivos/ids/159220-800-600?v=638066264112900000&width=800&height=600&aspect=true',
                'Categorias_idCategorias' => 1
            ],
            [
                'Nombre' => 'Pintura Blanca',
                'Descripcion' => 'Cueñete de Pintura Pintuland Color Blanco',
                'Precio' => 76500,
                'Cantidad' => 50,
                'Link' => 'https://pintuland.com.co/wp-content/uploads/2020/07/Vinilo_Superlavable_Tipo_1_pintuland.jpg',
                'Categorias_idCategorias' => 2
            ],
        ];

        DB::table('productos')->insert($datos);
    }
}

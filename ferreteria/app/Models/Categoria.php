<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Categorias';
    
    protected $primaryKey = "idCategorias";
    

    public function Productos()
    {
        return $this->hasMany(Producto::class, 'Categorias_idCategorias');
    }
}

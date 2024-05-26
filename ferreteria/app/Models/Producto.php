<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Productos';
    
    protected $primaryKey = "idProductos";
    

    public function Categorias()
    {
        return $this->belongsTo(Categoria::class, 'idCategorias');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    use HasFactory;

    public $timestamps = false;

    protected $table = 'Municipios';
    
    protected $primaryKey = "idMunicipios";
    

    public function Departamentos()
    {
        return $this->hasMany(Departamento::class, 'Municipios_idMunicipios');
    }
}

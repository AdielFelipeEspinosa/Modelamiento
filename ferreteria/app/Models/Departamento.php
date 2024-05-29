<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Departamentos';
    
    protected $primaryKey = "idDepartamentos";

    public function Municipios()
    {
        return $this->belongsTo(Municipio::class, 'Municipios_idMunicipios');
    }
    
    public function User()
    {
        return $this->hasMany(User::class, 'Departamentos_idDepartamentos');
    }


}

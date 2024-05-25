<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'Roles';
    
    protected $primaryKey = "idRol";
    

    public function Users()
    {
        return $this->hasMany(User::class, 'idUsers');
    }
}

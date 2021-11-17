<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function partidas()
    {
        return $this->hasMany('App\Models\Partidas');
    }
    protected $fillable = ['Nombre', 'Apellido', 'Acepto'];    
    use HasFactory;
}

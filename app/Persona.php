<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'cedula', 'nombre'
    ];
    
    public function vehiculo()
    {
        return $this->hasOne('App\Persona', 'dueno', 'cedula');
    }

}

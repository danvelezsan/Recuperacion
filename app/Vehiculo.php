<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'placa', 'marca', 'dueno'
    ];

    public function marca()
    {
        return $this->belongsTo('App\Marca', 'marca', 'nombre');
    }

    public function dueno()
    {
        return $this->belongsTo('App\Persona', 'dueno', 'cedula');
    }
    
}

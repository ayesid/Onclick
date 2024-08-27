<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroDeportivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'numero_canchas',
        'imagen',
        'descripcion',
        'ubicacion',
        'parqueadero',
    ];
    use HasFactory;
    public function canchas(){
        return $this->hasMany('App\Models\Cancha');
    }

}

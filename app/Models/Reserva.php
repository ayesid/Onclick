<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    public function cancha(){
        return $this->belongsTo('App\Models\Cancha');
    }

    public function horarioreserva(){
        return $this->hasMany('App\Models\HorarioReserva');
    }

    public function factura(){
        return $this->hasMany('App\Models\Factura');
    }
}

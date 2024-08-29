<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioReserva extends Model
{
    use HasFactory;

    public function reserva(){
        return $this->belongsTo('App\Models\Reserva');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    //public function cancha(){
    //    return $this->belongsTo('App\Models\Cancha');
   /// }

  

    public function factura(){
        return $this->hasMany('App\Models\Factura');
    }
    protected $fillable = [
        'cancha_id',
        'nombre_cliente',
        'telefono_cliente',
        'email_cliente',
        'fecha_reserva',
        'duracion',
        'total_precio',
    ];

    public function cancha()
    {
        return $this->belongsTo(Cancha::class);
    }
}

<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function municipio()//uno a uno
    {
        return $this->belongsTo('App\Models\Municipio');
    }

    public function tipopersona()//uno a uno
    {
        return $this->belongsTo ('App\Models\TipoPersona');
    }


}

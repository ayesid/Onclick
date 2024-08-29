<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }

    public function persona()//uno a uno
    {
        return $this->hasOne('App\Models\Persona');
    }

    public function centroDeportivo(){
        return $this->hasMany('App\Models\CentroDeportivo');
    }

}

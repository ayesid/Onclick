<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    use HasFactory;
    public function persona()//uno a uno
    {
        return $this->hasOne('App\Models\Persona');
    }
}

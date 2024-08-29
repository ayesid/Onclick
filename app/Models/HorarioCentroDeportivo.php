<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioCentroDeportivo extends Model
{
    use HasFactory;

    public function centroDeportivo(){
        return $this->belongsTo('App\Models\CentroDeportivo');
    }

}

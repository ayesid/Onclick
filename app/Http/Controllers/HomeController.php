<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
    return view('onclick.index');
   }
   public function listaCentrosDeportivos()
   {
       // Lógica para la vista 'centroDeportivo'
       return view('centroDeportivo.listar'); 
   }

   public function Nosotros(){
    return view('onclick.nosotros.nosotros');
    }
    public function Servicios(){
    return view('onclick.nosotros.servicios');
    }
  


   public function Bombonera(){
        return view('onclick.canchas.bombonera');
   }
   public function Cubo(){
    return view('onclick.canchas.cubo');
    }
    public function Macabi(){
        return view('onclick.canchas.macabi');
    }
    public function Maracana(){
        return view('onclick.canchas.maracana');
    }
    public function Templo(){
        return view('onclick.canchas.templo');
    }
    public function Monumental(){
        return view('onclick.canchas.monumental');
    }
   
}

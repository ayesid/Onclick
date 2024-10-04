<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homes()
    {
        return view('welcome');
    }

    public function nowelcome()
    {
        return view('nosowelcome');
    }

    public function seservicios()
    {
        return view('serwelcome');
    }

    public function home()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('onclick.index');
    }

   




    public function listaCentrosDeportivos()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('centroDeportivo.listar');
    }

    public function Nosotros()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('onclick.nosotros.nosotros');
    }
    public function Servicios()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('onclick.nosotros.servicios');
    }

    public function Bombonera()
    {
        return view('onclick.canchas.bombonera');
    }
    public function Cubo()
    {
        return view('onclick.canchas.cubo');
    }
    public function Macabi()
    {
        return view('onclick.canchas.macabi');
    }
    public function Maracana()
    {
        return view('onclick.canchas.maracana');
    }
    public function Templo()
    {
        return view('onclick.canchas.templo');
    }
    public function Monumental()
    {
        return view('onclick.canchas.monumental');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancha;
use App\Models\Reserva;
use Carbon\Carbon;

class ReservaController extends Controller
{

 // Método para listar las reservas
 public function listaReservas()
 {
     $reservas = Reserva::with('cancha')->get(); // Cargar reservas junto con la cancha
     return view('reservas.listaReserva', compact('reservas')); // Pasar reservas a la vista
 }

    public function disponibilidad($cancha_id) // Asegúrate de que estás recibiendo el ID de la cancha
{
    // Cargar la cancha específica
    $cancha = Cancha::findOrFail($cancha_id); // Obtiene la cancha

    // Carga todas las canchas (si es necesario)
    $canchas = Cancha::all(); // Puede ser útil para listar todas las canchas

    return view('reservas.create', compact('canchas', 'cancha')); // Pasar también la cancha
}

    public function store(Request $request)
    {
        // Validación del formulario
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'telefono_cliente' => 'required|string|max:20',
            'email_cliente' => 'required|email',
            'cancha_id' => 'required|exists:canchas,id',
            'fecha_reserva' => 'required|date',
            'duracion' => 'required|integer|min:1|max:6',
        ]);

        // Obtener la cancha y calcular el precio
        $cancha = Cancha::findOrFail($request->cancha_id);
        $total_precio = $cancha->precio * $request->duracion;

        // Guardar la reserva
        Reserva::create([
            'nombre_cliente' => $request->nombre_cliente,
            'telefono_cliente' => $request->telefono_cliente,
            'email_cliente' => $request->email_cliente,
            'cancha_id' => $request->cancha_id,
            'fecha_reserva' => Carbon::parse($request->fecha_reserva),
            'duracion' => $request->duracion,
            'total_precio' => $total_precio,
        ]);

        return redirect()->back()->with('success', 'Reserva creada exitosamente.');
    }

    // Método para devolver las reservas en formato JSON (para FullCalendar)
    public function getReservas()
    {
        $reservas = Reserva::select('fecha_reserva', 'duracion', 'cancha_id')->get();
        $eventos = [];

        foreach ($reservas as $reserva) {
            $eventos[] = [
                'title' => 'Reservado',
                'start' => $reserva->fecha_reserva,
                'end' => Carbon::parse($reserva->fecha_reserva)->addHours($reserva->duracion),
                'color' => '#FF0000', // Color de la reserva
            ];
        }

        return response()->json($eventos);
    }
}

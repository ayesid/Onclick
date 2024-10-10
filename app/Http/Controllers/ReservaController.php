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
 public function create()
{
    $canchas = Cancha::all(); // Traer todas las canchas
    return view('reservas.create', compact('canchas')); // Enviar las canchas a la vista
}

 

    public function disponibilidad($cancha_id) // Asegúrate de que estás recibiendo el ID de la cancha
{
    $cancha = Cancha::findOrFail($cancha_id); // Obtiene la cancha
    $canchas = Cancha::all(); // Puede ser útil para listar todas las canchas

    return view('reservas.create', compact('canchas', 'cancha')); // Pasar también la cancha
}

public function store(Request $request)
{
    // Validar datos
    $validatedData = $request->validate([
        'nombre_cliente' => 'required|string|max:255',
        'telefono_cliente' => 'required|string|max:20',
        'email_cliente' => 'required|email',
        'cancha_id' => 'required|exists:canchas,id', // Verifica que el ID sea válido
        'fecha_reserva' => 'required|date',
        'duracion' => 'required|integer|min:1|max:6',
    ]);
    

    // Obtener la cancha y calcular el precio total
    $cancha = Cancha::findOrFail($validatedData['cancha_id']);
    $total_precio = $cancha->precio * $validatedData['duracion'];

    // Crear la reserva
    Reserva::create([
        'nombre_cliente' => $validatedData['nombre_cliente'],
        'telefono_cliente' => $validatedData['telefono_cliente'],
        'email_cliente' => $validatedData['email_cliente'],
        'cancha_id' => $validatedData['cancha_id'], // Guardar el ID de la cancha
        'fecha_reserva' => Carbon::parse($validatedData['fecha_reserva']),
        'duracion' => $validatedData['duracion'],
        'total_precio' => $total_precio,
    ]);

    // Redirigir con un mensaje de éxito
    return redirect()->back()->with('success', 'Reserva creada exitosamente.');
}

public function destroy($id)
{
    $reserva = Reserva::findOrFail($id); // Buscar la reserva por ID
    $reserva->delete(); // Eliminar la reserva

    return redirect()->back()->with('success', 'Reserva eliminada exitosamente.');
}
public function edit($id)
{
    $reserva = Reserva::findOrFail($id); // Buscar la reserva por ID
    $canchas = Cancha::all(); // Obtener todas las canchas para el formulario

    return view('reservas.edit', compact('reserva', 'canchas')); // Enviar los datos a la vista
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

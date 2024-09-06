<?php

namespace App\Http\Controllers;
use App\Models\centroDeportivo;
use App\Models\CentroDeportivo as ModelsCentroDeportivo;
use App\Models\Municipio;
use Illuminate\Http\Request;

class CentroDeportivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listaCentrosDeportivos()
    {
        $centrosDeportivos = CentroDeportivo::all();
        return view('centroDeportivo.listaCentrosDeportivos', compact('centrosDeportivos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipios = Municipio::all(); // Obtiene todos los municipios
        return view('centroDeportivo.create', compact('municipios')); // Pasa los municipios a la vista

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);
    
        $centrosDeportivo = new CentroDeportivo();
        $centrosDeportivo->nombre = $request->nombre;
        $centrosDeportivo->direccion = $request->direccion;
        $centrosDeportivo->telefono = $request->telefono;
        $centrosDeportivo->numero_canchas = $request->numero_canchas;
    
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $centrosDeportivo->imagen = $imageName;
        }
    
        $centrosDeportivo->descripcion = $request->descripcion;
        $centrosDeportivo->ubicacion = $request->ubicacion;
        $centrosDeportivo->parqueadero = $request->parqueadero;
    
        // Guardar el objeto en la base de datos
        $centrosDeportivo->save();
    
        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Centro deportivo creado con éxito.');
    }
    
    
    public function show(string $id)
    {
          // Obtiene el centro deportivo
    $centroDeportivo = CentroDeportivo::findOrFail($id);
    
    // Obtiene las canchas asociadas
    $canchas = $centroDeportivo->canchas;

    return view('canchas.show', compact('centroDeportivo', 'canchas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

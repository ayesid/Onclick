<?php

namespace App\Http\Controllers;

use App\Models\centroDeportivo;
use App\Models\Municipio;
use Illuminate\Http\Request;

class CentroDeportivoController extends Controller
{

    public function listaCentrosDeportivosWelcome()
    {
        $centrosDeportivos = CentroDeportivo::all();
        return view('listaCentrosDeportivosWelcome', compact('centrosDeportivos'));
    }



    public function listaCentrosDeportivos()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $centrosDeportivos = CentroDeportivo::all();
        return view('admin.SuperAdmin.listaCentrosDeportivos', compact('centrosDeportivos'));
    }


    public function listaCentrosDeportivosuser()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $centrosDeportivos = CentroDeportivo::all();
        return view('onclick.nosotros.listaCentrosDeportivosWelcome', compact('centrosDeportivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $municipios = Municipio::all(); // Obtiene todos los municipios
        return view('admin.SuperAdmin.create', compact('municipios')); // Pasa los municipios a la vista
        // return view('admin.SuperAdmin.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
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
        $centrosDeportivo->municipio_id = $request->municipio_id;
        $centrosDeportivo->descripcion = $request->descripcion;
        $centrosDeportivo->parqueadero = $request->parqueadero;

        // Guardar el objeto en la base de datos
        $centrosDeportivo->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Centro deportivo creado con éxito.');
    }


    // public function show(string $id)
    // {
    //       // Obtiene el centro deportivo
    // $centroDeportivo = CentroDeportivo::findOrFail($id);

    // // Obtiene las canchas asociadas
    // $canchas = $centroDeportivo->canchas;

    // return view('canchas.show', compact('centroDeportivo', 'canchas'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $centroDeportivo = CentroDeportivo::findOrFail($id);
        $municipios = Municipio::all();
        return view('admin.SuperAdmin.edit', compact('centroDeportivo', 'municipios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $request->validate([
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtener el centro deportivo a actualizar
        $centroDeportivo = CentroDeportivo::findOrFail($id);
        $centroDeportivo->nombre = $request->nombre;
        $centroDeportivo->direccion = $request->direccion;
        $centroDeportivo->telefono = $request->telefono;
        $centroDeportivo->numero_canchas = $request->numero_canchas;
        $centroDeportivo->descripcion = $request->descripcion;
        $centroDeportivo->municipio_id = $request->municipio_id;
        $centroDeportivo->parqueadero = $request->parqueadero;

        // Actualizar la imagen solo si se subió una nueva
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $centroDeportivo->imagen = $imageName;
        }
        $centroDeportivo->save();

        return redirect()->route('centroDeportivo.listar')->with('success', 'Centro deportivo actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $centroDeportivo = CentroDeportivo::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($centroDeportivo->imagen && file_exists(public_path('img/' . $centroDeportivo->imagen))) {
            unlink(public_path('img/' . $centroDeportivo->imagen));
        }

        // Eliminar el centro deportivo
        $centroDeportivo->delete();

        return redirect()->route('centroDeportivo.listar')->with('success', 'Centro deportivo eliminado con éxito.');
    }
}

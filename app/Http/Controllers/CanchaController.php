<?php

namespace App\Http\Controllers;

use App\Models\CentroDeportivo;
use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function listar(Request $request)
    {
        $centrosDeportivos = CentroDeportivo::all();
        $canchas = Cancha::all();
        return view('admin.SuperAdmin.canchas.listaCancha', compact('centrosDeportivos', 'canchas'));
    }




    public function create(Request $request)

    {

        $centrosDeportivos = CentroDeportivo::all();
        return view('admin.SuperAdmin.canchas.create', compact('centrosDeportivos'));
    }




    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
           
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);
    
        // Crear un nuevo objeto de Cancha y asignar los datos
        $cancha = new Cancha();
        $cancha->nombre = $request->nombre;
        $cancha->telefono = $request->telefono;
        $cancha->precio = $request->precio;
        $cancha->centro_deportivo_id = $request->centro_deportivo_id;
        $cancha->descripcion = $request->descripcion;
    
        // Manejar la imagen si se cargó una
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/img', $imageName);
            $cancha->imagen = basename($path); // Guardamos solo el nombre del archivo
        }
        
    
        // Guardar la cancha en la base de datos
        $cancha->save();
    
        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Cancha creada con éxito.');
    }
    



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $cancha = Cancha::findOrFail($id);
        $centrosDeportivos = CentroDeportivo::all();
        return view('admin.SuperAdmin.canchas.edit', compact('cancha', 'centrosDeportivos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'nullable|image',
            'descripcion' => 'nullable|string',
        ]);

        $cancha = Cancha::findOrFail($id);
        $cancha->nombre = $request->nombre;
        $cancha->telefono = $request->telefono;
        $cancha->precio = $request->precio;
        $cancha->centro_deportivo_id = $request->centro_deportivo_id;
        $cancha->descripcion = $request->descripcion;

        if ($request->hasFile('imagen')) {
            // Eliminar la imagen antigua si existe
            if ($cancha->imagen && file_exists(public_path('img/' . $cancha->imagen))) {
                unlink(public_path('img/' . $cancha->imagen));
            }

            // Guardar la nueva imagen
            
                $image = $request->file('imagen');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/img', $imageName);
                $cancha->imagen = basename($path); // Guardamos solo el nombre del archivo
            
            
        }

        $cancha->save();

        return redirect()->route('canchas.listar')->with('success', 'Cancha actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cancha = Cancha::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($cancha->imagen && file_exists(public_path('img/' . $cancha->imagen))) {
            unlink(public_path('img/' . $cancha->imagen));
        }

        // Eliminar la cancha
        $cancha->delete();

        return redirect()->route('canchas.listar')->with('success', 'Cancha eliminada con éxito.');
    }
}

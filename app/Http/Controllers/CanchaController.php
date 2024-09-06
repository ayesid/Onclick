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
    public function listaCancha($centro_deportivo_id)
    {
        $centroDeportivo = CentroDeportivo::find($centro_deportivo_id);
        $canchas = Cancha::where('centro_deportivo_id', $centro_deportivo_id)->get();

        return view('canchas.listaCancha', [
            'centroDeportivo' => $centroDeportivo,
            'canchas' => $canchas
        ]);
    }




  
    public function create($centro_deportivo_id)
    {
        $centroDeportivo = CentroDeportivo::findOrFail($centro_deportivo_id);
        return view('canchas.create', compact('centroDeportivo'));
    }
    



    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'descripcion' => 'nullable|string',
            'centro_deportivo_id' => 'required|exists:centro_deportivos,id',
        ]);
    
        $cancha = new Cancha();
        $cancha->nombre = $request->nombre;
        $cancha->telefono = $request->telefono;
        $cancha->precio = $request->precio;
    
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $cancha->imagen = $imageName;
        }
    
        $cancha->descripcion = $request->descripcion;
        $cancha->centro_deportivo_id = $request->centro_deportivo_id;
        
        $cancha->save();
    
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

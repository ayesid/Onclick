<?php

namespace App\Http\Controllers;

use App\Models\CentroDeportivo;
use App\Models\Cancha; 
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listarCanchas(Request $request) {
       
        $centroDeportivoId = $request->input('centro_deportivo_id'); 
        // Filtra las canchas por el centro deportivo especificado
        $canchas = Cancha::where('centro_deportivo_id', $centroDeportivoId)->get();
        // Carga el centro deportivo específico para pasarlo a la vista
        $centroDeportivo = CentroDeportivo::find($centroDeportivoId);
    
        return view('onclick.nosotros.listaCancha', compact('canchas', 'centroDeportivo'));
    }
    
    
    

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
    $request->validate([
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $cancha = new Cancha();
    $cancha->nombre = $request->nombre;
    $cancha->precio = $request->precio;
    $cancha->centro_deportivo_id = $request->centro_deportivo_id;
    $cancha->descripcion = $request->descripcion;

    if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $nombreArchivo = time() . '_' . $file->getClientOriginalName();
        
        $file->move(public_path('img'), $nombreArchivo);
        $cancha->imagen = $nombreArchivo; // Guarda el nombre de la imagen en la base de datos
    }

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

        $cancha = Cancha::findOrFail($id);
        $centrosDeportivos = CentroDeportivo::all();
        return view('admin.SuperAdmin.canchas.edit', compact('cancha', 'centrosDeportivos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'centro_deportivo_id' => 'required|exists:centro_deportivos,id',
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $cancha = Cancha::findOrFail($id);
        $cancha->centro_deportivo_id = $request->centro_deportivo_id;
        $cancha->nombre = $request->nombre;
        $cancha->precio = $request->precio;
        $cancha->descripcion = $request->descripcion;
    
        // Manejo de la imagen (si se sube una nueva imagen)
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombreArchivo = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $nombreArchivo);
            $cancha->imagen = $nombreArchivo;
        }
    
        $cancha->save();
    
        return redirect()->route('canchas.listar')->with('success', 'Cancha actualizada exitosamente');
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

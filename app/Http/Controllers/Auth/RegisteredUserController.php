<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Municipio;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $municipios = Municipio::all(); // Obtén todos los municipios
        return view('auth.register', compact('municipios'));  
       
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'senombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'seapellido' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'municipio_id' => ['required', 'integer', 'exists:municipios,id'],
            'tipo_persona_id' => ['integer', 'exists:tipos_persona,id'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        $user = User::create([
            'name' => $request->name,
            'senombre'=>$request->senombre,
            'apellido'=>$request->apellido,
            'seapellido'=>$request->seapellido,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'municipio_id'=>$request->municipio_id,
            'tipo_persona_id'=>1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
        
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('views.welcome', absolute: false));
    }
}


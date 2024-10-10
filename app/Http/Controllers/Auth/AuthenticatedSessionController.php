<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(route('home', absolute: false));
    // }
    public function store(LoginRequest $request): RedirectResponse
{
    // Autenticar al usuario
    $request->authenticate();

    // Regenerar la sesión para evitar fijación de sesión
    $request->session()->regenerate();

    // Verificar el tipo de persona del usuario autenticado
    $tipoPersonaId = $request->user()->tipo_persona_id;

    if ($tipoPersonaId === 3) {
        // Redirigir a la vista de superadmin si el id es 3
        return redirect()->route('centroDeportivo.create');
    } elseif ($tipoPersonaId === 1) {
        // Redirigir a la vista de usuario regular si el id es 1
        return redirect()->route('home');
    }

    // Redirigir a una vista predeterminada si no es ni 1 ni 3
    return redirect()->route('default');
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        // Por ahora, solo refrescamos la página para que no de error
        return back()->with('success', '¡Mensaje recibido! (Simulado)');
    }
}

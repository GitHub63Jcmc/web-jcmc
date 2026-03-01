<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable; // <--- Asegúrate de que apunte al del curso

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Validamos los datos que vienen del formulario
        $request->validate([
            'nombre'  => 'required|string',
            'email'   => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // 2. Enviamos el mail usando los datos del request
        Mail::to('jcmcgoojcmc@gmail.com')->send(new ContactoMailable(
            $request->nombre,
            $request->email,
            $request->mensaje
        ));

        // 3. Volvemos atrás con mensaje de éxito
        return back()->with('success', '¡Gracias! He recibido tu mensaje y te responderé pronto.');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/quiensoy', function () {
    return view('quiensoy');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/formacion', [FormacionController::class, 'mostrarFormacion']);
// Route::get('/formacion', function () {
//     return view('formacion');
// });
Route::get('/contacto', function () {
    return view('contacto');
});
// Route::get('/portafolio', function () {
//     return view('portafolio');
// });
Route::get('/portafolio', [PortafolioController::class, 'index']);

Route::post('/contacto/enviar', function (Request $request) {
    // Aquí puedes manejar el envío: validar, guardar o enviar email

    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email',
        'mensaje' => 'required|string',
    ]);

    // Envía el correo a tu dirección
    Mail::to('jcmcgoojcmc@gmail.com')->send(
        new ContactoMailable(
            $validated['nombre'],
            $validated['email'],
            $validated['mensaje']
        )
    );

    return back()->with('success', 'Mensaje enviado correctamente.');
})->name('contacto.enviar');
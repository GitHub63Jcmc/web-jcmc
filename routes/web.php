<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\PortafolioController;
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

    // Aquí podrías enviar un correo o guardar en la base de datos (más adelante)

    return back()->with('success', 'Mensaje enviado correctamente.');
})->name('contacto.enviar');
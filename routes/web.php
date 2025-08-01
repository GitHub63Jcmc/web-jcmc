<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\PortafolioController;


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


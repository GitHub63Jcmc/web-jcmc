<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ContactoController;


// 1. INICIO
Route::get('/', function () { return view('inicio'); })->name('inicio');
Route::get('/inicio', function () { return view('inicio'); });

// 2. RUTAS ESTÁTICAS (Directas a la vista)
Route::get('/quiensoy', function () { return view('quiensoy'); })->name('quiensoy');
Route::get('/blog', function () { return view('blog'); })->name('blog');
Route::get('/contacto', function () { return view('contacto'); })->name('contacto');

// 3. RUTAS DINÁMICAS (Pasan por el Controlador para traer datos de la BD)
// He borrado las líneas duplicadas que devolvían solo la 'view'
Route::get('/formacion', [FormacionController::class, 'mostrarFormacion'])->name('formacion');
Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio');

// 4. ENVÍO DE FORMULARIO
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// 5. RUTAS DE BREEZE / AUTENTICACIÓN
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/formacion/crear', [AdminController::class, 'crearFormacion'])->name('admin.formacion.crear');
    Route::post('/admin/formacion/guardar', [AdminController::class, 'guardarFormacion'])->name('admin.formacion.guardar');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

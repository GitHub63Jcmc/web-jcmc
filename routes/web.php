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
Route::get('/formacion', [FormacionController::class, 'mostrarFormacion'])->name('formacion');
Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio');

// 4. ENVÍO DE FORMULARIO
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// 5. RUTAS PROTEGIDAS (BREEZE & ADMIN)
Route::middleware(['auth', 'verified'])->group(function () {
    // Vista principal del Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Gestión de Formación
    Route::get('/admin/formacion/crear', [AdminController::class, 'crearFormacion'])->name('admin.formacion.crear');
    Route::post('/admin/formacion/guardar', [AdminController::class, 'guardarFormacion'])->name('admin.formacion.guardar');

    // Gestión de Portfolio
    Route::get('/admin/portfolio/crear', [AdminController::class, 'crearProyecto'])->name('admin.portfolio.crear');
    Route::post('/admin/portfolio/guardar', [AdminController::class, 'guardarProyecto'])->name('admin.portfolio.guardar');

    // Perfil de Usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

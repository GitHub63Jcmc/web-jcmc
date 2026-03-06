<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\BlogController;



// 1. INICIO
Route::get('/', function () { return view('inicio'); })->name('inicio');
Route::get('/inicio', function () { return view('inicio'); });

// 2. RUTAS ESTÁTICAS (Directas a la vista)
Route::get('/quiensoy', function () { return view('quiensoy'); })->name('quiensoy');
Route::get('/contacto', function () { return view('contacto'); })->name('contacto');

// 3. RUTAS DINÁMICAS (Pasan por el Controlador para traer datos de la BD)
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/formacion', [FormacionController::class, 'mostrarFormacion'])->name('formacion');
Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio');

// Ruta para guardar comentarios
Route::post('/blog/comentario', [BlogController::class, 'storeComentario'])->name('comentario.store');

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

    // Gestión de Portfolio (HEMOS UNIFICADO LOS NOMBRES)
    Route::get('/admin/portfolio/crear', [AdminController::class, 'crearProyecto'])->name('admin.portfolio.crear');
    Route::post('/admin/portfolio/guardar', [AdminController::class, 'guardarProyecto'])->name('admin.portfolio.guardar');

    // Gestión de Módulos
    Route::get('/admin/modulo/crear', [AdminController::class, 'crearModulo'])->name('admin.modulo.crear');
    Route::post('/admin/modulo/guardar', [AdminController::class, 'guardarModulo'])->name('admin.modulo.guardar');

    // Gestión de Blogs
    Route::get('/admin/blog/crear', [AdminController::class, 'crearPost'])->name('admin.post.crear');
    Route::post('/admin/blog/guardar', [AdminController::class, 'guardarPost'])->name('admin.post.guardar');

    // Gestión de edición de Blogs
    Route::get('/admin/blog/editar/{id}', [AdminController::class, 'editarPost'])->name('admin.post.editar');
    Route::put('/admin/blog/actualizar/{id}', [AdminController::class, 'actualizarPost'])->name('admin.post.actualizar');
    Route::delete('/admin/blog/eliminar/{id}', [AdminController::class, 'eliminarPost'])->name('admin.post.eliminar');
    Route::delete('/admin/comentario/eliminar/{id}', [BlogController::class, 'eliminarComentario'])->name('admin.comentario.eliminar');
    Route::get('/admin/comentario/editar/{id}', [BlogController::class, 'editarComentario'])->name('admin.comentario.editar');
    Route::put('/admin/comentario/actualizar/{id}', [BlogController::class, 'actualizarComentario'])->name('admin.comentario.actualizar');

    // Perfil de Usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

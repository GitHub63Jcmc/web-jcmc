<?php

namespace App\Http\Controllers;

use App\Models\Post;

class InicioController extends Controller
{
    public function index()
    {
        // Obtenemos los 3 últimos posts con sus comentarios
        $ultimosPosts = Post::with('comentarios')
                            ->orderBy('created_at', 'desc')
                            ->take(3)
                            ->get();

        return view('inicio', compact('ultimosPosts'));
    }

    public function quienSoy()
    {
        // Esta función servirá para la vista de Quién Soy
        return view('quiensoy'); 
    }
}
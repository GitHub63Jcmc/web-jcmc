<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;// Importamos Post, que es el que busca la tabla 'posts'
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Traemos los posts con sus comentarios, ordenados por los más recientes
        $posts = Post::with('comentarios')->orderBy('created_at', 'desc')->paginate(1);
        
        return view('blog', compact('posts'));
    }

    public function storeComentario(Request $request)
    {
        // 1. Validar los datos
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'autor' => 'required|max:100',
            'contenido' => 'required|min:5',
        ]);

        // 2. Guardar en la base de datos
        Comentario::create([
            'post_id' => $request->post_id,
            'autor' => $request->autor,
            'contenido' => $request->contenido,
        ]);

        // 3. Redirigir de vuelta con un mensaje de éxito
        return back()->with('success', '¡Gracias! Tu comentario ha sido publicado.');
    }
}


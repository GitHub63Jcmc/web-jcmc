<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;// Importamos Post, que es el que busca la tabla 'posts'
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) // Añadimos Request $request aquí
    {
        // 1. Capturamos lo que viene del formulario de búsqueda
        $query = $request->get('buscar');

        // 2. Filtramos si existe una búsqueda, si no, trae todos
        $posts = Post::with('comentarios')
            ->when($query, function ($q) use ($query) {
                return $q->where('titulo', 'LIKE', "%{$query}%")
                         ->orWhere('contenido', 'LIKE', "%{$query}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(1); // Mantengo paginación en 1

        // 3. Pasamos 'posts' y también 'query' a la vista
        return view('blog', compact('posts', 'query'));
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


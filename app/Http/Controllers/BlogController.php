<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;// Importamos Post, que es el que busca la tabla 'posts'
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) // Añadimos Request $request aquí
    {
        // 1. Capturamos la búsqueda
        $query = $request->get('buscar');

        // 2. Definimos cuántos posts mostrar: 
        // Si hay búsqueda, mostramos muchos (ej. 100). Si no, solo 1.
        $porPagina = $query ? 100 : 1;

        // 3. Ejecutamos la consulta con la variable dinámica
        $posts = Post::with('comentarios')
            ->when($query, function ($q) use ($query) {
                return $q->where('titulo', 'LIKE', "%{$query}%")
                         ->orWhere('contenido', 'LIKE', "%{$query}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate($porPagina); // <-- Usamos la variable aquí

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

    public function eliminarComentario($id)
    {
        // Buscamos el comentario por su ID
        $comentario = \App\Models\Comentario::findOrFail($id);

        // Lo eliminamos
        $comentario->delete();

        // Volvemos atrás con un mensaje de éxito
        return back()->with('success', 'Comentario eliminado correctamente.');
    }

    public function editarComentario($id)
    {
        $comentario = \App\Models\Comentario::findOrFail($id);
        return view('admin.comentario-edit', compact('comentario'));
    }

    public function actualizarComentario(Request $request, $id)
    {
        $comentario = \App\Models\Comentario::findOrFail($id);

        $request->validate([
            'autor' => 'required|max:100',
            'contenido' => 'required|min:5',
        ]);

        $comentario->update($request->all());

        // Volvemos al blog, al post específico donde estaba el comentario
        return redirect()->route('blog')->with('success', 'Comentario actualizado.');
    }
}


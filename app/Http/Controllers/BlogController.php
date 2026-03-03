<?php

namespace App\Http\Controllers;

use App\Models\Post;// Importamos Post, que es el que busca la tabla 'posts'
//use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Traemos los posts con sus comentarios, ordenados por los más recientes
        $posts = Post::with('comentarios')->orderBy('created_at', 'desc')->paginate(5);
        
        return view('blog', compact('posts'));
    }
}

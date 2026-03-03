<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // <-- Esto le dice: "Usa la tabla posts"
    
    protected $fillable = ['titulo', 'contenido', 'imagen', 'autor'];

    public function comentarios() {
        return $this->hasMany(Comentario::class, 'post_id'); // Especificamos el ID de la tabla
    }
}

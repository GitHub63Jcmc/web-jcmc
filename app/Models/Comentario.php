<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';
    protected $fillable = ['post_id', 'autor', 'contenido'];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');
    }
}

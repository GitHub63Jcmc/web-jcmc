<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;

    protected $table = 'portafolio';
    protected $fillable = ['titulo', 'imagen', 'url', 'descripcion'];

    // Relación: Un módulo pertenece a una formación
    public function formacion()
    {
        return $this->belongsTo(Formacion::class);
    }
}

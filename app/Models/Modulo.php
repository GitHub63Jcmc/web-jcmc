<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    // Le decimos a Laravel que use el nombre de tabla exacto que tienes en la BD
    protected $table = 'modulos';

    // Estos son los campos que permitimos llenar desde el formulario
    protected $fillable = [
        'formacion_id', 
        'codigo_modulo', 
        'nombre_modulo', 
        'horas'];

    public function formacion()
    {
        return $this->belongsTo(Formacion::class, 'formacion_id');
    }
}
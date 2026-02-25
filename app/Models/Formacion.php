<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    use HasFactory;

    protected $table = 'formaciones';  // Aquí debe coincidir con el nombre de la tabla en la base de datos

    // Aquí defines los campos que pueden ser asignados de forma masiva
    protected $fillable = [
        'centro_formacion',
        'titulo_curso',
        'fecha_inicio',
        'fecha_fin',
        'horas_formativas',
        'horas_pnl',
        'familia_profesional',
        'codigo_curso',
        'financiado_por'
    ];
}

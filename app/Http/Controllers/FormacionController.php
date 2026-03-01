<?php
namespace App\Http\Controllers;

use App\Models\Formacion;

class FormacionController extends Controller
{
    public function mostrarFormacion()
    {
        // Obtener los registros de la tabla 'formaciones', ordenados por 'created_at' en orden descendente
        // En lugar de usar el foreach manual:
        $formaciones = Formacion::with('modulos')->orderBy('created_at', 'asc')->paginate(1);
    
        // Retornar la vista y pasar los datos
        return view('formacion', compact('formaciones'));
    }

}



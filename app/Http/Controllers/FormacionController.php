<?php
namespace App\Http\Controllers;

use App\Models\Formacion;
use Illuminate\Support\Facades\DB;

class FormacionController extends Controller
{
    public function mostrarFormacion()
    {
        // Obtener los registros de la tabla 'formaciones', ordenados por 'created_at' en orden descendente
        $formaciones = Formacion::orderBy('created_at', 'asc')->paginate(1);
    
        // Obtener los módulos para cada formación
        foreach ($formaciones as $formacion) {
            // Obtener los módulos relacionados con cada formación
            $formacion->modulos = DB::table('modulos')->where('formacion_id', $formacion->id)->get();
        }
    
        // Retornar la vista y pasar los datos
        return view('formacion', compact('formaciones'));
    }

}



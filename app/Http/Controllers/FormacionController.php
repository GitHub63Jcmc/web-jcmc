<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formacion;
use Illuminate\Support\Facades\DB;

class FormacionController extends Controller
{
    public function mostrarFormacion()
{
    // Obtener los registros de la tabla 'formaciones', ordenados por 'created_at' en orden descendente
    $formaciones = Formacion::orderBy('created_at', 'asc')->get();

    // Obtener los módulos para cada formación
    foreach ($formaciones as $formacion) {
        // Obtener los módulos relacionados con cada formación
        $formacion->modulos = DB::table('modulos')->where('formacion_id', $formacion->id)->get();
    }

    // Retornar la vista y pasar los datos
    return view('formacion', compact('formaciones'));
}

}


// -----------------------------------------------------------



// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Formacion;
// use Illuminate\Support\Facades\DB;

// class FormacionController extends Controller
// {
//     public function mostrarFormacion()
//     {
            // Obtener todos los registros de la tabla 'formaciones'
        // $formaciones = Formacion::all(); 

        // Obtener los módulos para cada formación
        // foreach ($formaciones as $formacion) {
            // Obtener los módulos relacionados con cada formación
        //     $formacion->modulos = DB::table('modulos')->where('formacion_id', $formacion->id)->get();
        // }

        // Retornar la vista y pasar los datos
//         return view('formacion', compact('formaciones'));
//     }
// }
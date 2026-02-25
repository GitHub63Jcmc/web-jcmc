<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formacion; // Importamos tu modelo

class AdminController extends Controller
{
    public function crearFormacion()
    {
        return view('admin.crear-formacion');
    }

    public function guardarFormacion(Request $request)
    {
        // 1. Validar que los campos no estén vacíos
        $request->validate([
            'centro_formacion' => 'required|string|max:255',
            'titulo_curso' => 'required|string|max:255',
        ]);

        // 2. Guardar en la base de datos
        Formacion::create($request->all());

        return redirect()->route('formacion')->with('success', '¡Formación añadida con éxito!');
    }
}

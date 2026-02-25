<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formacion; // Importamos tu modelo
use App\Models\Portafolio; // <--- IMPORTANTE: Añadimos el modelo Portafolio

class AdminController extends Controller
{
    /* --- SECCIÓN DE FORMACIÓN --- */
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

    /* --- SECCIÓN DE PORTFOLIO (NUEVA) --- */

    public function crearProyecto()
    {
        return view('admin.crear-proyecto');
    }

    public function guardarProyecto(Request $request)
    {
        // 1. Validar
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $nombreImagen = null;

        // 2. Gestionar la subida de la imagen
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            // Creamos un nombre único basado en el tiempo para que no se repitan
            $nombreImagen = time() . '_' . $file->getClientOriginalName();
            // Movemos el archivo a public/img/
            $file->move(public_path('img'), $nombreImagen);
        }

        // 3. Guardar en la base de datos
        Portafolio::create([
            'titulo' => $request->titulo,
            'imagen' => $nombreImagen,
            'url' => $request->url,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('portfolio')->with('success', 'Proyecto añadido correctamente.');
    }
}

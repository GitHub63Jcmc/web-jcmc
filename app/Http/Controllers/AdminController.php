<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formacion; // Importamos tu modelo
use App\Models\Portafolio; // <--- IMPORTANTE: Añadimos el modelo Portafolio
use App\Models\Modulo;



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
        // 1. Validación
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'url' => 'nullable|url',
            'descripcion' => 'required|string',
        ]);

        $nombreImagen = null;

        // 2. Subida de imagen a public/img
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombreImagen = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $nombreImagen);
        }

        // 3. Crear registro en la tabla 'portafolio'
        Portafolio::create([
            'titulo' => $request->titulo,
            'imagen' => $nombreImagen,
            'url' => $request->url,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigimos al dashboard con el mensaje de éxito
        return redirect()->route('dashboard')->with('success', 'Proyecto añadido correctamente.');
    }

    public function crearModulo()
    {
        // Traemos todas las formaciones para el desplegable (select)
        $formaciones = Formacion::all();
        return view('admin.crear-modulo', compact('formaciones'));
    }

    public function guardarModulo(Request $request)
    {
        // 1. Validamos (esto detendrá el proceso si falta algo)
        $validated = $request->validate([
            'formacion_id'  => 'required|exists:formaciones,id',
            'nombre_modulo' => 'required|string|max:255',
            'codigo_modulo' => 'required|string|max:50', // Lo ponemos required para testear
            'horas'         => 'nullable|integer',
        ]);

        // 2. Insertamos manualmente los valores validados
        Modulo::create([
            'formacion_id'  => $validated['formacion_id'],
            'nombre_modulo' => $validated['nombre_modulo'],
            'codigo_modulo' => $validated['codigo_modulo'],
            'horas'         => $validated['horas'] ?? 0,
        ]);

        Modulo::create($request->only(['formacion_id', 'codigo_modulo', 'nombre_modulo', 'horas']));

        return redirect()->route('formacion')->with('success', 'Módulo añadido correctamente.');
    }

    public function storePortafolio(Request $request)
    {
        // 1. Validar los datos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'url' => 'nullable|url',
            'descripcion' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $nombreImagen = null;
    
        // 2. Gestionar la subida de la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            // Guardar físicamente en public/img
            $imagen->move(public_path('img'), $nombreImagen);
        }
    
        // 3. Crear el registro en la base de datos
        Portafolio::create([
            'titulo' => $request->titulo,
            'url' => $request->url,
            'descripcion' => $request->descripcion,
            'imagen' => $nombreImagen, // Guardamos el nombre del archivo
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Proyecto añadido al portfolio correctamente.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;

class PortafolioController extends Controller
{
    public function index() {
        // $proyectos = Portafolio::all();
        $proyectos = Portafolio::orderBy('created_at', 'asc')->paginate(3);
        // dd($proyectos);
        return view('portafolio', compact('proyectos'));
    }
}

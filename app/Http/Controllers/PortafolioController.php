<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Portafolio;

class PortafolioController extends Controller
{
    public function index() {
        $proyectos = Portafolio::all();
        // dd($proyectos);
        return view('portafolio', compact('proyectos'));
    }
}

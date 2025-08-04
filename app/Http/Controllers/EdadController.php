<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EdadController extends Controller
{
    public function calcular(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:50',
            'fecha_nacimiento' => 'required|date|before:today',
        ]);

        $fechaNacimiento = Carbon::parse($request->fecha_nacimiento);
        $edad = $fechaNacimiento->age;
        $nombre = $request->nombre;

        return view('index', compact('edad', 'nombre'));
    }
}

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
            'fecha_nacimiento' => 'required|date|before_or_equal:today',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 2 caracteres.',
            'nombre.max' => 'El nombre no puede tener más de 50 caracteres.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'fecha_nacimiento.before_or_equal' => 'No puedes seleccionar una fecha futura.',
        ]);

         $fechaNacimiento = Carbon::parse($request->fecha_nacimiento);
        $hoy = Carbon::now();
        $diferencia = $fechaNacimiento->diff($hoy);

        $edad_anios = $diferencia->y;
        $edad_meses = $diferencia->m;
        $edad_dias = $diferencia->d;
        $nombre = $request->nombre;

        return view('index', compact('edad_anios', 'edad_meses', 'edad_dias', 'nombre'));
//
    }
}

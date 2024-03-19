<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function create()
    {
        return view('actividad.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'nullable|date',
            'hora' => 'nullable|date_format:H:i',
        ]);

        // Crear una nueva instancia de Actividad con los datos del formulario
        $actividad = new Actividad();
        $actividad->nombre = $request->nombre;
        $actividad->descripcion = $request->descripcion;
        $actividad->fecha = $request->fecha;
        $actividad->hora = $request->hora;
        // Guardar la nueva actividad en la base de datos
        $actividad->save();

        return redirect()->route('actividad.create')->with('success', 'Actividad creada exitosamente');
    }
}

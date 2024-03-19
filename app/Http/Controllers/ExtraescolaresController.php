<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraescolaresController extends Controller
{
    public function createActividad()
    {
        return view('actividad.create');
    }

    public function storeActividad(Request $request)
    {
        // Lógica para guardar la actividad en la base de datos
    }

    public function indexRegistro()
    {
        // Lógica para obtener y mostrar los registros
    }
}

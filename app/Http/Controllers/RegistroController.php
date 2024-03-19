<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        // Aquí deberías escribir la lógica para obtener y mostrar los registros
        // Ejemplo: $registros = Registro::all();
        //          return view('registro.index', ['registros' => $registros]);

        return view('registro.index');
    }
}

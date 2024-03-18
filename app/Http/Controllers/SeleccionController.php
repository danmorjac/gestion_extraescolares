<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeleccionController extends Controller
{
    public function index()
    {
        return view('seleccion');
    }

    public function accion1(Request $request)
    {
        // Lógica para la acción del botón 1
        return redirect()->back()->with('success', 'Acción 1 realizada correctamente');
    }

    public function accion2(Request $request)
    {
        // Lógica para la acción del botón 2
        return redirect()->back()->with('success', 'Acción 2 realizada correctamente');
    }
}

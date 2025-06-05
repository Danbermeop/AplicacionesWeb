<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index() {
        return view ("notas.mostrar");
    }

    public function crear() {
        return view ('notas.crear');
    }

    public function editar() {
        return view ("notas.editar");
    }

    public function eliminar() {
        return view ("notas.eliminar");
    }
    
}



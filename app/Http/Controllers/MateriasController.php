<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller


{
public $materias = [
        [
            'id' => 1,
            'nombre' => 'Aplicaciones  Web II',
            'horas_semana' => 4,
            'docente' => 'Israel Zurita',
            'ciclo' => '20025-I',
            'carrera' => 'Aplicaciones Web',
            'status' => 'activo'
        ],
        [
            'id' => 2,
            'nombre' => 'Aplicaciones  Móviles II',
            'horas_semana' => 4,
            'docente' => 'Israel Zurita',
            'ciclo' => '20025-I',
            'carrera' => 'Aplicaciones Web',
            'status' => 'activo'
        ],
        [
            'id' => 3,
            'nombre' => 'Fundamentos de Programación',
            'horas_semana' => 7,
            'docente' => 'Israel Zurita',
            'ciclo' => '20025-I',
            'carrera' => 'Aplicaciones Web',
            'status' => 'activo'
        ],
    ];


    public function index() {
        return view ('Materias.index'); 
    }

    public function mostrar() {
        return view ('Materias.mostrar',[ 'materias'=> $this->materias ]);
    }

    public function editar() {
        return view('Materias.editar', ['materias' => $this->materias]);

    }

    public function eliminar() {
        return view ('Materias.eliminar');
    }
}


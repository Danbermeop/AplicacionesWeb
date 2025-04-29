<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', function () {
    return view('notas');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/editar_notas', function () {
    return view('editar_notas');
});

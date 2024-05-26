<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados', function () {
    return view('empleados');
})->name('empleados');

Route::get('/addEmpleado.blade.php', function () {
    return view('addEmpleado');
})->name('addEmpleado');

Route::get('/', function () {
    return view('welcome');
}) ->name('inicio');

Route::get('/VerEmpleado', function () {
    return view('readEmpleado');
}) ->name('Empleado');

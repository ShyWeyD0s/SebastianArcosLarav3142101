<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Asignamos aqui las rutas para los controladores, en este caso para el controlador de operaciones, 
| cada ruta corresponde a una operación matemática diferente (suma, resta, multiplicación y división). 
| Cada ruta recibe dos parámetros numéricos que se pasan al método correspondiente del controlador para realizar la operación y devolver el resultado.
|
*/
Route::get(
    '/suma/{num1}/{num2}', [OperacionesController::class, 'suma'
    ]); // Ruta para la suma
Route::get(
    '/resta/{num1}/{num2}', [OperacionesController::class, 'resta'
    ]); // Ruta para la resta
Route::get(
    '/multiplicacion/{num1}/{num2}', [OperacionesController::class, 'multiplicacion'
    ]); // Ruta para la mult
Route::get(
    '/division/{num1}/{num2}', [OperacionesController::class, 'division'
    ]); // Ruta para la div 
Route::get(
    '/formulario', [OperacionesController::class, 'formHtml'
    ]); // Ruta para mostrar el formulario HTML

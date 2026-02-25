<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\RestaController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\ResultMultController;

/*
|--------------------------------------------------------------------------
| Web rutas
|--------------------------------------------------------------------------
|
| Asignamos aqui las rutas para los controladores, en este caso para el controlador de operaciones, 
| cada ruta corresponde a una operación matemática diferente (suma, resta, multiplicación y división). 
| Cada ruta recibe dos parámetros numéricos que se pasan al método correspondiente del controlador para realizar la operación y devolver el resultado.
| recordar que esoy creado todas las funciones en el contorlador operacionesController.php, y aqui solo estoy asignando las rutas para cada una de esas funciones
|
*/
// Route::get('/suma/{num1}/{num2}', [OperacionesController::class, 'suma']); //Ruta para la suma
// Route::get('/resta/{num1}/{num2}', [OperacionesController::class, 'resta']); //Ruta para la resta
// Route::get('/multiplicacion/{num1}/{num2}', [OperacionesController::class, 'multiplicacion']); //Ruta para la mult
// Route::get('/division/{num1}/{num2}', [OperacionesController::class, 'division']); //Ruta para la division
Route::get('/suma', [SumaController::class, 'SumaHtml']); //Ruta para mostrar el formulario HTML
Route::post('/submit', [SumaController::class, 'suma']); //Ruta para manejar el envío del formulario
Route::get('/resta', [RestaController::class, 'RestaHtml']); //Ruta para mostrar el formulario HTML de resta
Route::post('/restaSubmit', [RestaController::class, 'resta']); //Ruta para manejar el envío del formulario de resta
Route::get('/multiplicacion', [ResultMultController::class, 'MultiplicacionHtml']); //Ruta para mostrar el formulario HTML de multiplicación
Route::post('/multsubmit', [ResultMultController::class, 'multiplicacion']); //Ruta para manejar el envío del formulario de multiplicación

// actualizar las columnas de la tabla result_mults para que se guarden los resultados de las multiplicaciones, y asi poder mostrar un historial de las multiplicaciones realizadas en la base de datos
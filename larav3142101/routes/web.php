<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/suma/{num1}/{num2}', [OperacionesController::class, 'suma']); // Ruta para la suma
Route::get('/resta/{num1}/{num2}', [OperacionesController::class, 'resta']); // Ruta para la resta
Route::get('/multiplicacion/{num1}/{num2}', [OperacionesController::class, 'multiplicacion']); // Ruta para la mult
Route::get('/division/{num1}/{num2}', [OperacionesController::class, 'division']); // Ruta para la div 

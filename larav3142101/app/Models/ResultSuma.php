<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultSuma extends Model
{
    use HasFactory;

    protected $table = 'result_suma'; // Especifica el nombre de la tabla en la base de datos
    protected $fillable = ['num1', 'num2', 'result']; // Especifica los campos que se pueden asignar masivamente
}

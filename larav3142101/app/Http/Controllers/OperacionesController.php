<?php

namespace App\Http\Controllers;

class OperacionesController extends Controller
{
    public function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return "La suma de $num1 y $num2 es: $resultado";
    }

    public function resta($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return "La resta de $num1 y $num2 es: $resultado";
    }

    public function multiplicacion($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return "La multiplicación de $num1 y $num2 es: $resultado";
    }
    
    public function division($num1, $num2)
    {
        if ($num2 == 0) {
            return "Error: No se puede dividir por cero.";
        }
        $resultado = $num1 / $num2;
        return "La división de $num1 entre $num2 es: $resultado";
    } 

    public function formHtml()
    {
        return view('formulario');
    }
}

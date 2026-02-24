<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ResultResta;

class RestaController extends Controller
{
    public function RestaHtml()
    {
        return view('resta');
    }

    // Procesa el formulario de resta y guarda el resultado en la base de datos
    public function resta(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 - $num2;

        $ResultResta = new ResultResta();
        $ResultResta->num1 = $num1;
        $ResultResta->num2 = $num2;
        $ResultResta->result = $result;
        $ResultResta->save();

        return "La resta de $num1 y $num2 es: $result";
    }
}

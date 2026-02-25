<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultMult;

class ResultMultController extends Controller
{
public function MultiplicacionHtml()
    {
        return view('mult');
    }

public function multiplicacion(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 * $num2;

        $ResultMult = new ResultMult();
        $ResultMult->num1 = $num1;
        $ResultMult->num2 = $num2;
        $ResultMult->result = $result;
        $ResultMult->save();

        return "La multiplicación de $num1 y $num2 es: $result";
    }

}
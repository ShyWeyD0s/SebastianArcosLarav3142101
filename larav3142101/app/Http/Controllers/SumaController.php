<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ResultSuma;


class SumaController extends Controller
{
   
    //funciones comentadas (para recordat la)

    // public function resta($num1, $num2)
    // {
    //     $resultado = $num1 - $num2;
    //     return "La resta de $num1 y $num2 es: $resultado";
    // }

    // public function multiplicacion($num1, $num2)
    // {
    //     $resultado = $num1 * $num2;
    //     return "La multiplicación de $num1 y $num2 es: $resultado";
    // }
    
    // public function division($num1, $num2)
    // {
    //     if ($num2 == 0) {
    //         return "Error: No se puede dividir por cero.";
    //     }
    //     $resultado = $num1 / $num2;
    //     return "La división de $num1 entre $num2 es: $resultado";
    // } 

    public function SumaHtml() 
    {
        return view('suma');
    }

    
  
    public function suma(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 + $num2;
    
        $ResultSuma = new ResultSuma();
        $ResultSuma->num1 = $num1;
        $ResultSuma->num2 = $num2;
        $ResultSuma->result = $result;
        $ResultSuma->save();

        
    

        return "La suma de $num1 y $num2 es: $result";
    }


//     public function resta(Request $request)
//     {
//         $num1 = $request->input('num1');
//         $num2 = $request->input('num2');
//         $result = $num1 - $num2;
    

//         // Guardar el resultado de la resta en la tabla result_restas usando el modelo ResultResta
//         $ResultResta = new ResultResta();
//         $ResultResta->num1 = $num1;
//         $ResultResta->num2 = $num2;
//         $ResultResta->result = $result;
//         $ResultResta->save();

        
    

//         return "La resta de $num1 y $num2 es: $result";
//     }


//     public function multiplicacion(Request $request)
//     {
//         $num1 = $request->input('num1');
//         $num2 = $request->input('num2');
//         $result = $num1 * $num2;
    
//         $ResultSuma = new ResultSuma();
//         $ResultSuma->num1 = $num1;
//         $ResultSuma->num2 = $num2;
//         $ResultSuma->result = $result;
//         $ResultSuma->save();

        
    

//         return "La multiplicación de $num1 y $num2 es: $result";
//     }

//     public function division(Request $request)
//     {
//         $num1 = $request->input('num1');
//         $num2 = $request->input('num2');
        
//         if ($num2 == 0) {
//             return "Error: No se puede dividir por cero.";
//         }

//         $result = $num1 / $num2;
    
//         $ResultSuma = new ResultSuma();
//         $ResultSuma->num1 = $num1;
//         $ResultSuma->num2 = $num2;
//         $ResultSuma->result = $result;
//         $ResultSuma->save();

        
    

//         return "La división de $num1 y $num2 es: $result";
//     }
}
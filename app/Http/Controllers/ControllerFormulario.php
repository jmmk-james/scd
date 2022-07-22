<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerFormulario extends Controller
{
    //
    public function formulario($id_curso)
    {
        $curso=App\Curso::findOrFail($id_curso);
        return view('publico.formulario.formulario_inicio',compact('curso'));
    }
    public function formularioEvaluacion(Request $request)
    {
        $curso=App\Curso::findOrFail($request->id_curso);
        $universidad=App\Universidad::all();
        $datos=["id_curso"=>$request->id_curso,"profecion"=>$request->profecion];
        return view('publico.formulario.formulario_evaluacion',compact('curso','universidad','datos'));
    }
}

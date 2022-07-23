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
        $profesion=App\Profecion::all();
        return view('publico.formulario.formulario_inicio',compact('curso','profesion'));
    }
    public function formularioEvaluacion(Request $request)
    {
        $datos=["id_curso"=>$request->id_curso,"profesion"=>$request->profesion,"id_universidad"=>0,"otrouniveridad"=>"ninguna"];
        return redirect(route('formularioEvaluacionGet',$datos));
    }
    public function formularioEvaluacionGet($id_curso,$profesion,$id_universidad,$otrouniveridad)
    {
        $curso=App\Curso::findOrFail($id_curso);
        if ($profesion=="Estudiante Universitario")
        {
            $universidad=App\Universidad::all();
            $datos=["id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>0,"otrouniveridad"=>"ninguna"];
            return view('publico.formulario.formulario_evaluacion',compact('curso','universidad','datos'));
        }
        else
        {
            $datos=["id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>0,"otrouniveridad"=>"ninguna"];
            return view('publico.formulario.formulario_buscar',compact('curso','datos'));
        }
    }
    public function formularioBuscar(Request $request)
    {
        $datos=["id_curso"=>$request->id_curso,"profesion"=>$request->profesion,"id_universidad"=>$request->universidad,"otrouniveridad"=>$request->otro];
        return redirect(route('formularioBuscarGet',$datos));
    }
    public function formularioBuscarGet($id_curso,$profesion,$id_universidad,$otrouniveridad)
    {
        $curso=App\Curso::findOrFail($id_curso);
        $datos=["id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>$id_universidad,"otrouniveridad"=>$otrouniveridad];
        return view('publico.formulario.formulario_buscar',compact('curso','datos'));
    }
    public function formularioFormulario(Request $request)
    {
        $curso=App\Curso::findOrFail($request->id_curso);
        $grado=App\Grado::all();
        $grado_n=count($grado);
        $carrera=App\Carrera::all();
        $datos=["id_curso"=>$request->id_curso,"profesion"=>$request->profesion,"id_universidad"=>$request->id_universidad,"otrouniveridad"=>$request->otrouniveridad,"ci"=>0,"ru"=>0];
        if($request->id_universidad==1)
        {
            if($request->ru==$request->ru2)
            {
                $datos['ru']=$request->ru;
                $estudiante=App\Estudiante::where('ru',$request->ru)->first();
                if(isset($estudiante))
                {
                    
                    $persona=App\Persona::findOrFail($estudiante->id_persona);
                    return view('publico.formulario.formulario_confirmacion',compact('curso','datos','persona'));
                }
                else
                {
                    return view('publico.formulario.formulario_datos',compact('curso','datos','grado','grado_n','carrera'));
                }
            }
            else
                return back()->with('mensaje_error','Error los Registros Universitarios no Coinciden, verifique e intente nuevamente');
        }
        else
        {
            if($request->ci==$request->ci2)
            {
                $datos['ci']=$request->ci;
                $persona=App\Persona::where('ci',$request->ci)->first();
                if(isset($persona))
                {
                    return view('publico.formulario.formulario_confirmacion',compact('curso','datos','persona'));
                }
                else
                {
                    return view('publico.formulario.formulario_datos',compact('curso','datos','grado','grado_n','carrera'));
                }
            }
            else
                return back()->with('mensaje_error','Error las Cedulas de Identidad no Coinciden, verifique e intente nuevamente');
        }
    }
    public function formularioDatos($id_curso,$profesion,$id_universidad,$otrouniveridad)
    {
        
    }
}

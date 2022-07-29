<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $datos=["id_curso"=>$request->id_curso,"profesion"=>$request->profesion,"id_universidad"=>$request->id_universidad,"otrouniveridad"=>$request->otrouniveridad,"ci"=>0,"ru"=>0];
        if($request->id_universidad==1)
        {
            if($request->ru==$request->ru2)
            {
                $datos["ru"]=$request->ru;
                return redirect(route('formularioFormularioGet',$datos));
            }
            else
                return back()->with('mensaje_error','Error los Registros Universitarios no Coinciden, verifique e intente nuevamente');
        }
        else
        {
            $ci=strtolower($request->ci);
            $ci2=strtolower($request->ci2);
            $ci=str_replace(' ','',$ci);
            $ci2=str_replace(' ','',$ci2);
            if($ci==$ci2)
            {
                $datos["ci"]=$ci;
                return redirect(route('formularioFormularioGet',$datos));
            }
            else
                return back()->with('mensaje_error','Error las Cedulas de Identidad no Coinciden, verifique e intente nuevamente');
        }
    }


    public function formularioFormularioGet($id_curso,$profesion,$id_universidad,$otrouniveridad,$ci,$ru)
    {
        $curso=App\Curso::findOrFail($id_curso);
        $grado=App\Grado::all();
        $carrera=App\Carrera::all();
        $datos=["id_persona"=>0,"id_estudiante"=>0,"id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>$id_universidad,"otrouniveridad"=>$otrouniveridad,"ci"=>$ci,"ru"=>$ru];
        if($id_universidad==1)
        {
            $estudiante=App\Estudiante::where('ru',$ru)->first();
            if(isset($estudiante))
            {
                $persona=App\Persona::findOrFail($estudiante->id_persona);
                $datos=["id_persona"=>$persona->id,"id_estudiante"=>0,"id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>$id_universidad,"otrouniveridad"=>$otrouniveridad,"ci"=>$ci,"ru"=>$ru,"nombre"=>$persona->nombre,"paterno"=>$persona->paterno,"materno"=>$persona->materno,"correo"=>$persona->correo,"celular"=>$persona->celular,"id_grado"=>$estudiante->id_grado,"id_carrera"=>$estudiante->id_carrera,"otra_carrera"=>$estudiante->otro_carrera];
                return view('publico.formulario.formulario_confirmacion',compact('curso','datos'));
            }
            else
            {
                return view('publico.formulario.formulario_datos',compact('curso','datos','grado','carrera'));
            }
        }
        else
        {
            $persona=App\Persona::where('ci',$ci)->first();
            if(isset($persona))
            {
                $estudiante=App\Estudiante::where('id_persona',$persona->id)->first();
                $datos=["id_persona"=>$estudiante->id_persona,"id_estudiante"=>$estudiante->id,"id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>$id_universidad,"otrouniveridad"=>$otrouniveridad,"ci"=>$ci,"ru"=>$ru,"nombre"=>$persona->nombre,"paterno"=>$persona->paterno,"materno"=>$persona->materno,"correo"=>$persona->correo,"celular"=>$persona->celular,"id_grado"=>$estudiante->id_grado,"id_carrera"=>$estudiante->id_carrera,"otra_carrera"=>$estudiante->otro_carrera];
                return view('publico.formulario.formulario_confirmacion',compact('curso','datos'));
            }
            else
            {
                return view('publico.formulario.formulario_datos',compact('curso','datos','grado','carrera'));
            }
        }
    }

    public function formularioConfirmar(Request $request)
    {

        $persona=App\Persona::where('ci',$request->ci)->first();
        if(isset($persona))
            return back()->with('mensaje_error_ci','Error la Cedula de Identidad Proporcionada ya fue registrada');
        else
        {
            $persona=App\Persona::where('correo',$request->correo)->first();
            if(isset($persona))
                return back()->with('mensaje_error_correo','Error el Correo electronico ya fue registrado');
            else
            {

                $datos=["id_persona"=>$request->id_persona,"id_estudiante"=>$request->id_estudiante,"id_curso"=>$request->id_curso,"profesion"=>$request->profesion,"id_universidad"=>$request->id_universidad,"otrouniveridad"=>ucwords($request->otrouniveridad),"ci"=>$request->ci,"ru"=>$request->ru,"nombre"=>ucwords($request->nombre),"paterno"=>ucwords($request->paterno),"materno"=>ucwords($request->materno),"correo"=>$request->correo,"celular"=>$request->celular,"id_grado"=>$request->id_grado,"id_carrera"=>$request->id_carrera,"otra_carrera"=>ucwords($request->otra_carrera)];
                return redirect(route('formularioConfirmarGet',$datos));   
            }
        }
    }
    public function formularioConfirmarGet($id_persona,$id_estudiante,$id_curso,$profesion,$id_universidad,$otrouniveridad,$ci,$ru,$nombre,$paterno,$materno,$correo,$celular,$id_grado,$id_carrera,$otra_carrera)
    {
        $datos=["id_persona"=>$id_persona,"id_estudiante"=>$id_estudiante,"id_curso"=>$id_curso,"profesion"=>$profesion,"id_universidad"=>$id_universidad,"otrouniveridad"=>$otrouniveridad,"ci"=>$ci,"ru"=>$ru,"nombre"=>$nombre,"paterno"=>$paterno,"materno"=>$materno,"correo"=>$correo,"celular"=>$celular,"id_grado"=>$id_grado,"id_carrera"=>$id_carrera,"otra_carrera"=>$otra_carrera];
        $curso=App\Curso::findOrFail($id_curso);
        return view('publico.formulario.formulario_confirmacion',compact('curso','datos'));
    }

    public function agregarEstudiante(Request $request)
    {
        $datos=["id_curso"=>$request->id_curso,"id_persona"=>$request->id_persona,"id_estudiante"=>$request->id_estudiante,"inscrito"=>"no","id_inscrito"=>0];
        $curso=App\Curso::findOrFail($request->id_curso);
        $valor=$curso->cupo-$curso->total;
        if($request->id_persona==0)
        {
            $persona=new App\Persona;
            $persona->nombre=$request->nombre;
            $persona->paterno=$request->paterno;
            $persona->materno=$request->materno;
            $persona->ci=$request->ci;
            $persona->correo=$request->correo;
            $persona->celular=$request->celular;

            $persona->save();

            $persona=App\Persona::where('ci',$request->ci)->where('correo',$request->correo)->where('nombre',$request->nombre)->where('celular',$request->celular)->first();

            $estudiante=new App\Estudiante;
            $estudiante->id_persona=$persona->id;
            $estudiante->ru=$request->ru;
            $estudiante->profesion=$request->profesion;
            $estudiante->id_grado=$request->id_grado;
            $estudiante->id_carrera=$request->id_carrera;
            $estudiante->id_universidad=$request->id_universidad;
            $estudiante->otro_carrera=$request->otra_carrera;
            $estudiante->otro_universidad=$request->otrouniveridad;
            $estudiante->save();

            $estudiante=App\Estudiante::where('id_persona',$persona->id)->first();
            $id_estudiante=$estudiante->id;

            $datos["id_persona"]=$persona->id;
            $datos["id_estudiante"]=$id_estudiante;
        }
        else
        {
            $estudiante=App\Estudiante::where('id_persona',$request->id_persona)->first();
            $id_estudiante=$estudiante->id;
        }
        
        if($valor>0)
        {

            $inscrito=new App\Inscrito;
            $inscrito->id_estudiante=$id_estudiante;
            $inscrito->id_curso=$request->id_curso;
            $inscrito->aprobado=0;
            $inscrito->nota=0;
            $inscrito->estado=0;
            $inscrito->save();
            $datos["inscrito"]="si";

            $curso->total=$curso->total+1;
            $curso->save();

            $inscrito=App\Inscrito::where('id_curso',$request->id_curso)->where('id_estudiante',$id_estudiante)->first();
            $datos["id_inscrito"]=$inscrito->id;
        }
        return redirect(route('formularioResult',$datos));
    }

    public function formularioResult($id_curso,$id_persona,$id_estudiante,$inscrito,$id_inscrito)
    {
        $pdf=["id_curso"=>$id_curso,"id_persona"=>$id_persona,"id_estudiante"=>$id_estudiante,"id_inscrito"=>$id_inscrito];
        $curso=DB::table('view_datos_inscripcion')->where('id_curso',$id_curso)->where('id_estudiante',$id_estudiante)->where('id_persona',$id_persona)->where('id_inscrito',$id_inscrito)->first();
        return view('publico.formulario.formulario_result',compact('curso','inscrito','pdf'));
    }

}

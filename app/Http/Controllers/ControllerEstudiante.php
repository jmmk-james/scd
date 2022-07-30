<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;
use Facade\FlareClient\Api;

class ControllerEstudiante extends Controller
{
    //
    public function listaEstudiante($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Estudiantes";
            if($id_search>0)
            {
                $l=DB::table('view_datos_estudiante')->where('nombre','like','%'.$search.'%')->get();
                $lp=DB::table('view_datos_estudiante')->where('paterno','like','%'.$search.'%')->get();
                $lm=DB::table('view_datos_estudiante')->where('materno','like','%'.$search.'%')->get();
                $lista_estudiante=$l->concat($lp->concat($lm));

            }
            else
                $lista_estudiante=DB::table('view_datos_estudiante')->get();
            
            $id_search="1";
            $tipo="Buscar Nombre del Estudiante";
            $funcion="searchEstudiante";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.estudiante.lista_estudiante',compact('usuario','lista_estudiante','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchEstudiante(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaEstudiante',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioEstudiante()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Estudiante";

            $profesion=App\Profecion::all();
            $carrera=App\Carrera::all();
            $universidad=App\Universidad::all();
            $grado=App\Grado::all();

            $id_search="1";
            $tipo="Buscar Nombre del Estudiante";
            $funcion="searchEstudiante";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.estudiante.formulario_estudiante',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri','profesion','carrera','universidad','grado'));
        }
    	else
        	return redirect('/');
    }
    public function agregarEstudiante(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $ci=strtolower($request->ci);
            $ci=str_replace(' ','',$ci);
            $persona=DB::table('personas')->where('ci',$ci)->first();
            if(isset($persona))
                return back()->with('mensaje_ci','Error la Cedula de Identidad ya se encuentra registrada, verifique e intente nuevamente');
            else
            {
                $correo=DB::table('personas')->where('correo',$request->correo)->first();
                if(isset($correo))
                    return back()->with('mensaje_correo','Error el Correo ya se encuentra registrado, verifique e intente nuevamente');
                else
                {
                    if($request->ru == 0 )
                    {
                        $persona=new App\Persona;
                        $persona->nombre=ucwords($request->nombre);
                        $persona->paterno=ucwords($request->paterno);
                        $persona->materno=ucwords($request->materno);
                        $persona->ci=$ci;
                        $persona->correo=$request->correo;
                        $persona->celular=$request->celular;
                        $persona->save();

                        $persona=DB::table('personas')->where('ci',$ci)->where('correo',$request->correo)->first();

                        $estudiante= new App\Estudiante();
                        $estudiante->id_persona=$persona->id;
                        $estudiante->ru=$request->ru;
                        $estudiante->profesion=$request->profesion;
                        $estudiante->id_grado=$request->id_grado;
                        $estudiante->id_carrera=$request->id_carrera;
                        $estudiante->id_universidad=$request->id_universidad;
                        $estudiante->otro_carrera=0;
                        $estudiante->otro_universidad=0;
                        $estudiante->save();
                        $uri=array('id_search'=>0,'search'=>0);
                        return redirect(route('listaEstudiante',$uri));
                    }
                    else
                    {
                        $ru=DB::table('estudiantes')->where('ru',$request->ru);
                        if(isset($ru))
                            return back()->with('mensaje_ru','Error el R.U. ya se encuentra registrado, verifique e intente nuevamente');
                        else
                        {
                            $persona=new App\Persona;
                            $persona->nombre=ucwords($request->nombre);
                            $persona->paterno=ucwords($request->paterno);
                            $persona->materno=ucwords($request->materno);
                            $persona->ci=$ci;
                            $persona->correo=$request->correo;
                            $persona->celular=$request->celular;
                            $persona->save();

                            $persona=DB::table('personas')->where('ci',$ci)->where('correo',$request->correo)->first();

                            $estudiante= new App\Estudiante();
                            $estudiante->id_persona=$persona->id;
                            $estudiante->ru=$request->ru;
                            $estudiante->profesion=$request->profesion;
                            $estudiante->id_grado=$request->id_grado;
                            $estudiante->id_carrera=$request->id_carrera;
                            $estudiante->id_universidad=$request->id_universidad;
                            $estudiante->otro_carrera=0;
                            $estudiante->otro_universidad=0;
                            $estudiante->save();
                            $uri=array('id_search'=>0,'search'=>0);
                            return redirect(route('listaEstudiante',$uri));
                        }
                    }
                    
                }
            }
        }
    	else
        	return redirect('/');
    }
    public function updateEstudiante(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $estudiante=App\Estudiante::findOrFail($request->id_estudiante);
            $estudiante->nombre=ucwords($request->nombre);
            $estudiante->corto=ucwords($request->corto);
            $estudiante->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaEstudiante',$uri));
        }
    	else
        	return redirect('/');
    }
    public function editarEstudiante($id_estudiante,$id_persona)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $estudiante=App\Estudiante::findOrFail($id_estudiante);
            $titulo2="Editar Estudiante : ".$estudiante->nombre;

            $id_search="1";
            $tipo="Buscar Nombre del  Estudiante";
            $funcion="searchEstudiante";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.estudiante.editar_estudiante',compact('usuario','estudiante','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

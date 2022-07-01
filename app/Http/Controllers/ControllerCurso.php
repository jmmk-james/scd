<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class ControllerCurso extends Controller
{
    //
    public function listaCurso($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Coordinadores";
            if($id_search>0)
            {
                
                $l=DB::table('view_datos_coordinador')->where('nombre','like','%'.$search.'%')->get();
                $lp=DB::table('view_datos_coordinador')->where('paterno','like','%'.$search.'%')->get();
                $lm=DB::table('view_datos_coordinador')->where('materno','like','%'.$search.'%')->get();
                $lista_coordinador=$l->concat($lp->concat($lm));
            }
            else
                $lista_coordinador=DB::table('view_datos_coordinador')->get();
                            
            $id_search="1";
            $tipo="Buscar Curso";
            $funcion="searchCurso";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.curso.lista_curso',compact('usuario','lista_curso','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaCurso',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioCurso()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Registrar Nuevo Curso";

            $tipoCurso=App\TipoCurso::where('estado','1')->get();

            $id_search="1";
            $tipo="Buscar Curso";
            $funcion="searchCurso";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.curso.formulario_curso',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri','tipoCurso'));
        }
    	else
        	return redirect('/');
    }
    public function agregarCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $promo=$request->file('promo')->store('public/promo');
            $promo=str_replace('public/promo/','', $promo);

            $plantilla=$request->file('plantilla')->store('public/plantilla');
            $plantilla=str_replace('public/plantilla/','', $plantilla);

            $curso= new App\Curso;
            $curso->titulo=ucwords($request->titulo);
            $curso->detalle=ucwords($request->detalle);
            $curso->carga=$request->carga;
            $curso->fecha=$request->fecha;
            $curso->gestion=date("Y");
            $curso->relevancia=$request->relevancia;
            $curso->promo=$promo;
            $curso->plantilla=$plantilla;
            $curso->id_tipocurso=$request->id_tipocurso;
            $curso->save();

            $curso=App\Curso::all();
            $id_curso=$curso->last();

            return redirect(route('perfilCurso',$id_curso));

        }
    	else
        	return redirect('/');
    }
    public function updateCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $curso= App\Curso::findOrFail($request->id_curso);
            $curso->titulo=$request->titulo;
            $curso->detalle=$request->detalle;
            $curso->tipo=$request->tipo;
            $curso->carga=$request->carga;
            $curso->fecha=$request->fecha;
            $curso->save();

            $uri=array('id_search'=>0,'search'=>0);
            return back()->with('mensaje','Los datos del Curso fueron actualizados correctamente.');
        }
    	else
        	return redirect('/');
    }
    public function updateCoordinador(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            return back()->with('mensaje','Los datos del coordinador fueron actualizados correctamente.');
        }
    	else
        	return redirect('/');
    }
    
    public function perfilCurso($id_curso)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";

            $curso=DB::table('view_datos_curso')->where('id_curso',$id_curso)->first();
            $titulo2="Datos del Curso : ".$curso->titulo;

            $id_search="1";
            $tipo="Buscar Curso";
            $funcion="searchCurso";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.curso.perfil_curso',compact('usuario','curso','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

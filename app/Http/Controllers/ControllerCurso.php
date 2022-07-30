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
            $titulo2="Lista de Cursos";
            if($id_search>0)
            {
                $lista_curso=App\Curso::where('titulo','like','%'.$search.'%')->get();
            }
            else
                $lista_curso=App\Curso::orderBy('id','desc')->get();
                            
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
            $curso->orientacion=$request->orientacion;
            $curso->estado="ACTIVO";
            $curso->cupo=$request->cupo;
            $curso->total=0;
            $curso->id_tipocurso=$request->id_tipocurso;
            $curso->save();

            $curso=App\Curso::all();
            $id_curso=$curso->last();

            return redirect(route('perfilCurso',$id_curso));

        }
    	else
        	return redirect('/');
    }
    public function agregarCoordinadorCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $coordinador=App\Coordinador::findOrFail($request->id_coordinador);
            $validez= new App\Validez;
            $validez->id_coordinador=$request->id_coordinador;
            $validez->id_tipo=$coordinador->id_tipo;
            $validez->id_curso=$request->id_curso;
            $validez->save();
            return redirect(route('perfilCurso',$request->id_curso));
        }
    	else
        	return redirect('/');
    }
    public function eliminarCoordinadorCurso($id_coordinador,$id_curso)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $validez=App\Validez::where('id_curso',$id_curso)->where('id_coordinador',$id_coordinador)->first();

            $validez=App\Validez::findOrFail($validez->id);
            $validez->delete();
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
            $curso->titulo=ucwords($request->titulo);
            $curso->detalle=ucwords($request->detalle);
            $curso->carga=$request->carga;
            $curso->fecha=$request->fecha;
            $curso->relevancia=$request->relevancia;
            $curso->estado=$request->estado;
            $curso->cupo=$request->cupo;
            $curso->save();

            return back()->with('mensaje','Los datos del Curso fueron actualizados correctamente.');
        }
    	else
        	return redirect('/');
    }
    public function updatePromo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $promo=$request->file('promo')->store('public/promo');
            $promo=str_replace('public/promo/','', $promo);

            $curso= App\Curso::findOrFail($request->id_curso);
            $curso->promo=$promo;
            $curso->save();
            return back()->with('mensaje','La imagen promocional fue actualizada correctamente.');
        }
    	else
        	return redirect('/');
    }
    public function updatePlantilla(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $plantilla=$request->file('plantilla')->store('public/plantilla');
            $plantilla=str_replace('public/plantilla/','', $plantilla);

            $curso= App\Curso::findOrFail($request->id_curso);
            $curso->plantilla=$plantilla;
            $curso->orientacion=$request->orientacion;
            $curso->save();
            return back()->with('mensaje','La Plantilla fue actualizada correctamente.');
        }
    	else
        	return redirect('/');
    }
    public function updateTipoCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $curso= App\Curso::findOrFail($request->id_curso);
            $curso->id_tipocurso=$request->id_tipocurso;
            $curso->save();
            return back()->with('mensaje','El tipo de curso fue actualizado correctamente.');
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
            $tipoCurso=App\TipoCurso::all();

            $lista_validez=DB::table('view_datos_coordinador_validez')->where('id_curso',$id_curso)->get();
            $l=array();
            foreach($lista_validez as $value)
                array_push($l,$value->id_coordinador);
            
            $lista_coordinador=DB::table('view_datos_coordinador')->whereNotIn('id_coordinador',$l)->get();
            
            $titulo2="Datos del Curso : ".$curso->titulo;

            $id_search="1";
            $tipo="Buscar Curso";
            $funcion="searchCurso";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.curso.perfil_curso',compact('usuario','curso','titulo','titulo2','id_search','tipo','funcion','uri','tipoCurso','lista_coordinador','lista_validez'));

        }
        else
            return redirect('/');
    }
}

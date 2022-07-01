<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerTipoCurso extends Controller
{
    //
    public function listaTipoCurso($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista Tipos de Cursos Registrados";
            if($id_search>0)
                $lista_tipo_curso=App\TipoCurso::where('tipo','like','%'.$search.'%')->get();
            else
                $lista_tipo_curso=App\TipoCurso::all();
            
            $id_search="1";
            $tipo="Buscar Tipos de Cursos";
            $funcion="searchTipoCurso";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.tipocurso.lista_tipo_curso',compact('usuario','lista_tipo_curso','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchTipoCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaTipoCurso',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioTipoCurso()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Tipo de Curso";
            $id_search="1";
            $tipo="Buscar Tipos de Cursos";
            $funcion="searchTipoCurso";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.tipocurso.formulario_tipo_curso',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarTipoCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $tipoCurso=new App\TipoCurso;
            $tipoCurso->tipo=ucwords($request->tipo);
            $tipoCurso->code=strtoupper($request->code);
            $tipoCurso->estado=1;
            $tipoCurso->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaTipoCurso',$uri));
        }
    	else
        	return redirect('/');
    }
    public function updateTipoCurso(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $tipoCurso=App\TipoCurso::findOrFail($request->id_tipo_curso);
            $tipoCurso->tipo=ucwords($request->tipo);
            $tipoCurso->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaTipoCurso',$uri));
        }
    	else
        	return redirect('/');
    }
    public function eliminarTipoCurso($id_tipo_curso)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $tipoCurso=App\TipoCurso::findOrFail($id_tipo_curso);
            if ($tipoCurso->estado==1)
                $tipoCurso->estado=0;
            else
                $tipoCurso->estado=1;
            $tipoCurso->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaTipoCurso',$uri));
        }
        else
            return redirect('/');
    }
    public function editarTipoCurso($id_tipo_curso)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $tipoCurso=App\TipoCurso::findOrFail($id_tipo_curso);
            $titulo2="Editar Tipo de Curso : ".$tipoCurso->tipo. ' '.$tipoCurso->code;

            $id_search="1";
            $tipo="Buscar Tipo de Curso";
            $funcion="searchTipoCurso";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.tipocurso.editar_tipo_curso',compact('usuario','tipo','titulo','titulo2','id_search','tipoCurso','funcion','uri'));
        }
        else
            return redirect('/');
    }
}

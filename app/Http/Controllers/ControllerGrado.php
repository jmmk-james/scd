<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerGrado extends Controller
{
    //
    public function listaGrado($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Grados";
            if($id_search>0)
                $lista_grado=App\Grado::where('nombre','like','%'.$search.'%')->get();
            else
                $lista_grado=App\Grado::all();
            
            $id_search="1";
            $tipo="Buscar Nombre del Grado";
            $funcion="searchGrado";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.grado.lista_grado',compact('usuario','lista_grado','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchGrado(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaGrado',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioGrado()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Grado Academico";

            $id_search="1";
            $tipo="Buscar Nombre del Grado";
            $funcion="searchGrado";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.grado.formulario_grado',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarGrado(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $grado=new App\Grado;
            $grado->nombre=ucwords($request->nombre);
            $grado->corto=ucwords($request->corto);
            $grado->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaGrado',$uri));
        }
    	else
        	return redirect('/');
    }
    public function updateGrado(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $grado=App\Grado::findOrFail($request->id_grado);
            $grado->nombre=ucwords($request->nombre);
            $grado->corto=ucwords($request->corto);
            $grado->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaGrado',$uri));
        }
    	else
        	return redirect('/');
    }
    public function editarGrado($id_grado)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $grado=App\Grado::findOrFail($id_grado);
            $titulo2="Editar Grado Academico : ".$grado->nombre;

            $id_search="1";
            $tipo="Buscar Nombre del  Grado";
            $funcion="searchGrado";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.grado.editar_grado',compact('usuario','grado','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

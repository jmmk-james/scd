<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ControllerProfesion extends Controller
{
    //
    public function listaProfesion($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Profesiones";
            if($id_search>0)
                $lista_profesion=App\Profecion::where('profecion','like','%'.$search.'%')->get();
            else
                $lista_profesion=App\Profecion::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Profesion";
            $funcion="searchProfesion";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.profesion.lista_profesion',compact('usuario','lista_profesion','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchProfesion(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaProfesion',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioProfesion()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Profesion";

            $id_search="1";
            $tipo="Buscar Nombre de la Profesion";
            $funcion="searchProfesion";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.profesion.formulario_profesion',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarProfesion(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $profesion=new App\Profecion;
            $profesion->profecion=ucwords($request->profesion);
            $profesion->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaProfesion',$uri));
        }
    	else
        	return redirect('/');
    }
    public function updateProfesion(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $profesion=App\Profecion::findOrFail($request->id_profesion);
            $profesion->profecion=ucwords($request->profesion);
            $profesion->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaProfesion',$uri));
        }
    	else
        	return redirect('/');
    }
    public function eliminarProfesion($id_profesion)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $profesion=App\Profecion::findOrFail($id_profesion);
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaProfesion',$uri));

        }
        else
            return redirect('/');
    }
    public function editarProfesion($id_profesion)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $profesion=App\Profecion::findOrFail($id_profesion);
            $titulo2="Editar Profesion : ".$profesion->nombre;

            $id_search="1";
            $tipo="Buscar Nombre de la Profesion";
            $funcion="searchProfesion";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.profesion.editar_profesion',compact('usuario','profesion','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

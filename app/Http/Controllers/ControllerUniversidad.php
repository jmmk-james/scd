<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerUniversidad extends Controller
{
    //
    public function listaUniversidad($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Universidades";
            if($id_search>0)
                $lista_universidad=App\Universidad::where('nombre','like','%'.$search.'%')->get();
            else
                $lista_universidad=App\Universidad::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Universidad";
            $funcion="searchUniversidad";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.universidad.lista_universidad',compact('usuario','lista_universidad','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchUniversidad(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaUniversidad',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioUniversidad()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Universidad";

            $id_search="1";
            $tipo="Buscar Nombre de la Universidad";
            $funcion="searchUniversidad";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.universidad.formulario_universidad',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarUniversidad(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $universidad=new App\Universidad;
            $universidad->universidad=ucwords($request->universidad);
            $universidad->estado=1;
            $universidad->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaUniversidad',$uri));
        }
    	else
        	return redirect('/');
    }
    public function updateUniversidad(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $universidad=App\Universidad::findOrFail($request->id_universidad);
            $universidad->Universidad=ucwords($request->universidad);
            $universidad->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaUniversidad',$uri));
        }
    	else
        	return redirect('/');
    }
    public function eliminarUniversidad($id_universidad)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $universidad=App\Universidad::findOrFail($id_universidad);
            if ($universidad->estado==1)
                $universidad->estado=0;
            else
                $universidad->estado=1;
            $universidad->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaUniversidad',$uri));

        }
        else
            return redirect('/');
    }
    public function editarUniversidad($id_universidad)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $universidad=App\Universidad::findOrFail($id_universidad);
            $titulo2="Editar Universidad : ".$universidad->nombre;

            $id_search="1";
            $tipo="Buscar Nombre de la Universidad";
            $funcion="searchUniversidad";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.universidad.editar_universidad',compact('usuario','universidad','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

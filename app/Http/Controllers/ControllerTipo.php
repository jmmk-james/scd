<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerTipo extends Controller
{
    //
    public function listaTipo($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista Tipos de Coordinacion";
            if($id_search>0)
                $lista_tipo=App\Tipo::where('tipo','like','%'.$search.'%')->get();
            else
                $lista_tipo=App\Tipo::all();
            
            $id_search="1";
            $tipo="Buscar Tipos de Coordinacion";
            $funcion="searchTipo";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.tipo.lista_tipo',compact('usuario','lista_tipo','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchTipo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaTipo',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioTipo()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Tipo de Coordinacion";

            $id_search="1";
            $tipo="Buscar Tipo de Coordinacion";
            $funcion="searchTipo";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.tipo.formulario_tipo',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function agregarTipo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $tipo=new App\Tipo;
            $tipo->tipo=ucwords($request->tipo);
            $tipo->estado=1;
            $tipo->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaTipo',$uri));
        }
    	else
        	return redirect('/');
    }
    public function updateTipo(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $tipo=App\Tipo::findOrFail($request->id_tipo);
            $tipo->tipo=ucwords($request->tipo);
            $tipo->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaTipo',$uri));
        }
    	else
        	return redirect('/');
    }
    public function eliminarTipo($id_tipo)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $tipo=App\Tipo::findOrFail($id_tipo);
            if ($tipo->estado==1)
                $tipo->estado=0;
            else
                $tipo->estado=1;
            $tipo->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaTipo',$uri));
        }
        else
            return redirect('/');
    }
    public function editarTipo($id_tipo)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $tipo_=App\Tipo::findOrFail($id_tipo);
            $titulo2="Editar Tipo de Coordinacion : ".$tipo_->tipo;

            $id_search="1";
            $tipo="Buscar Tipo de Coordinacion";
            $funcion="searchTipo";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.tipo.editar_tipo',compact('usuario','tipo_','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

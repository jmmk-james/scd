<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerCarrera extends Controller
{
    //
    public function listaCarrera($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Carreras";
            if($id_search>0)
                $lista_carrera=App\Carrera::where('nombre','like','%'.$search.'%')->get();
            else
                $lista_carrera=App\Carrera::all();
            
            $id_search="1";
            $tipo="Buscar Nombre de la Carrera";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.carrera.lista_carrera',compact('usuario','lista_carrera','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchCarrera(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaCarrera',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioCarrera()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Carrera";
            return view('admin.carrera.formulario_carrera',compact('usuario','titulo','titulo2'));
        }
    	else
        	return redirect('/');
    }
    public function agregarCarrera(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $carrera=new App\Carrera;
            $carrera->nombre=$request->nombre;
            $carrera->estado=1;
            $carrera->save();
            return redirect(route('listaCarrera'));
        }
    	else
        	return redirect('/');
    }
    public function updateCarrera(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $carrera=App\Carrera::findOrFail($request->id_carrera);
            $carrera->nombre=$request->nombre;
            $carrera->save();
            return redirect(route('listaCarrera'));
        }
    	else
        	return redirect('/');
    }
    public function eliminarCarrera($id_carrera)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $carrera=App\Carrera::findOrFail($id_carrera);
            if ($carrera->estado==1)
                $carrera->estado=0;
            else
                $carrera->estado=1;
            $carrera->save();
            return redirect('listaCarrera');

        }
        else
            return redirect('/');
    }
    public function editarCarrera($id_carrera)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $carrera=App\Carrera::findOrFail($id_carrera);
            $titulo2="Editar Carrera : ".$carrera->nombre;
            return view('admin.carrera.editar_carrera',compact('usuario','carrera','titulo','titulo2'));

        }
        else
            return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class ControllerCoordinador extends Controller
{
    //
    public function listaCoordinador($id_search,$search)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Coordinadores";
            if($id_search>0)
                //$lista_coordinador=App\Carrera::where('nombre','like','%'.$search.'%')->get();
                $lista_coordinador=App\Coordinador::all();
            else
                $lista_coordinador=App\Coordinador::all();
            
            $id_search="1";
            $tipo="Buscar Coordinador";
            $funcion="searchCoordinador";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.coordinador.lista_coordinador',compact('usuario','lista_coordinador','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function searchCoordinador(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaCoordinador',$uri));
        }
    	else
        	return redirect('/');
    }
    public function formularioCoordinador()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Registrar Nuevo Coordinador";

            $grado=App\Grado::all();

            $id_search="1";
            $tipo="Buscar Coordinador";
            $funcion="searchCoordinador";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.coordinador.formulario_coordinador',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri','grado'));
        }
    	else
        	return redirect('/');
    }
    public function agregarCoordinador(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $p=App\Persona::where('ci',$request->ci)->get();
            $px=App\Persona::where('correo',$request->correo)->get();

            if(isset($p) or isset($px))
            {
                return back()->with('mensaje','El número de C.i. o el E-mail ya se encuentran registrados, verifique e intente el registro nuevamente.');
            }
            else
            {
                $name=$request->file('firma')->store('public/firma');
                $name=str_replace('public/firma/','', $name);

                $persona= new App\Persona;
                $persona->nombre=$request->nombre;
                $persona->paterno=$request->paterno;
                $persona->materno=$request->materno;
                $persona->ci=$request->ci;
                $persona->correo=$request->correo;
                $persona->celular=$request->celular;
                $persona->save();

                $persona=App\Persona::all();
                $id_persona=$persona->last();

                $coordinador=new App\Coordinador;
                $coordinador->grado=$request->grado;
                $coordinador->id_tipo=$request->tipo;
                $coordinador->firma=$name;
                $coordinador->id_persona=$id_persona->id;
                $coordinador->save();

                $uri=array('id_search'=>0,'search'=>0);
                return redirect(route('listaCoordinador',$uri));

            }
        }
    	else
        	return redirect('/');
    }
    public function updateCoordinador(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $carrera=App\Carrera::findOrFail($request->id_carrera);
            $carrera->nombre=$request->nombre;
            $carrera->save();

            $persona= App\Persona::findOrFail($request->id_persona);
            $persona->nombre=$request->nombre;
            $persona->paterno=$request->paterno;
            $persona->materno=$request->materno;
            $persona->celular=$request->celular;
            $persona->save();

            $coordinador=App\Coordinador::findOrFail($request->id_coordinador);
            $coordinador->grado=$request->grado;
            $coordinador->id_tipo=$request->tipo;
            $coordinador->save();

            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaCoordinador',$uri));
        }
    	else
        	return redirect('/');
    }
    public function perfilCoordinador($id_coordinador)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $coordinador=App\Coordinador::findOrFail($id_coordinador);

            $titulo2="Datos del Coordinador : ".$coordinador->nombre;

            $id_search="1";
            $tipo="Buscar Nombre del Coordinador";
            $funcion="searchCoordinador";
            $uri=array('id_search'=>0,'search'=>0);
            
            return view('admin.coordinador.perfil_coordinador',compact('usuario','coordinador','titulo','titulo2','id_search','tipo','funcion','uri'));

        }
        else
            return redirect('/');
    }
}

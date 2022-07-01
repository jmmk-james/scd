<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App;

class ControllerUsuario extends Controller
{
    //
    public function perfil()
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD-> Perfil";
            $titulo2="Perfil de Usuario";
            $datos=DB::table('view_datos_usuario')->where('usuario_id',$usuario->usuario_id)->first();
            
            $id_search="1";
            $tipo="Buscar en SCD";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.usuario.perfil',compact('usuario','datos','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function perfilUsuario($id_usuario)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $datos=DB::table('view_datos_usuario')->where('usuario_id',$id_usuario)->first();
            $titulo="Panel SCD";
            $titulo2="Perfil ".$datos->correo;

            $id_search="1";
            $tipo="Buscar en SCD";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.usuario.perfil_usuario',compact('usuario','datos','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }
    public function updateperfil(Request $request)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $persona=App\Persona::findOrFail($request->id);
            $persona->nombre=ucwords($request->nombre);
            $persona->paterno=ucwords($request->paterno);
            $persona->materno=ucwords($request->materno);
            $persona->ci=$request->ci;
            $persona->celular=$request->celular;
            $persona->save();
            if($request->id_usuario>0)
            {
                $usd=App\Usuario::findOrFail($request->id_usuario);
                $usd->tipo=$request->tipo;
                $usd->save();
            }
            return back()->with('mensaje','Datos del perfil '.$persona->nombre.' fueron actualizados correctamente');
        }
        else
            return redirect('/');
    }
    public function updatepass(Request $request)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            if($request->id_usuario>0)
            {
                $usuario=App\Usuario::findOrFail($request->id);
                $usuario->pass=hash('ripemd160',$request->passn);
                $usuario->save();
                return back()->with('mensaje','Password del perfil '.$usuario->correo.' fue actualizado correctamente');
            }
            else
            {

                if($request->passn==$request->passr)
                {
                    $usuario=App\Usuario::findOrFail($request->id);
                    if(hash('ripemd160',$request->pass)==$usuario->pass)
                    {
                        $usuario->pass=hash('ripemd160',$request->passn);
                        $usuario->save();
                        return back()->with('mensaje','Password del perfil '.$usuario->correo.' fue actualizado correctamente');
                    }
                    else
                        return back()->with('mensaje_error','El password actual no es el correcto, ingrese el passwrod actual para poder realizar los cambios');        
                }
                else
                    return back()->with('mensaje_error','El password nuevo no coincide con el password de confirmación, verifique que ambos sean correctos');       
            }
        }
        else
            return redirect('/');
    }
    public function FormularioAgregarUsuario()
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Agregar Usuario";

            $id_search="1";
            $tipo="Buscar en SCD ";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.usuario.formulario_usuario',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
        else
            return redirect('/');
    }
    public function AgregarUsuario(Request $request)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            
            $persona=App\Persona::where('correo',$request->correo)->first();
            if(isset($persona))
            {
                back()->with('mensaje','El correo introducido, fue registrado anteriormente el mismo debe de ser único para la administración del sistema.');
            }
            else
            {
                $persona= new App\Persona;
                $persona->nombre=ucwords($request->nombre);
                $persona->paterno=ucwords($request->paterno);
                $persona->materno=ucwords($request->materno);
                $persona->ci=$request->ci;
                $persona->celular=$request->celular;
                $persona->correo=$request->correo;
                $persona->save();

                $persona=App\Persona::all();
                $idPersona=$persona->last();

                $usd=new App\Usuario;
                $usd->correo=$request->correo;
                $usd->pass=hash('ripemd160',$request->celular);
                $usd->tipo=$request->tipo;
                $usd->estado=1;
                $usd->id_persona=$idPersona->id;
                $usd->save();

                $uri=array('id_search'=>0,'search'=>0);

                return redirect(route('listaUsuario',$uri));
            }
            
        }
        else
            return redirect('/');
    }
    public function listaUsuario($id_search,$search)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Lista de Usuarios";
            if($id_search>0)
                $lista_usuario=DB::table('view_datos_usuario')->where('nombre','like','%'.$search.'%')->get();
            else
                $lista_usuario=DB::table('view_datos_usuario')->get();

            $id_search="1";
            $tipo="Buscar Usuario por Nombre";
            $funcion="searchUsuario";
            $uri=array('id_search'=>0,'search'=>0);
            return view('admin.usuario.lista_usuario',compact('usuario','titulo','titulo2','lista_usuario','id_search','tipo','funcion','uri'));
        }
        else
            return redirect('/');
    }
    public function searchUsuario(Request $request)
    {
        session_start();
    	if(isset($_SESSION['usuario']))
        {
            $uri=array('id_search'=>$request->id_search,'search'=>$request->search);
            return redirect(route('listaUsuario',$uri));
        }
    	else
        	return redirect('/');
    }
    public function eliminarUsuario($id_usuario)
    {
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usd=App\Usuario::findOrFail($id_usuario);
            if ($usd->estado==1)
                $usd->estado=0;
            else
                $usd->estado=1;
            $usd->save();
            $uri=array('id_search'=>0,'search'=>0);
            return redirect(route('listaUsuario',$uri));

        }
        else
            return redirect('/');
    }
}

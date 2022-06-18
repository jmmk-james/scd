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
            return view('admin.usuario.perfil',compact('usuario','datos','titulo','titulo2'));
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
            $persona->nombre=$request->nombre;
            $persona->paterno=$request->paterno;
            $persona->materno=$request->materno;
            $persona->ci=$request->ci;
            $persona->celular=$request->celular;
            $persona->save();
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
        else
            return redirect('/');
    }
}

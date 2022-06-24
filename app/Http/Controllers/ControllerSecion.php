<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class ControllerSecion extends Controller
{
    //
    public function sesion()
    {
        return view('admin.login.login');
    }
    public function login(Request $request)
    {
        $admin="";
        $pass= hash('ripemd160',$request->pass);
        $admin = App\Usuario::where('correo', $request->correo)->where('pass',$pass)->first();

        if($admin==""){
        	session_start();	
        	session_destroy();
            return back()->with('mensaje_error','Error de usuario o contraseña, verifique los datos e intente nuevamente');
        }
        else
        {
        	session_start();
            $usuario=DB::table('view_datos_usuario')->where('usuario_id',$admin->id)->first();
        	$_SESSION['usuario']=$usuario;
            return redirect('scd');// redirecciona a secion
        }
    }
    public function scd(){
    	session_start();
    	if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            $titulo="Panel SCD";
            $titulo2="Panel SCD";

            $id_search="1";
            $tipo="Buscar en SCD ";
            $funcion="searchCarrera";
            $uri=array('id_search'=>0,'search'=>0);

            return view('admin.panel.escritorio',compact('usuario','titulo','titulo2','id_search','tipo','funcion','uri'));
        }
    	else
        	return redirect('/');
    }// funcion que permite verificar y aceder al panel de inicio

    public function exit(){
        session_start();
        if(isset($_SESSION['usuario']))
        {
            $usuario=$_SESSION['usuario'];
            session_destroy();
        }
        return redirect('/');
    }// funcion que cierra el inicio de secion 

}

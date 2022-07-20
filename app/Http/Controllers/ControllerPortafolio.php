<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App;
class ControllerPortafolio extends Controller
{
    //
    public function portafolio()
    {
        $curso=DB::table('view_datos_curso')->orderBy('id_curso','DESC')->get();

        return view('publico.portafolio_detalle',compact('curso'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\DB;
use App;

class ControllerPDF extends Controller
{
    //
    public function boletaInscrito($id_curso,$id_persona,$id_estudiante,$id_inscrito)
    {
        $curso=DB::table('view_datos_inscripcion')->where('id_curso',$id_curso)->where('id_estudiante',$id_estudiante)->where('id_persona',$id_persona)->where('id_inscrito',$id_inscrito)->first();
        $nameqr=$curso->id_inscrito.'.png';
        $file=public_path('/qr');
        
        QrCode::style('dot')->format('png')->generate('ID:'.$curso->id_persona.' -  C.i.: '.$curso->ci.' - Curso ID : '. $curso->id_curso,'qr/'.$nameqr);

        $ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
        $ip= "IP Address is - ". $ip;
        $hora = date('m-d-Y h:i:s a', time()); 

        $pdf = \PDF::loadView('pdf.voleta',compact('curso','ip','hora'));
        $pdf->setPaper('letter');

        //return view('pdf.voleta',compact('curso','ip','hora'));
        return $pdf->download('boleto'.$id_estudiante.$id_curso.$id_persona.'.pdf');
    }
}

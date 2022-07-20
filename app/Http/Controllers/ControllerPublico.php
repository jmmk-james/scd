<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ControllerPublico extends Controller
{
    //
    public function index()
    {
        $curso=App\Curso::offset(0)->limit(6)->orderByRaw('RAND()')->get();

        return view('publico.inicio',compact('curso'));
    }
}

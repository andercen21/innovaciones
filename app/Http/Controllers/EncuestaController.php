<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\encuesta;

class EncuestaController extends Controller
{
    //
    public function vista(){
        return  view('encuesta');
    }

    public function create(Request $request){
        $encusta = new encusta();

        
        $encusta -> pregunta = $request -> pregunta;
        $encusta -> respuesta = $request -> respuesta;
        $encusta -> save();

        return redirect('/create');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    //
    public function vista(){
        return  view('mesaje');
    }

    public function create(Request $request){
        $mensaje = new mensaje();

        
        $mensaje -> id_usuario = $request -> id_usuario;
        $mensaje -> id_puesto = $request -> id_puesto;
        $mensaje -> id_agencia = $request -> id_agencia;
        $mensaje -> fecha= $request -> fecha;
        $mensaje -> mensaje = $request -> mensaje;
        $mensaje -> telefono = $request -> telefono;
        $mensaje -> correo = $request -> correo;
        $mensaje -> save();

        return redirect('/create');

    }
}

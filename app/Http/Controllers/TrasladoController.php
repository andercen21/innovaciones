<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\traslado;

class TrasladoController extends Controller
{
    //
    public function vista(){
        return  view('traslado');
    }

    public function create(Request $request){
        $traslado = new traslado();

        $traslado -> id_empleado = $request -> id_empleado;
        $traslado -> codigo_agencia = $request -> codigo_agencia;
        $traslado -> fecha_cambio = $request -> fecha_cambio;

        $traslado -> save();

        return redirect('/create');

    }
}

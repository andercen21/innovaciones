<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoAgenciaController extends Controller
{
    //
    public function vista(){
        return  view('tipo_agencia');
    }

    public function create(Request $request){
        $tipo_agencia = new tipo_agencia();

        
        
        $tipo_agencia -> tipo = $request -> tipo;

        $tipo_agencia -> save();

        return redirect('/create');

    }
}

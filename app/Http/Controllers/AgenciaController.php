<?php

namespace App\Http\Controllers;
use App\agencia;

use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    //
    public function vista(){
        return  view('agencias');
    }

    public function create(Request $request){
        $agencia = new agencia();

        $agencia -> id_agencia = $request -> id_agencia;
        $agencia -> nombre = $request -> nombre;
        $agencia -> direccion = $request -> direccion;
        $agencia -> telefono = $request -> telefono;
        $agencia -> id_departamento = $request -> id_departamento;
        $agencia -> id_municipio = $request -> id_municipio;
        $agencia -> id_region = $request -> id_region;
        $agencia -> id_tipo_agencia = $request -> id_tipo_agencia;

        $agencia -> save();

        return redirect('/create');

    }
}

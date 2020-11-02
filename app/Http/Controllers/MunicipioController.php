<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    //
    public function vista(){
        return  view('municipio');
    }

    public function create(Request $request){
        $municipio = new municipio();

        
        $municipio -> id_municipio = $request -> id_municipio;
        $municipio -> municipio = $request -> municipio;
        $municipio -> id_agencia = $request -> id_agencia;
        $municipio -> id_departamento= $request -> id_departamento;

        $municipio -> save();

        return redirect('/create');

    }
}

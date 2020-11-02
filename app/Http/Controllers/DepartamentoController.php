<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\departamento;

class DepartamentoController extends Controller
{
    //
    public function vista(){
        return  view('departamento');
    }

    public function create(Request $request){
        $departamento = new departamento();

        
        $departamento -> id_departamento = $request -> id_departamento;
        $departamento -> departamento = $request -> departamento;

        $departamento -> save();

        return redirect('/create');

    }
}

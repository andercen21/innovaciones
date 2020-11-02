<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuestoController extends Controller
{
    //
    public function vista(){
        return  view('puesto');
    }

    public function create(Request $request){
        $puesto = new puesto();

        
        
        $puesto -> puesto = $request -> puesto;

        $puesto -> save();

        return redirect('/create');

    }
}

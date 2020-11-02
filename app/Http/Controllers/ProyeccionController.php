<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyeccionController extends Controller
{
    //
    public function vista(){
        return  view('proyeccion');
    }

    public function create(Request $request){
        $proyeccion = new proyeccion();

        
        $proyeccion -> periodo = $request -> periodo;
        $proyeccion -> id_empleado = $request -> id_empleado;
        $proyeccion -> id_festividad = $request -> id_festividad;
        $proyeccion -> id_transacciones= $request -> id_transacciones;
        $proyeccion -> id_agencia= $request -> id_agencia;

        $proyeccion -> save();

        return redirect('/create');

    }
}

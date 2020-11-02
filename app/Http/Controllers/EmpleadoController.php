<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\empleado;

class EmpleadoController extends Controller
{
    //
    public function vista(){
        return  view('empleado');
    }

    public function create(Request $request){
        $empleado = new empleado();

        
        $empleado -> id_empleado = $request -> id_empleado;
        $empleado -> nombre = $request -> nombre;
        $empleado -> id_puesto = $request -> id_puesto;
        $empleado -> id_agencia = $request -> id_agencia;
        $empleado -> fecha_ingreso = $request -> fecha_ingreso;
        $empleado -> fecha_baja = $request -> fecha_baja;
        $empleado -> estado = $request -> estado;
        $empleado -> sexo = $request -> sexo;

        $empleado -> save();

        return redirect('/create');

    }
}

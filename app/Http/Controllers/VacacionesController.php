<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\vacaciones;

class VacacionesController extends Controller
{
    //
    public function vista(){
        return  view('vacaciones');
    }

    public function create(Request $request){
        $vacaciones = new vacaciones();

        $vacaciones -> id_empleado = $request -> id_empleado;
        $vacaciones -> fecha_salida = $request -> fecha_salida;
        $vacaciones -> fecha_entrada = $request -> fecha_entrada;
        $vacaciones -> estado = $request -> estado;

        $vacaciones -> save();

        return redirect('/create');

    }

}

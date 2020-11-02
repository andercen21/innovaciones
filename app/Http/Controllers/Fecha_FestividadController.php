<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\fecha_festividad;
class Fecha_FestividadController extends Controller
{
    //
    public function vista(){
        return  view('fecha_festiva');
    }

    public function create(Request $request){
        $fecha_festividad = new fecha_festividad();

        
        $fecha_festividad -> id_fecha_festiva = $request -> id_fecha_festiva;
        $fecha_festividad -> fecha = $request -> fecha;
        $fecha_festividad -> id_festividad = $request -> id_festividad;
        $fecha_festividad -> save();

        return redirect('/create');

    }
}

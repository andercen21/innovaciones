<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\trasacciones;

class TransaccionController extends Controller
{
    //

    public function vista(){
        return  view('transaccion');
    }

    public function create(Request $request){
        $transaccion = new transaccion();

        $transaccion -> id_agencia = $request -> id_agencia;
        $transaccion -> fecha = $request -> fecha;
        $transaccion -> transacciones = $request -> transacciones;
        $transaccion -> periodo = $request -> periodo;

        $transaccion -> save();

        return redirect('/create');

    }
}

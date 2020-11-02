<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\antiguedad;
class AntiguedadController extends Controller
{
    //
    public function vista(){
        return  view('antiguedad');
    }

    public function create(Request $request){
        $antiguedad = new antiguedad();

        $antiguedad -> id_antiguedad_emp = $request -> id_antiguedad_emp;
        $antiguedad -> id_empleado = $request -> id_empleado;
        $antiguedad -> antiguedad = $request -> antigueda;
        $antiguedad -> save();

        return redirect('/create');

    }
}

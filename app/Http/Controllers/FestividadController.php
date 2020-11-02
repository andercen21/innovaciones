<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestividadController extends Controller
{
    //
    public function vista(){
        return  view('festividad');
    }

    public function create(Request $request){
        $festividad = new festividad();

        
        $festividad -> nombre_festivo = $request -> nombre_festivo;
        $festividad -> save();

        return redirect('/create');

    }
}

<?php

namespace App\Http\Controllers;
use app\auditoria;
use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    public function vista(){
        return  view('auditoria');
    }

    public function create(Request $request){
        $auditoria = new auditoria();

        
        $auditoria -> id_usuario = $request -> id_usuario;
        $auditoria -> operado = $request -> operado;
        $auditoria -> fecha_operado = $request -> fecha_operado;
        $auditoria -> modificado = $request -> modificado;
        $auditoria -> tabla_afectad = $request -> tabla_afectada;
        $auditoria -> auditoriacol = $request -> auditoriacol; 
        $auditoria -> save();

        return redirect('/create');

    }
}

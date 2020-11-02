<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
    public function vista(){
        return  view('region');
    }

    public function create(Request $request){
        $region = new region();

        
        
        $region -> region = $request -> region;

        $region -> save();

        return redirect('/create');

    }
}

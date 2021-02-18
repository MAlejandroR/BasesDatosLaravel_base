<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class ControladorPersona extends Controller
{
    //

    public function get(){
        $personas = Persona::All();
//        dd($personas);
        return view("persona",["personas"=>$personas]);
    }
}

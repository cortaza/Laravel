<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class FormController extends Controller
{
    ///////////////////////////////
    //-----//PROGRAMA//-----//
    /////////////////////////////// 
    public function form(){        
        $programas=Programa::all();        
        return view('form', ['programas'=>$programas]);
    }
    public function edit(){        
        $programas=Programa::all();        
        return view('edit', ['programs'=>$programas]);
    }
}

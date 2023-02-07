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

    public function delete($program_code){
        // return $game_id;
        $programas =Programa::find($program_code);
        $programas ->delete();
        return redirect()->route('form');
    }
}

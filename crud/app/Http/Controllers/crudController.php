<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;    
class crudController extends Controller
{
    public function homeFun() {
        $ospiti = Ospite::all();
        return view('pages.home', compact(
            'ospiti'
        ));
    }

    public function ospiteFun($id) {
        $ospite = Ospite::findOrFail($id);
        
        return view('pages.ospite', compact(
            'ospite'
        ));   
    }   
      
    public function formFun(){

        return view('pages.form');
    }
}   
      
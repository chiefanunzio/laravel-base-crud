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
   
    public function dbFun(Request $request){   

         $validate = $request -> validate([

            'name' => 'nullable' ,
            'lastname' => 'nullable', 
            'document_type' => 'nullable' ,   
            'document_number' => 'nullable' ,
            'date_of_birth' => 'nullable' ,
   
         ]);
            
           
        dd($validate);   
    }
}   
         
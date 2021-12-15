<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class samplecontroller extends Controller
{
    //
    public function show(){
        echo "Welcome";
    }
    public function para($data){
        return "Welcome $data";
    }
}

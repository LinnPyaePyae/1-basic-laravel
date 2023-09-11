<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function run(){
        // return "hello I'm run";
        return view("about",[
            'name'=> "aaa"

        ]);
    }

    public function area($width,$height){
        return $width*$height;

    }
}

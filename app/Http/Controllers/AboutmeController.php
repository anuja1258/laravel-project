<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    //
    function display(){
        $data = "RKU";
        return view('aboutme',['data'=>$data]);
    }
}

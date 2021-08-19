<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function display($name){
        echo "Hello " .$name;
        return view('admin',['name'=>$name]);
    }
}

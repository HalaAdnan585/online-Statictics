<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $ip = '82.205.82.22'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $data = \Location::get($ip);                
        return view('details',compact('data'));
    }
}

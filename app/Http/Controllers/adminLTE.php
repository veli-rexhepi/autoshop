<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminLTE extends Controller
{
    public function index() {
        return view('adminLTE.index');
    }
    
    public function index2() {
        return view('adminLTE.index2');
    }
}

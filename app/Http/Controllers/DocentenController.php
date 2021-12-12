<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentenController extends Controller
{
    public function index(){
        return view('docenten');
    }
}

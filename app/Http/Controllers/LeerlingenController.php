<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeerlingenController extends Controller
{
    public function index(){
        return view('leerlingen');
    }
}

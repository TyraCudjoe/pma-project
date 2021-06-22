<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowOpdrachtenWebController extends Controller
{
     /**
     * Handle the incoming request.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $opdrachtenWeb = DB::table('opdrachten_jaar1_sd_web')->get();
        if($request->query('id') !== null){
            $opdrachtenWeb = $opdrachtenWeb->where('id', $request->query('id'));
        }
        return view('opdrachtenWeb.index', ['opdrachtenWeb' => $opdrachtenWeb]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
class meliController extends Controller
{
    public function incoming(Request $request){

        Log::debug($request->all());
        
        return response()->json(['status'=> 200, 'msg' => 'success']);

    }
}

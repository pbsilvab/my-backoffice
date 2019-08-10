<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
class meliController extends Controller
{
    public function incoming(Request $request){

        Log::debug($reques->all());
        dd($reques->all());

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;
use DB;

class RatesController extends Controller
{
    public function saveVote($data = []){

        if(Rate::create($data)){
            return  response()->json(['s'=>true,'msj'=>'Gracias por Votar']);
        }else{
            return  response()->json(['s'=>true,'msj'=>'No fue posible registrar el voto']);
        }

    }
    public function getVotesSum(){

        $stats = Rate::select(DB::raw('SUM(positive) as likes'), DB::raw('SUM(negative) as dislikes'), DB::raw('SUM(regular) as normal'))->get()->toArray();

        return response()->json($stats);

    }
    public function votePositive(){

        $vote_result = $this->saveVote([
            'positive'=>true,
            'negative'=>false,
            'regular'=>false,
        ]);
        
        return $vote_result;
    }
    public function voteRegular(){

        $vote_result = $this->saveVote([
            'positive'=>false,
            'negative'=>false,
            'regular'=>true,
        ]);
        
        return $vote_result;
    }
    public function voteNegative(){

        $vote_result = $this->saveVote([
            'positive'=>false,
            'negative'=>true,
            'regular'=>false,
        ]);
        
        return $vote_result;
    }
}

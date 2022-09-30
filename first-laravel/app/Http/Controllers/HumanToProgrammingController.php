<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanToProgrammingController extends Controller
{
    function convertString(Request $request){
        $s=$request->s;
        preg_match_all('!\d+!', $s, $matches);
        for($i=0;$i<=count($matches);$i++){
            preg_replace($matches[$i],decbin($matches[$i]),$s);
        }

    }
}

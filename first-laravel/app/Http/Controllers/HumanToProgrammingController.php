<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanToProgrammingController extends Controller
{
    function convertString(Request $request){
        $s=$request->s;//taking string value from request
        preg_match_all('!\d+!', $s, $matches);//extract numbers from string using regex
        for($i=0;$i<=count($matches);$i++){//looping over the array 
            preg_replace($matches[$i],decbin($matches[$i]),$s);//replace each number by its binary value
        }

    }
}

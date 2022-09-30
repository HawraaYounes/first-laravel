<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller
{
    function sortString($s){//Assume string="ca"
        $len=strlen($s);//length is equal to string length (in our example=strlen("ca")=2)
        for ($i = 0; $i < $len; $i++) {//loop over the string $s starting from index 0 (from "c" in our example)
            for ($j = $i + 1; $j < $len; $j++) {//another loop start from adjacent position (from "a" in our example) 
                if ($s[$i] < $s[$j]) {//check if previous character is in it's right place(sorted)-in our example "ca" they're not sorted,so enter if statement
                    $temp = $s[$i];//store first character ("c") in temprary variable
                    $s[$i] = $s[$j];//swap the two characters, put "a" in place of "c"
                    $s[$j] = $temp;//assign the temp variable to the adjacent character, so, the adjacent charachter will have the value of "c"
                    //now our string "ca" is sorte=> "ac"
                }
            }
        }
        return response()->json([//return the sorted string
            "status"=>"success",
            "message"=>$s
        ]);
 
    }
}
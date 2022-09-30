<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceNumberController extends Controller
{
    function placeNumber($num){
        $arr=[];//define empty array
        $len=floor(log10($num));//define length of the number
        for ($i=0;$i<=$len+2;$i++){
            $x=floor($num%10);//round the number %10 to it's nearest value
            $x=$x*pow(10,$len);//multiply the rounded result by 10 power length
            array_push($arr,$x);//push x to the array
            $len--;//decrement the length after x is pushed
            $num=$num/10;//divide number by 10
        }
        return response()->json([
            "status"=>"success",
            "message"=>$arr
        ]);
    }
}

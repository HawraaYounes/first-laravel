<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceNumberController extends Controller
{
    function placeNumber($num){
        $x=0;
        $arr=[];
        $len=floor(log10($num));
        for ($i=0;$i<=$len+2;$i++){
            $x=floor($num%10);
            $x=$x*pow(10,$len);
            $len--;
            array_push($arr,$x);
            $num=$num/10;
        }
        return response()->json([
            "status"=>"success",
            "message"=>$arr
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller
{
    function sortString($s){
        return "hi". $s;
    }
}

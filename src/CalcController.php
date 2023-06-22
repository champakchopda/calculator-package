<?php

namespace Monocubed\Calc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalcController extends Controller
{
    public static function add($a, $b){
        return $a + $b;
    }

    public static function subtract($a, $b){
        return $a - $b;
    }
}

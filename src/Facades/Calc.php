<?php


namespace Monocubed\Calc\Facades;

use Illuminate\Support\Facades\Facade;

class Calc extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Calc';
    }
}

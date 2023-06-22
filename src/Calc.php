<?php

declare(strict_types=1);

namespace Monocubed\Calc;

use Monocubed\Calc\Exceptions\CustomException;

class Calc 
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b){
        return $a - $b;
    }

    public function multiplication($a, $b)
    {
        return $a * $b;
    }

    public function division(int $a, int $b)
    {
        return $a / $b;
    }


    
}
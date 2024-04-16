<?php

declare(strict_types=1);

$value1 = 1;
$value2 = 3;

function myFunc(int|float $a, int|float $b, ?closure $c = null): int|float
{
    if(null !== $c){
       $c($a, $b);
    }
    return $a * $b;
};

$result = function (int|float $_a, int|float $_b): void
{
   echo $_a * $_b.PHP_EOL;

};

myFunc($value1, $value2).PHP_EOL;
myFunc($value1, $value2, $result).PHP_EOL;





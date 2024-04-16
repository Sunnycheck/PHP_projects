<?php

declare(strict_types=1);

$value1 = 2;
$value2 = 3;


function myFunc(int|float $a, int|float $b, ?closure $c = null): int|float
{
    $result = $a * $b;
    if (null !== $c) {
        $c($result);
    }
    return $result;
}



$printArg = function (int|float $_a): void {
    echo $_a.PHP_EOL;

};

myFunc($value1, $value2).PHP_EOL;
myFunc($value1, $value2, $printArg);









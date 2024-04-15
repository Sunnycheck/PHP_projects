<?php

//1. Написати програму на PHP, яка містить користувацьку функцію для обчислення площі кола
// та демонструє використання передачі даних у функцію за допомогою параметрів.
//S = π × r2

declare(strict_types = 1);

$r = 3;
function circle(int|float $a): int|float
{

    return pi() * pow($a,2);
}

echo circle($r).PHP_EOL;

//2. Написати програму на PHP, яка приймає число і підносить його до ступеню
//Використайте функцію в двох варіантах: коли вона повертає нове число і змінює передане.

$inputNumber = 2;
$exponentValue = 2;

function calculator0(int $number, int $exponent): int
{
    return pow($number, $exponent);
}

echo calculator0($inputNumber, $exponentValue).PHP_EOL;


$_inputNumber = 3;
$exponentValue = 3;
function calculator1(int &$number, int $exponent): int
{
      return $number = pow($number, $exponent);
}

echo calculator1($_inputNumber, $exponentValue).PHP_EOL;
echo $_inputNumber.PHP_EOL;

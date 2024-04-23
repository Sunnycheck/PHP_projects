<?php
declare(strict_types=1);

$firstVal = 0;
$secondVal = 1;
$limit = 55;

function fibo($a, $b, $limit): Generator
{
    while ($a < $limit) {
        yield $a;
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
}

foreach (fibo($firstVal, $secondVal, $limit) as $values) {
    echo $values.PHP_EOL;
}
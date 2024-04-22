<?php
declare(strict_types=1);

function randomArray(int $length = 12, int $min = 1, int $max = 20): array
{
    $initArray = [];
    for ($i = 0; $i < $length; $i++) {
        $initArray[] = rand($min, $max);
    }
    return $initArray;
}

$generatedArray = randomArray();
foreach ($generatedArray as $value) {
    echo $value . PHP_EOL;
}

function minmaxArray(array $arr): void
{
    $min = min($arr);
    $max = max($arr);
    echo "Мінімальне значення в масиві = $min. Максимальне = $max." . PHP_EOL;
}

minmaxArray($generatedArray);


function sortedArray(array $arr): void
{
    sort($arr);

    foreach ($arr as $value) {
        echo $value . PHP_EOL;
    }
    exit;
}

sortedArray($generatedArray);






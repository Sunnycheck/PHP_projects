<?php

declare(strict_types=1);
//Створити пустий масив і заповнити його випадковими значеннями. (створити функцію як на уроці)

function randomArray(int $length = 6, int $min = 1, int $max = 6): array
{
    $initArray = [];
    for ($i = 0; $i < $length; $i++) {
        $initArray[] = rand($min, $max);
    }
    return $initArray;
}

$generatedArray = randomArray();
print_r($generatedArray);

// Порахувати суму елементів масиву.
$sum = 0;
foreach ($generatedArray as $elem) {
    $sum += $elem;
}
echo $sum . PHP_EOL;

//Порахувати добуток всіх елементів масиву.
$multiplication = 1;
$arrayLength = count($generatedArray);

for ($i = 0; $i < $arrayLength; $i++) {
    $multiplication *= $generatedArray[$i];
}
echo $multiplication . PHP_EOL;

//Перевірте скільки раз число 5 зустрічається у вас в масиві.
$countTimes = 0;
foreach ($generatedArray as $elem) {
    if ($elem !== 5)
        continue;
    $countTimes++;
}
$message = "Число п'ять зустрічається $countTimes раз(-и).";
echo $message . PHP_EOL;

//Виведіть на екран тільки числа, які націло діляться на 3.
$uniqNumbers = [];
$resultUnique = null;

for ($i = 0; $i < $arrayLength; $i++) {
    if ($generatedArray[$i] % 3 === 0) {
        $uniqNumbers[] = $generatedArray[$i];

    }
}
if (count($uniqNumbers) === 0) {
    echo "No matches" . PHP_EOL;
} else {
    $resultUnique = array_unique($uniqNumbers);

}

print_r($resultUnique) . PHP_EOL;





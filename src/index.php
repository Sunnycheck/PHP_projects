<?php

echo "Hello, what's your name?\n";
$userName = trim(fgets(STDIN));
echo "Greetings, $userName. Hope you're doing well.".PHP_EOL;

echo "$userName, make input of 3 numbers and i'll calculate their sum and average value.".PHP_EOL;
echo "Please, enter first number".PHP_EOL;
$firstNumber = trim(fgets(STDIN));

echo "Please, enter second number".PHP_EOL;
$secondNumber = trim(fgets(STDIN));
echo "Please, enter third number".PHP_EOL;

$thirdNumber = trim(fgets(STDIN));

$sum = (int)$firstNumber + (int)$secondNumber + (int)$thirdNumber;
$average = $sum / 3;
echo "The sum is $sum and the average is $average".PHP_EOL;







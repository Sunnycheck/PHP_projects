<?php

(int)$constValue1 = 1;
(int)$constValue2 = 2;
(int)$constValue3 = 3;
(int)$constValue4 = 4;
(int)$constValue5 = 5;
(int)$constValue6 = 6;

(string)$constColor1 = "green";
(string)$constColor2 = "red";
(string)$constColor3 = "blue";
(string)$constColor4 = "brown";
(string)$constColor5 = "violet";
(string)$constColor6 = "black";
(string)$constColor7 = "white";


(int)$value = "4";

// if else
if ($value == $constValue1) {
    echo "$constColor1" . PHP_EOL;
} else if ($value == $constValue2) {
    echo "$constColor2" . PHP_EOL;
} else if ($value == $constValue3) {
    echo "$constColor3" . PHP_EOL;
} else if ($value == $constValue4) {
    echo "$constColor4" . PHP_EOL;
} else if ($value == $constValue5) {
    echo "$constColor5" . PHP_EOL;
} else if ($value == $constValue6) {
    echo "$constColor6" . PHP_EOL;
} else {
    echo "$constColor7" . PHP_EOL;
};

//switch

//switch ($value) {
//    case $constValue1:
//        echo "$constColor1" . PHP_EOL;
//        break;
//    case $constValue2:
//        echo "$constColor2" . PHP_EOL;
//        break;
//    case $constValue3:
//        echo "$constColor3" . PHP_EOL;
//        break;
//    case $constValue4:
//        echo "$constColor4" . PHP_EOL;
//        break;
//    case $constValue5:
//        echo "$constColor5" . PHP_EOL;
//        break;
//    case $constValue6:
//        echo "$constColor6" . PHP_EOL;
//        break;
//    default:
//        echo "$constColor7" . PHP_EOL;
//
//};

//match

//$colorOutput = match ($value) {
//    $constValue1 => $constColor1,
//    $constValue2 => $constColor2,
//    $constValue3 => $constColor3,
//    $constValue4 => $constColor4,
//    $constValue5 => $constColor5,
//    $constValue6 => $constColor6,
//    default => $constColor7
//};
//
//echo $colorOutput.PHP_EOL;


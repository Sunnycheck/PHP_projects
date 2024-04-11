<?php
//Порівняння несуворе
$var1 = 5;
$var2 = true;
$result1 = $var1 == $var2;
var_dump($result1);

$var = 1;
$var2 = 3.44;
var_dump($var == $var2);

$var = 1;
$var2 = "true";
var_dump($var == $var2);

$var = 1;
$var2 = null;
var_dump($var == $var2);


$var3 = "5";
$var4 = 5.44;
$result2 = $var3 == $var4;
var_dump($result2);

$var3 = "5";
$var4 = false;
$result2 = $var3 == $var4;
var_dump($result2);

$var3 = "5";
$var4 = null;
$result2 = $var3 == $var4;
var_dump($result2);

$var3 = "3.33";
$var4 = 3.33;
$result2 = $var3 == $var4;
var_dump($result2);

$var3 = true;
$var4 = 3.33;
$result2 = $var3 == $var4;
var_dump($result2);

$var3 = null;
$var4 = 3.33;
$result2 = $var3 == $var4;
var_dump($result2);

$var5 = null;
$var6 = "text";
$result3 = $var5 == $var6;
var_dump($result3);

$var7 = null;
$var8 = "5text";
$result4 = $var7 == $var8;
var_dump($result4);

$var9 = 5;
$var10 = null;
var_dump($var9 == $var10);

// Порівняння суворе

$var1 = 5;
$var2 = true;
$result1 = $var1 === $var2;
var_dump($result1);

$var = 1;
$var2 = 3.44;
var_dump($var === $var2);

$var = 1;
$var2 = "true";
var_dump($var === $var2);

$var = 1;
$var2 = null;
var_dump($var === $var2);


$var3 = "5";
$var4 = 5.44;
$result2 = $var3 === $var4;
var_dump($result2);

$var3 = "5";
$var4 = false;
$result2 = $var3 === $var4;
var_dump($result2);

$var3 = "5";
$var4 = null;
$result2 = $var3 === $var4;
var_dump($result2);

$var3 = "3.33";
$var4 = 3.33;
$result2 = $var3 === $var4;
var_dump($result2);

$var3 = true;
$var4 = 3.33;
$result2 = $var3 === $var4;
var_dump($result2);

$var3 = null;
$var4 = 3.33;
$result2 = $var3 === $var4;
var_dump($result2);

$var5 = null;
$var6 = "text";
$result3 = $var5 === $var6;
var_dump($result3);

$var7 = null;
$var8 = "5text";
$result4 = $var7 === $var8;
var_dump($result4);

$var9 = 5;
$var10 = null;
var_dump($var9 === $var10);

$var1 = 5;
$var2 = 5.5;
var_dump($var1 === $var2);

$var3 = null;
$var4 = false;
$result2 = $var3 === $var4;
var_dump($result2);

$var5 = true;
$var6 = 'true';
$result3 = $var5 === $var6;
var_dump($result3);

$var7 = "5text";
$var8 = "5text";
$result4 = $var7 === $var8;
var_dump($result4);

$var9 = 5;
$var10 = null;
var_dump($var9 === $var10);




//Суворе порівняння при преведенні типів

$var1 = (int) true;
$var2 = (int) 5;
var_dump($var1 === $var2);

$var3 = (float) null;
$var4 = (int) false;
$result2 = $var3 === $var4;
var_dump($result2);

$var5 = (bool)true;
$var6 = (string) "true";
$result3 = $var5 === $var6;
var_dump($result3);

$var7 = (string)"5text";
$var8 = (int)"5text";
$result4 = $var7 === $var8;
var_dump($result4);

$var9 = (int) 5;
$var10 = (float) 5.0;
var_dump($var9 === $var10);

$var9 = (string) '5';
$var10 = (int) 5;
var_dump($var9 === $var10);

$var9 = (bool) true;
$var10 = (bool) 5;
var_dump($var9 === $var10);

$var9 = (bool) true;
$var10 = (bool) 5.55;
var_dump($var9 === $var10);

$var9 = (bool) true;
$var10 = (bool) "text";
var_dump($var9 === $var10);

$var9 = (float) true;
$var10 = (float) 5.55;
var_dump($var9 === $var10);


//Несуворе порівняння при преведенні типів

$var9 = (string) true;
$var10 = (float) 5.55;
var_dump($var9 == $var10);

$var9 = (bool) true;
$var10 = (float) 5.55;
var_dump($var9 == $var10);

$var9 = (bool) true;
$var10 = (integer) 5.4;
var_dump($var9 == $var10);

$var9 = (string) 5;
$var10 = (int)"5";
var_dump($var9 == $var10).PHP_EOL;

$var9 = (int) 5;
$var10 = (int)"5text";
var_dump($var9 == $var10);


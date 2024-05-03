<?php

require_once './MainClass.php';
require_once './ChildrenClass.php';


$a = new MainClass();
echo $a->getText().PHP_EOL;

$b = new ChildrenClass();
echo $b->getText().PHP_EOL;


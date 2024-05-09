<?php

require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';
try {
    $rectangle = new Rectangle(2, 3);
    $rectangle->setValues(2.2, 4.1);

    echo $rectangle->getHeight() . PHP_EOL;
    echo $rectangle->getWidth() . PHP_EOL;
    echo $rectangle->getPerimeter() . PHP_EOL;
    echo $rectangle->getArea() . PHP_EOL;

    $circle1 = new Circle(1.1);
    $circle1->setRadius(3.2);
    echo $circle1->getRadius() . PHP_EOL;
    echo $circle1->getPerimeter() . PHP_EOL;
    echo $circle1->getArea() . PHP_EOL;


} catch (Exception $error) {
    echo $error->getMessage();
}


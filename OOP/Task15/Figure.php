<?php

abstract class Figure
{
    abstract public function area(float $arg1, float $arg2): float;

    abstract public function perimeter(float $arg1, float $arg2): float;
}
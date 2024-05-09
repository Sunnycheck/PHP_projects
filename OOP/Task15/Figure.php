<?php

abstract class Figure
{
    abstract public function area($arg1, $arg2): float;

    abstract public function perimeter($arg1, $arg2): float;
}
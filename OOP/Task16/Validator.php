<?php

trait Validator
{


    protected function maxLength(string $string, int $length = 10): bool
    {
        return strlen($string) > $length;
    }

    protected function minLength(string $string, int $length = 5): bool
    {
        return strlen($string) >= $length;
    }


}
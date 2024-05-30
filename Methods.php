<?php


class Methods
{
    public function greet(): void
    {
        echo "Hello!";
    }

    public function sum()
    {
        $a = $_POST["val1"];
        $b = $_POST["val2"];
        echo $a+$b;


    }

    public function result(){
        echo sum();
    }

}

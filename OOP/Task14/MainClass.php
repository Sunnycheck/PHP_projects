<?php


class MainClass
{
    protected string $text;

    public function __construct(string $text = "some text")
    {
        $this->text = $text;
    }
    public function print(): string
    {
        return $this->text = ucfirst($this->text);
    }


    public function getText(): string
    {
        return $this->print();
    }




}


<?php

class ChildrenClass extends MainClass
{

    public function print(): string
    {
        return $this->text = strtoupper($this->text);
    }
}
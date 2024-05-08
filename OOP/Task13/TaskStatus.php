<?php

enum TaskStatus : string
{
case Uncompleted = "In progress";
case Done = "Completed";
};


//public function state($state = TaskStatus::Uncompleted):string
//{
//return $state;
//
//}
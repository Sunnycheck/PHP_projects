<?php

require_once "TaskList.php";
require_once "TaskStatus.php";


try {
   // print_r(TaskStatus::cases());
$task0 = new TaskList("t.txt");


$task0->addTask("do smth else", 4,TaskStatus::UNCOMLETED);
  // $task0->deleteTask("663d1b128c027");
 // print_r($task0->getTasks());
//$task0->completeTask("663d1b360d6ef",TaskStatus::DONE);
} catch (Exception $error) {
    echo $error->getMessage() . PHP_EOL;
}





<?php

require_once "TaskList.php";
require_once "TaskStatus.php";


try {
    $task0 = new TaskList("test.txt");
    $task0->addTask("do smth", 3);
    //$task0->deleteTask("663b73597872b");
    //print_r($task0->getTasks());
//$task0->completeTask("663b73629745e");
} catch (Exception $error) {
    echo $error->getMessage() . PHP_EOL;
}





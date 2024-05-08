<?php

class TaskList
{
    private string $filepath;

    private TaskStatus $taskStatus;

    public function __construct(string $file)
    {
        $this->setFilepath($file);

    }


    public function setFilepath(string $filepath): void
    {
        $file = pathinfo($filepath);
        if (isset($file['extension'])) {
            $extension = $file['extension'];
            if ($extension !== 'txt') {
                throw new Exception("Invalid file extension");
            }

        }

        $this->filepath = $filepath;
    }

    public function addTask(string $taskName, int $priority, $taskStatus = "In progress"): void
    {
        if (strlen($taskName) < 3) {
            throw new Exception("To short task");
        }
        if (strlen($taskName) > 20) {
            throw new Exception("To long task");
        }
        if ($priority < 1 || $priority > 5) {
            throw new Exception("Invalid priority value");
        }
        $taskId = uniqid();
        file_put_contents($this->filepath, "$taskId~$taskName~$priority~$taskStatus\n", FILE_APPEND);
    }

    public function deleteTask(string $taskId): void
    {

        $this->fileToArray();


        $tasks = array_filter($this->fileToArray(), function ($task) use ($taskId) {
            return $task[0] !== $taskId;
        });
        $this->arrayToFile($tasks);
//        unlink($this->filepath);
//        foreach ($tasks as $task) {
//            file_put_contents($this->filepath, "$task[0]~$task[1]~$task[2]~$task[3]\n", FILE_APPEND);
//
//        }

    }

    public function getTasks(): array
    {
        $result = $this->fileToArray();

        usort($result, function ($task1, $task2) {
            return $task2[2] <=> $task1[2];
        });
        return $result;
    }

    public function completeTask(string $taskId): void
    {
        $result = $this->fileToArray();

        foreach ($result as $key => $value) {
            if ($value[0] === $taskId) {
                $result[$key][3] = "Completed";
                break;
            }
        }
        $this->arrayToFile($result);
//        unlink($this->filepath);
//        foreach ($result as $task) {
//            file_put_contents($this->filepath, "$task[0]~$task[1]~$task[2]~$task[3]\n", FILE_APPEND);
//        }

    }

    //Repeated code made into fileToArray
    private function fileToArray(): array
    {
        $tasks = file($this->filepath);
        foreach ($tasks as $key => $task) {
            $task = explode("~", $task);
            array_walk($task, function (&$value) {
                $value = trim($value);
            });

            $tasks[$key] = $task;
        }
        return $tasks;
    }

    private function arrayToFile($tasks): void
    {

        unlink($this->filepath);
        foreach ($tasks as $task) {
            file_put_contents($this->filepath, "$task[0]~$task[1]~$task[2]~$task[3]\n", FILE_APPEND);

        }
    }

}







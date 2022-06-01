<?php
class TaskProvider
{
    private array $listTask;

    public function __construct()
    {
        $this->listTask = $_SESSION['tasks'] ?? [];
    }

    public function addTask(Task $task): void 
    {
        $_SESSION['tasks'][] = $task;
        $this->listTask[] = $task;
    }

    public function getUndoneList(): array
    {
        $listTask = [];
        foreach ($this->listTask as $task) {
            if (!$task->getIsDone()) {
                $listTask[] = $task;
            }
        }
        return $listTask;
      
    }
}
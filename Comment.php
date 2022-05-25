<?php
class Comment 
{
    private User $autor;
    private Task $task;
    private string $text;

    public function __construct($autor, $task, $text)
    {
        $this->autor = $autor;
        $this->task = $task;
        $this->text= $text;
    }
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }
    public function setTask($task): void
    {
        $this->task = $task;
    }
    public function setText($text): void
    {
        $this->autor = $text;
    }
    public function getAutor(): User
    {
        return $this->autor;
    }
    public function getTask(): Task
    {
        return $this->task;
    }
    public function getText(): string
    {
        return $this->text;
    }




}   
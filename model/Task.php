<?php
class Task 
{
    private string $description;  // описание
    private bool $isDone; //завершено
    

    public function __construct($description, $isDone = false)
    {
        $this->description = $description;
        $this->isDone = $isDone;

    }

    public function setDescription($description):void 
    {
        $this->description = $description;
    }
   
    public function setIsDone($isDone): void
    {
        $this->isDone = $isDone;
    }
  
    public function getDescription(): string
    {
        return $this->description;
    }
   
    public function getisDone(): bool
    {
        return $this->isDone;
    }
}


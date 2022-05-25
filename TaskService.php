<?php
class TaskService
{
    public static function addComment(User $autor, Task $task, string $text): void
    {
        $comment = new Comment($autor, $task, $text);
        $task->setComment($comment);
    }   
}
<?php
include "Task.php";
include "User.php"; 
include "Comment.php";
include "TaskService.php";

$user = new User('Alex', 'alex@.ru');

$task = new Task($user, 'Сделать домашнюю работу');
$task->setPriorite(2);

TaskService::addComment($user, $task, 'Коммент1');
TaskService::addComment($user, $task, 'Коммент2');

print_r($task);
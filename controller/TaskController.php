<?php
include_once 'model/User.php';
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';

session_start();

$username = null;

if ($_SESSION['username'] === null) {
    header("Location: /");
    die();
    } else {
        $username = $_SESSION['username']->getUserName();    
    }

$taskProvider = new TaskProvider();
if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskProvider->addTask(new Task($_POST['task']));
    header("Location: /?controller=task");
    die();
}    

$listTask = $taskProvider->getUndoneList();

include "view/task.php";
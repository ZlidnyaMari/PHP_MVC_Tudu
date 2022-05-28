<?php
// session_start();
// unset($_SESSION['username']);
$controller = $_GET['controller'] ?? 'index';

// if ($controller === 'index') {
//     require_once "controller/IndexController.php";
// }

// if ($controller === 'task') {
//     require_once "controller/TaskController.php";
// }

// if ($controller === 'security') {
//     require_once "controller/SecurityController.php";
// }

$routes = require 'routes.php';
require_once $routes[$controller];
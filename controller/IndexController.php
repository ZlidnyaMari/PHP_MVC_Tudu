<?php
require_once 'model/User.php';

session_start();

$pageHeader = 'Добро пожаловать';
 
 $username = null;
 if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUserName();
//  } elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
//     $username = $_REQUEST['username'];
//     $_SESSION['username'] = $username;
  }
 

include 'view/home.php';
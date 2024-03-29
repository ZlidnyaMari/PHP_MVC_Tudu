<?php
require_once 'model/UserProvider.php';
require_once 'model/TaskProvider.php';

session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    
  }

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);
   
$error = null;    
if ($user === null) {
    $error = 'Пользователь не найден';
} else {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    }
}

include 'view/security.php';
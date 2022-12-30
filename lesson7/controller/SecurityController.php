<?php

require_once 'model/UserProvider.php';

$pdo = require 'db.php'; // Подключим PDO

session_start();

$user = null;
$error = null;

// if (isset($_SESSION['username'])) {
//     $user = $_SESSION['username'];
//     $username = $user->getName();
// }

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь с указанными учетными данными не найден';
    } else {
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    session_destroy();
    header('location: index.php');
   die();
}


include "view/signin.php";
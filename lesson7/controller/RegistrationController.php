<?php

require_once 'model/UserProvider.php';

$pdo = require 'db.php'; // Подключим PDO

session_start();

$user = null;
$error = null;

if (isset($_SESSION['username'])) {
    header('location: index.php');
    die();
}

if (isset($_POST['name'], $_POST['username'], $_POST['password'])) {
    ['name' => $name, 'username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = new User($username);
    $user->setName($name);
    if ($userProvider->registerUser($user, $password)) {
        $user = $userProvider->getByUsernameAndPassword($username, $password);
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    } else {
    $error = 'Регистрация пользователя незавершена';
    }
}

include "view/registration.php";
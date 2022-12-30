<?php
require_once 'model/UserProvider.php';
require_once 'model/TaskProvider.php';
$pdo = require 'db.php'; // Подключим PDO
$pageHeader = "Задачи";
session_start();

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getName();
    // $_POST['tasks'] = 'unisdone';
    $userlogin = $user->getUsername();
    $taskProvider = new TaskProvider($pdo);
} else {
    header('location: index.php');
}

if (isset($_POST['addtask'])){
    $description = strip_tags($_POST['addtask']);
    if ($description != null) {
        $task = new Task($user);
        $task->setDescription($description);
        $task->setIsDone(0);
        $task->setUserid($user);
        $taskProvider->addTask($task); 
    } 
    header('location:?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->setIsDone($key);
    header('location:?controller=tasks');
    die();
}
$userProvid = new UserProvider($pdo); // это для доступа к списку юзеров
$users = $userProvid->getUsers();     //

$tasks = $taskProvider->getUndoneList($user);
if (isset($_POST['tasks']) && $_POST['tasks'] === 'alltasks') {
    $tasks = $taskProvider->getTasks($user);
}

include "view/tasks.php";
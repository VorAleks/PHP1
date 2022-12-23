<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();

$username = null;

if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
} else {
    header('location: index.php');
}

if (isset($_POST['addtask'])){
    $description = strip_tags($_POST['addtask']);
    if ($description != null) {
        $task=new Task($description);
        TaskProvider::addTask($user, $task); 
    } 
    $_SESSION['username'] = $user;
    header('location:?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $_SESSION['username']->tasks[$key]->isDone = true;
      
}

$tasks = TaskProvider::getUndoneList($user);

// $tasks = [
//     'Погулять с собакой',
//     'Починить компьютер'
// ];

include "view/tasks.php";
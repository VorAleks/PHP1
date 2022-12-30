<?php
require_once 'model/User.php';
session_start();

$pageHeader = 'Добро пожаловать';

$user = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getName();
}

include "view/index.php";
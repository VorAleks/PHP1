<?php
$pdo = require 'db.php';
require_once 'model/UserProvider.php';

$pdo->exec('CREATE TABLE users (
id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
name VARCHAR(150),
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
description VARCHAR(150),
isdone tinyint(1),
userid integer 
)');

// $user = new User('admin');
// $user->setName('Bad Santa');

// $userProvider = new UserProvider($pdo);
// $userProvider->registerUser($user, '123');
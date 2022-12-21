<?php

require_once 'User.php';
require_once 'Task.php';

$user = new User('petrox', 'pet@mail.ru');
$task = new Task($user, 'Homework');

var_dump($task->getDescription());
var_dump($task->getDateCreated());
var_dump($task->getDateUpdate());
// var_dump($task->getIsDone());
var_dump($task->getDateDone());
// var_dump($task->getPriority());

var_dump($task->setPriority(1));
var_dump($task->getPriority());

$task->setDescription('Task update');
var_dump($task->getDescription());
var_dump($task->getDateCreated());
var_dump($task->getDateUpdate());
var_dump($task->getDateDone());
var_dump($task->getIsDone());
$task->markAsDone();
var_dump($task->getDescription());
var_dump($task->getDateCreated());
var_dump($task->getDateUpdate());
var_dump($task->getIsDone());
var_dump($task->getDateDone());
var_dump($task->getPriority());



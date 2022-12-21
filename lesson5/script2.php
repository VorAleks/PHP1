<?php

require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('Petrov', 'Petr@petrov.ru'); // автор задачи
$author = new User('Ivanov', 'Iv@mail.ru'); // автор комментария
$task = new Task($user, 'Homework'); // новая задача
$comment = new Comment($author, $task, 'Zehr gut'); // новый комментарий

var_dump($comment->getAuthor()->getUsername() . ' commentator');
var_dump($task->getOwner()->getUsername() . ' taskowner');
var_dump($comment->getTask()->getDescription() . ' task');
var_dump($comment->getText() . ' comment');

TaskService::addComment($comment->getAuthor(), $comment->getTask(), $comment->getText());

var_dump($task->getComments());



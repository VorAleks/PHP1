<?php

class TaskService{
    public static function addComment(User $user, Task $task, string $text){
        $comment = $user->getUsername() . ':' . $text;
        $task->setComments($comment); 
    }
}
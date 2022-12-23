<?php

class TaskProvider
{
    public static function addTask(User $user, Task $task){
        
        $user->setTasks($task);
    }

    public static function getUndoneList(User $user) {
        $undoneList = [];
        $tasks = $user->getTasks();
        foreach($tasks as $key=>$task){
           if (!$task->getIsDone()) $undoneList[] = [$key, $task->getDescription()];
        }
        return $undoneList;
    }
}
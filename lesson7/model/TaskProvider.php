<?php
require_once 'model/Task.php';

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
    $this->pdo = $pdo;
    }
    
    public function addTask(Task $task): bool
    {
    $statement = $this->pdo->prepare(
    'INSERT INTO tasks (description, isdone, userid) VALUES (:description, :isdone, :userid)');
    return $statement->execute([
    'description' => $task->getDescription(),
    'isdone' => $task->getIsDone(),
    'userid' => $task->getUserid()
    ]);
    }

    public function getTasks(User $user): array 
    {
        $tasks= [];
        $statement = $this->pdo->prepare('SELECT * FROM `tasks` WHERE userid = :userid');
        $statement->execute([
            'userid' => $user->getId()
            ]);
        while ($statement && $task = $statement->fetchObject(Task::class)) {
            $tasks[] = $task;
        }
        return $tasks;
    }

    public function getUndoneList(User $user): array
    {
        $undoneList = [];
        $alltasks = $this->getTasks($user);
        
        foreach($alltasks as $task){
            if ($task->getIsDone() == 0) {
                $undoneList[] = $task;
            }
        }
        return $undoneList;
    }

    public function setIsDone(int $key)
    {
        $query = "UPDATE tasks "
                . "SET isdone = 1 "
                . "WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':id', $key);
        return $statement->execute();
    }
}
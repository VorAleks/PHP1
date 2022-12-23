<?php

class User
{
    private string $username;
    public array $tasks = [];

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
    
    /**
     * Get the value of tasks
     */ 
    public function getTasks()
    {
        return (isset($this->tasks))? $this->tasks : [];
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */ 
    public function setTasks($task)
    {
        $this->tasks[] = $task;

        return $this;
    }
}
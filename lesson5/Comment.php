<?php

class Comment {
    private User $author;
    private Task $task;
    private string $text;
    function __construct(User $author, Task $task, string $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }   

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of task
     */ 
    public function getTask()
    {
            return $this->task;
    }
    
    /**
     * Get the value of text
     */ 
    public function getText()
    {
            return $this->text;
    }
}
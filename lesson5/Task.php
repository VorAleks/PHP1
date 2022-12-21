<?php

class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdate;
    private DateTime $dateDone;
    private ?int $priority;
    private bool $isDone = false;
    private User $owner;
    private array $comments = [];

    
    function __construct(User $owner, string $description = 'Doing something')
    {
        $this->owner = $owner;
        $this->description = $description;
        $this->dateCreated = new DateTime();
    }  

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description): Task
    {
        $this->description .= $description;
        $this->dateUpdate = new DateTime();

        return $this;
    }


    /**
     * Get the value of dateCreated
     */ 
    public function getDateCreated()
    {
        return formatDate($this->dateCreated);
    }

    /**
     * Get the value of dateUpdate
     */ 
    public function getDateUpdate()
    {
      return (isset($this->dateUpdate)) ? formatDate($this->dateUpdate) : 'No updates';
    }

    /**
     * Get the value of dateDone
     */ 
    public function getDateDone()
    {
        return (isset($this->dateDone)) ? formatDate($this->dateDone) : 'Task is not done';
    }

    /**
     * Get the value of priority
     */ 
    public function getPriority()
    {
        return (isset($this->priority)) ? $this->priority : 'Priority is not define';
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */ 
    public function setPriority(?int $priority)
    {
        $this->priority = $priority;

        return 'Priority is ' .$this->priority;
    }

    /**
     * Get the value of isDone
     */ 
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Get the value of user
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    public function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateDone = new DateTime();
        $this->description .= ' Done';
        $this->dateUpdate = new DateTime(); 
    }

    /**
     * Set the value of comments
     *
     * @return  self
     */ 
    public function setComments($comments)
    {
        $this->comments[] = $comments;

        return $this;
    }
    /**
     * Get the value of comments
     */ 
    public function getComments()
    {
        return $this->comments;
    }
}

function formatDate($date, $form ='d:m:Y H:i:s') {
    return $date->format($form);    
}
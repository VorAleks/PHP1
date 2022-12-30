<?php

class Task
{
    private int $id;
    private string $description;
    private int $isdone;
    private int $userid;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIsDone():int
    {
        return $this->isdone;
    }

    public function setIsDone(int $isdone): self
    {
        $this->isdone = $isdone;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserid(): int
    {
        return ($this->userid);
    }

    public function setUserid(User $user): self
    {
        $this->userid = $user->getId();

        return $this;
    }
}
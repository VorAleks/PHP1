<?php

class User {
private string $username;
private string $email;
private ?string $sex;
private ?int $age;
private bool $isActive = true;
private DateTime $dateCreated;

function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->dateCreated = new DateTime();
    }   

    public function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    public function setAge(?int $age): void
    {
        if ($age == null) {
        $this->age = null;
        } elseif ($age > 0 && $age <= 125) {
        $this->age = $age;
        }
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
    return $this->email;
    }
}
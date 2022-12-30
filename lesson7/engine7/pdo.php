<?php

class Student
{
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$pdo = new PDO("sqlite:database.db");

$id = 2;

$statement = $pdo->query('SELECT * FROM `students` WHERE `id` = :id');
$statement->execute([
    'id' => $id
]);
$student = $statement->fetchObject('Student');

print_r($student->getName());


<?php

include 'Person.php';

class Student extends Person
{
    public bool $isEnrolled;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age); // volání rodičovského konstruktoru
        $this->isEnrolled = false;
    }

    public function enroll(): void
    {
        $this->isEnrolled = true;
    }
}
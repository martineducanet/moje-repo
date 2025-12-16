<?php

class Student
{
    public string $name;
    public int $age;
    public bool $isEnrolled;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isEnrolled = false;
    }

    public function enroll(): void
    {
        $this->isEnrolled = true;
    }
}

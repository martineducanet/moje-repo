<?php

class Classroom
{
    public string $name;
    public int $capacity;
    public array $students;

    public function __construct(string $name, int $capacity)
    {
        $this->name = $name;
        $this->capacity = $capacity;
        $this->students = [];
    }

    public function addStudent(Student $student): void
    {
        if (count($this->students) < $this->capacity) {
            $student->enroll();
            $this->students[] = $student;
        }
    }
}

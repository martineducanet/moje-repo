<?php

include 'Person.php';
include 'Student.php';
include 'Classroom.php';

$classroom = new Classroom("3.A", 2);

$student1 = new Student("Jan Novák", 16);
$student2 = new Student("Petra Malá", 15);
$student3 = new Student("Tomáš Dlouhý", 17);

$classroom->addStudent($student1);
$classroom->addStudent($student2);
$classroom->addStudent($student3); // už se nevejde

echo "Třída: {$classroom->name}<br>";
echo "Studenti:<br>";

foreach ($classroom->students as $student) {
    echo "- {$student->name}, věk: {$student->age}, zapsán: ";
    echo $student->isEnrolled ? "ANO" : "NE";
    echo "<br>";
}
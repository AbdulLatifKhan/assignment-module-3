<?php
// Task 4: Multidimensional Array
//
//Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = [
    ["std_1" => ["Math" => "80", "English" => "90", "Science" => "75"]],
    ["std_2" => ["Math" => "90", "English" => "70", "Science" => "78"]],
    ["std_3" => ["Math" => "80", "English" => "90", "Science" => "80"]]
];

function avgGrade($studentGrades)
{
    foreach ($studentGrades as $stdKey => $std) {
        foreach ($std as $stdMKey => $stdMarks) {
            $total = array_sum($stdMarks);
            $average = $total / count($stdMarks);
            echo "Student " . ($stdKey + 1) . " average grade : " . floor($average);
            echo "\n";

        }

    }

}
avgGrade($studentGrades);

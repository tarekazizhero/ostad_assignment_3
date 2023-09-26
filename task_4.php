<?php
$studentGrades = [
    'Rabbil Hasan' => ['Math' => 89, 'English' => 91, 'Science' => 90],
    'Hasin Hayder' => ['Math' => 89, 'English' => 93, 'Science' => 94],
    'md. tarek aziz' => ['Math' => 38, 'English' => 50, 'Science' => 59],
];
function calculateAverage($studentGrades) {
    $averageGrades = [];
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        $averageGrades[$student] = $averageGrade;
    }
    array_walk($averageGrades, function ($value, $key) {
        echo "Average grade=>>>> $key: $value <br>";
    });
}
calculateAverage($studentGrades);
<?php
$studentGrades = array(
    array("Math" => 85, "English" => 90, "Science" => 88),
    array("Math" => 78, "English" => 92, "Science" => 89),
    array("Math" => 91, "English" => 87, "Science" => 76)
);


function calcAverageGrades($gradesArray) {
    foreach ($gradesArray as $index => $student) {

        $mathGrade = $student["Math"];
        $englishGrade = $student["English"];
        $scienceGrade = $student["Science"];
        
        $averageGrade = ($mathGrade + $englishGrade + $scienceGrade) / 3;
        
        echo "Student " . ($index + 1) . " - Math: " . $mathGrade . ", English: " . $englishGrade . ", Science: " . $scienceGrade . "\n";
        echo "Average Grade: " . number_format($averageGrade, 2) . "\n\n";
    }
}

calcAverageGrades($studentGrades);
?>

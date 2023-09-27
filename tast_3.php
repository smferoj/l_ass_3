<?php
$grades = array(85, 92, 78, 88, 95);


function sortDescending($gradesArray) {

    arsort($gradesArray);
    
    print_r($gradesArray);
}

sortDescending($grades);
?>

<?php
$numbers = range(1, 10);


function removeEvenNumbers($inputArray) {

    $resultArray = array_filter($inputArray, function($number) {
        return $number % 2 != 0;
    });

    print_r($resultArray);
}

removeEvenNumbers($numbers);
?>

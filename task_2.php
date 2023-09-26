<?php
$numbers = range(1, 10);
function removeEvenNumbers($numbers) {
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }
    print_r($oddNumbers);
}
removeEvenNumbers($numbers);
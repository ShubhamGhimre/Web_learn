<?php
function isPrime($number) {
    // Check if the number is less than 2
    if ($number < 2) {
        return false;
    }
    // Check for factors from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Not a prime number
        }
    }
    return true; // It's a prime number
}

function printPrimeNumbers($start, $end) {
    echo "Prime numbers from $start to $end are: \n";
    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {
            echo $num . " ";
        }
    }
}

// Display prime numbers from 1 to 100
printPrimeNumbers(1, 100);
?>

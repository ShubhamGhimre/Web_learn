<?php
function fibonacci($n) {
    // Base case: return n if it's 0 or 1
    if ($n <= 1) {
        return $n;
    }
    // Recursive case: sum of the previous two Fibonacci numbers
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Function to print the Fibonacci series up to a given number
function printFibonacciSeries($count) {
    for ($i = 0; $i < $count; $i++) {
        echo fibonacci($i) . " ";
    }
}

// Example usage
$count = 10; // Change this value to print more or fewer terms
printFibonacciSeries($count);
?>

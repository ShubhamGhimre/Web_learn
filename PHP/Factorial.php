<?php
// Function to calculate factorial
function factorial($number) {
    // If the number is less than 0, factorial is not defined
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    }
    // If the number is 0 or 1, factorial is 1
    if ($number === 0 || $number === 1) {
        return 1;
    }
    
    $result = 1;
    // Loop to calculate factorial
    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Get the number from user input (e.g., form submission)
$number = 5; // You can change this to any non-negative integer

// Call the factorial function and display the result
echo "The factorial of $number is: " . factorial($number);
?>
    
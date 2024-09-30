<!-- Defining a Function -->
<!-- syntax -->

<!-- function functionName($parameter1, $parameter2) {
    // code to be executed
    return $result; // optional
} -->

<?php
function greet($name)
{
    return "Hello, " . $name . "!";
}

echo greet("Shubham"); // Outputs: Hello, Shubham!

?>

<!-- function with parameters -->
<!-- syntax -->
<!--
function functionName($parameter1, $parameter2) {
    // code to be executed
    return $result; // optional
} -->

<?php

function add($a, $b)
{
    return $a + $b;
}

echo add(5, 10); // Outputs: 15
// default parameter value
function multiply($a, $b = 2)
{
    return $a * $b;
}

echo multiply(5); // Outputs: 10 (5 * 2)

// function with return type
function square($num)
{
    return $num * $num;
}

// variable scope

$globalVar = 10;

function testScope() {
    global $globalVar;
    $globalVar += 5; // Modifies the global variable
}

testScope();
echo $globalVar; // Outputs: 15

// Anonymous function
$sayHello = function($name) {
    return "Hello, " . $name . "!";
};

echo $sayHello("Shubham"); // Outputs: Hello, Shubham!


$result = square(4);
echo $result; // Outputs: 16

// recursive function
function factorial($n)
{
    if ($n === 0) {
        return 1; // Base case
    }
    return $n * factorial($n - 1); // Recursive call
}

echo factorial(5); // Outputs: 120 (5!)


// type Decleration
function divide(int $a, int $b): float
{
    return $a / $b;
}

echo divide(10, 2); // Outputs: 5

?>
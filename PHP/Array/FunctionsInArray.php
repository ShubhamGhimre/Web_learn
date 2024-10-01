<!-- PHP provides a rich set of functions to work with arrays, which are essential for storing multiple values in a single variable. Arrays in PHP can be indexed or associative, and the array functions help in performing various operations like adding, removing, sorting, and manipulating elements. -->

<!-- 1. creating Arrays -->
<?php
// Indexed array
$colors = array("Red", "Green", "Blue");

$arr = [10, 20, 30]; // Short syntax for indexed array

// Associative array
$person = array("name" => "John", "age" => 30, "city" => "New York");

// Multidimensional array
$products = array(
    array("name" => "Laptop", "price" => 1000),
    array("name" => "Mobile", "price" => 500)
);

// Adding Elements in An Array
array_push($colors, "Yellow"); 
// Adds "Yellow" at the end of the array
// ["Red", "Green", "Blue", "Yellow"]

// removing elements from an array
array_pop($colors);  // Removes the last element from the array
// ["Red", "Green", "Blue"]

// array unshift
array_unshift($colors, "Yellow"); 
// Adds "Yellow" at the beginning of the array
// ["Yellow", "Red", "Green", "Blue"]

// array shift
array_shift($colors); // Removes the first element from the array
// ["Red", "Green", "Blue"]

// Accessing and Manupulationg Array Elements

echo $colors[0]; // Outputs: Red
echo $person["name"]; // Outputs: John
echo $products[0]["name"]; // Outputs: Laptop
echo $products[1]["name"]; // Outputs: Mobile

// count() function return the number of elements in an array

echo count($colors); // Outputs: 3

// Array merge merges two or more arrays into a single array
$arr1 = [1, 2];
$arr2 = [3, 4];
$merged = array_merge($arr1, $arr2);
// $merged is [1, 2, 3, 4]

// arrayCombine() function creates an array by using one array for keys and another for its values

$keys = ['name', 'age'];
$values = ['Shubham', 24];
$combined = array_combine($keys, $values);
// $combined is ['name' => 'Shubham', 'age' => 24]

// searching an Array

// in_array() function checks if a value exists in an array

$arr = [1, 2, 3];
if (in_array(2, $arr)) {
    echo "Found!";
}


// array_search() function returns the key of a value if it exists in an array

$arr = [1, 2, 3];
$key = array_search(2, $arr);
// $key is 1


// array_key_exists() function checks if a key exists in an array

$arr = ['name' => 'Shubham', 'age' => 24];
if (array_key_exists('name', $arr)) {
    echo "Key exists!";
}


// Sorting an Array

// sort() function sorts an indexed array in ascending order
$arr = [3, 1, 2];
sort($arr);
// $arr is now [1, 2, 3]

// rsort() function sorts an indexed array in descending order

$arr = [1, 3, 2];
rsort($arr);
// $arr is now [3, 2, 1]

// asort() function sorts an associative array in ascending order based on values
$arr = ['a' => 3, 'b' => 1, 'c' => 2];
asort($arr);
// $arr is now ['b' => 1, 'c' => 2, 'a' => 3]

// ksort() function sorts an associative array in ascending order based on keys
$arr = ['b' => 1, 'a' => 2, 'c' => 3];
ksort($arr);
// $arr is now ['a' => 2, 'b' => 1, 'c' => 3]




// Array Filtering and Mapping

// array_filter() function filters elements of an array using a callback function
$arr = [1, 2, 3, 4];
$filtered = array_filter($arr, function($value) {
    return $value % 2 === 0;
});
// $filtered is [2, 4]

// array_map() function applies a callback function to each element of an array
$arr = [1, 2, 3];
$mapped = array_map(function($value) {
    return $value * 2;
}, $arr);
// $mapped is [2, 4, 6]




?>
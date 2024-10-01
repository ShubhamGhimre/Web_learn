<!-- strlen() -->
<!-- returns the length of a string. -->

<?php
$string = "Hello, World!";
echo strlen($string); // Outputs: 13 whitespace is also counted
?>

<!-- strtoupper() and strtolower() -->
<!-- strtoupper() converts a string to uppercase, and strtolower() converts a string to lowercase. -->

<?php
$string = "Hello, World!";
echo strtoupper($string); // Outputs: HELLO, WORLD!
echo strtolower($string); // Outputs: hello, world!

?>

<!-- ucfirst() and lcfirst() -->
<!-- 
    ucfirst(): 
        Capitalizes the first character of a string. 
    lcfirst(): 
        Converts the first character of a string to lowercase.
 -->
<?php
$string = "hello, World!";
echo ucfirst($string); // Outputs: Hello, World!
echo lcfirst("Hello, World!"); // Outputs: hello, World!  
?>

<!-- ucwords() -->
<!-- Capitalizes the first letter of each word in a string. -->

<?php
$string = "hello world";
echo ucwords($string); // Outputs: Hello World

?>

<!-- substr() -->
<!-- Returns a part of a string (substring). -->
<?php
$string = "Hello, World!";
echo substr($string, 7, 5); // Outputs: World
?>

<!-- str_replace() -->
<!-- Replaces all occurrences of a search string with a replacement string. -->
<?php
$string = "Hello, World!";
echo str_replace("World", "PHP", $string); // Outputs: Hello, PHP!
?>

<!-- strrev() -->
<!-- Reverses a string. -->
<?php
$string = "Hello, World!";
echo strrev($string); // Outputs: !dlroW ,olleH
?>

<!-- strcmp() and strcasecmp() -->
<!-- strcmp(): 
        Compares two strings, case-sensitive. 
    -->
<!-- strcasecmp(): 
        Compares two strings, case-insensitive. 
    -->
<?php
echo strcmp("Hello", "hello");  // Outputs: -1 (case-sensitive)
echo strcasecmp("Hello", "hello"); // Outputs: 0 (case-insensitive)

?>


<!-- 
strlen() :
    Returns the length of a string.
strtoupper() :
    Converts a string to uppercase.
strtolower() :
    Converts a string to lowercase.
ucfirst() :
    Capitalizes the first character of a string.
ucwords() :
    Capitalizes the first character of each word in a string.
substr() :
    Returns a part of a string.
strpos() :
    Finds the first occurrence of a substring.
str_replace() :
    Replaces all occurrences of a search string with a replacement string.
str_repeat() :
    Repeats a string a specified number of times.
trim() :
    Removes whitespace (or other characters) from both sides of a string.
explode() :
    Splits a string into an array.
implode() :
    Joins array elements into a string.
strrev() :
    Reverses a string.
addslashes() :
    Escapes special characters with backslashes.
htmlspecialchars() :
    Converts special HTML characters to HTML entities.
-->
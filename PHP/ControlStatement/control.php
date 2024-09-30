<!-- if Statement -->
<!-- syntax -->
<!-- 
if (condition) {
        // code to be executed if condition is true
} -->
<?php
$number = 10;

if ($number > 0) {
    echo "The number is positive.";
}

?>

<!-- if...else Statement -->
<!-- syntax -->
<!--
if (condition) {
    // code to be executed if condition is true
} else {
    // code to be executed if condition is false
} -->

<?php
$number = -10;

if ($number > 0) {
    echo "The number is positive.";
} else {
    echo "The number is negative.";
}
?>
<!-- else if Statement -->
<!-- syntax -->
<!--
if (condition1) {
    // code to be executed if condition1 is true
} elseif (condition2) {
    // code to be executed if condition2 is true
} else {
    // code to be executed if both condition1 and condition2 are false
} -->

<?php
$number = 0;

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is 0.";
}
?>

<!-- switch statement -->
<!-- syntax -->
<!--
witch (variable) {
    case value1:
        // code to be executed if variable == value1
        break;
    case value2:
        // code to be executed if variable == value2
        break;
    default:
        // code to be executed if variable doesn't match any value
}
-->
<?php
$color = "red";

switch ($color) {
    case "red":
        echo "You chose red.";
        break;
    case "blue":
        echo "You chose blue.";
        break;
    default:
        echo "You chose a different color.";
}
?>

<!-- for Loop -->
<!-- syntax -->
<!-- for (initialization; condition; increment) {
    // code to be executed
} -->

<?php
for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}
?>

<!-- while Loop -->
<!-- syntax -->
<!-- while (condition) {
    // code to be executed
} -->

<?php
$i = 0;
while ($i < 5) {
    echo "The number is: $i\n";
    $i++;
}
?>

<!-- do...while Loop -->
<!-- syntax -->
<!-- do {
    // code to be executed
} while (condition); -->

<?php
$i = 0;
do {
    echo "The number is: $i\n";
    $i++;
} while ($i < 5);
?>

<!-- foreach Loop -->
<!-- syntax -->
<!-- foreach ($array as $value) {
    // code to be executed
} -->

<?php
$colors = array("red", "green", "blue");

foreach ($colors as $color) {
    echo "Color: $color\n";
}

?>
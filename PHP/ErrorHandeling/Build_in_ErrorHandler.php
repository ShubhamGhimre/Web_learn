<!-- error_reporting() -->
<!-- error_reporting() function is used to set the error reporting level in PHP. -->
<?php
error_reporting(E_ALL); // Report all errors and warnings
error_reporting(0);     // Disable all error reporting

?>

<!-- set_error_handler()  -->
<!-- set_error_handler() function is used to set a user-defined error handler function. -->
<?php
function customError($errno, $errstr, $errfile, $errline)
{
    echo "Error [$errno]: $errstr in $errfile on line $errline<br>";
    // You can also log the error or send an email notification
}

set_error_handler("customError");

?>

<!-- trigger_error() -->
<!-- trigger_error() function is used to trigger a user error condition. -->
<?php
if ($someCondition == false) {
    trigger_error("Custom error message", E_USER_WARNING);
}
?>

<!-- error_get_last() -->
<!-- error_get_last() function is used to get the last error occurred in the script. -->
<?php
$error = error_get_last();
if ($error) {
    echo "Last error: " . $error['message'];
}
?>
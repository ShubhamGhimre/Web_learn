<!-- try catch  -->
<!-- the try block is used to test a block of code for errors. and catch block throws the error -->
<?php
try {
    $num = 1 / 0;
    echo "This line will not be executed";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}
?>

<!-- finally block -->
<!-- The finally block is used to execute the code after try and catch blocks, regardless of the result. -->
<?php
try {
    // Code that may throw an exception
} catch (Exception $e) {
    // Code to handle exception
} finally {
    // Code that always executes
}

?>

<!-- custom Exception Classses -->
<!-- You can create your own exception classes by extending the built-in Exception class. -->
<?php
class MyCustomException extends Exception
{
    public function errorMessage()
    {
        return "Custom error message: " . $this->getMessage();
    }
}

try {
    throw new MyCustomException("This is a custom exception.");
} catch (MyCustomException $e) {
    echo $e->errorMessage();
}

?>
<!-- public Access modifier
In public access modifier, the properties and methods of a class are accessible from anywhere in the script. It is the most permissive access modifier. The properties and methods declared as public can be accessed from outside the class as well as from the child classes. -->

<!-- syntax -->
<!-- 
    class MyClass {
        public $name = "shubham"; // public property
        // this variable can be accessed from anywhere
    } 
-->
<!-- Example: -->

<?php
class MyClass{
    public $name = "shubham"; // public property
    public function myPublicFunction()
    {
        echo "Hello , " . $this->name;
    }
}
$obj = new MyClass();
echo $obj->name; // shubham
$obj->myPublicFunction(); // Hello , shubham

?>
 <!-- Private Access modifier -->
 <!-- In private access modifier, the properties and methods of a class are accessible only within the class. The properties and methods declared as private can be accessed only from within the class. The private access modifier is the most restrictive access modifier. -->
 <!-- syntax -->
 <!-- 
    class MyClass {
        private $name = "shubham"; // public property
    } 
 -->
 <!-- Example: -->

 <?php
    class MyClass
    {
        private $secret = "This is private";  // Private property

        private function revealSecret()
        {
            return $this->secret;
        }

        public function showSecret()
        {
            return $this->revealSecret();  // Accessing private method within the same class
        }
    }

    $obj = new MyClass();
    // echo $obj->secret;           // Error: Cannot access private property
    // echo $obj->revealSecret();   // Error: Cannot access private method
    echo $obj->showSecret();        // Accessing private method via public method


?>
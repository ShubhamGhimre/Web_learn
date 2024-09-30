<!-- protected access modifier example in PHP -->
<!-- In protected access modifier, the properties and methods of a class are accessible within the class and by classes derived from that class. The properties and methods declared as protected can be accessed only within the class itself and by inherited and parent classes. -->
<!-- syntax -->
<!-- 
        class MyClass {
            protected $name = "shubham"; // protected property
        }
-->
<!-- Example: -->

<?php
    class ParentClass {
        protected $name = "Shubham";  // Protected property
    
        protected function sayHello() {
            return "Hello, " . $this->name;
        }
    }
    
    class ChildClass extends ParentClass {
        public function greet() {
            return $this->sayHello();  // Accessing protected method within subclass
        }
    }
    
    $obj = new ChildClass();
    // echo $obj->name;            // Error: Cannot access protected property
    echo $obj->greet();            // Accessing protected method through public method in child class
    
?>
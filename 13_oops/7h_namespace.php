<?php
// namespace MyProject;

// class MyClass {
//     public function myFunction() {
//         echo "Hello from MyClass!";
//     }
// }

// $myClass = new MyClass();
// $myClass->myFunction();   // output: Hello from MyClass!


namespace Store\Model;

class Customer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


// Using Namespaces
// You can use namespaced classes, functions, or constants by referring to their fully qualified name, or by importing them with the use keyword.

// Fully Qualified Name
// require 'MyClass.php';

// $object = new \MyProject\MyClass();
// $object->myFunction();


// Importing with "use" Keyword
// require 'MyClass.php';

// use MyProject\MyClass;

// $object = new MyClass();
// $object->myFunction();



// Namespaces can also be nested:

// namespace MyProject\SubNamespace;

// class MySubClass {
//     public function mySubFunction() {
//         echo "Hello from MySubClass!";
//     }
// }




// Group Use Declarations

// use MyProject\SubNamespace\{ClassA, ClassB, ClassC};

// $a = new ClassA();
// $b = new ClassB();
// $c = new ClassC();



// Global Namespace
// If you need to refer to a class, function, or constant in the global namespace, you can use the leading backslash (\):

// namespace MyProject;

// class MyClass {
//     public function myFunction() {
//         $date = new \DateTime(); // Global namespace DateTime class
//         echo $date->format('Y-m-d H:i:s');
//     }
// }





// Two classes with the same name in different namespaces
// require 'src/Utils/Logger.php';
// require 'src/Database/Logger.php';

// use Store\Utils\Logger;
// use Store\Database\Logger as DatabaseLogger;

// $loggers = [
//     new Logger(),          // This refers to Store\Utils\Logger
//     new DatabaseLogger()   // This refers to Store\Database\Logger
// ];

// foreach ($loggers as $logger) {
//     $logger->log('This is a log message.');
// }

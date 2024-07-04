<?php

// Class: A class is a blueprint for creating objects (a particular data structure), providing initial values for state (member variables or attributes), and implementations of behavior (member functions or methods).

class Car {
    // Properties
    public $make;
    public $model;
    
    // Methods
    public function drive() {
        echo "Driving";
    }
}

// Object: An object is a specific instance of a class, where the object can be a combination of variables, functions, and data structures.

$car = new Car();
$car->make = "Toyota";
$car->model = "Corolla";

echo $car->make . " " . $car->model . "<br>";
$car->drive(); // Outputs: Driving



// property: A property is a variable that is associated with a class and is used to store data.
// class Car {
//     public $make;
//     public $model;
// }

// method: A method is a function that is associated with a class and is used to define the behavior of the class.
// class Car {
//     public function drive() {
//         echo "Driving";
//     }
// }


// constructor: A constructor is a special method that is called when an object is created. It is used to initialize the object's properties.
// class Car {
//     public $make;
//     public $model;
    
//     public function __construct($make, $model) {
//         $this->make = $make;
//         $this->model = $model;
//     }
// }

// $car = new Car("Toyota", "Corolla");

// echo $car->make . " " . $car->model; // Outputs: Toyota Corolla


// destructor: A destructor is a special method that is called when an object is destroyed. It is used to clean up resources and perform any necessary cleanup tasks.
// class Car {
//     public function __destruct() {
//         echo "Object is being destroyed";
//     }
// }

// inheritance: Inheritance is a mechanism in which a new class inherits properties and methods from an existing class. The existing class is called the parent class, and the new class is called the child class.
// class Vehicle {
//     public $make;
    
//     public function drive() {
//         echo "Driving";
//     }
// }

// class Car extends Vehicle {
//     public $model;
// }

// $car = new Car();
// $car->make = "Toyota";
// $car->model = "Corolla";
// $car->drive(); // Inherited method
// echo "<br>";
// echo $car->make . " " . $car->model; // Outputs: Toyota Corolla






// encapsulation: Encapsulation is the bundling of data (properties) and methods (functions) that operate on the data into a single unit (class). It is used to restrict access to the data and methods, and to prevent unintended changes.
// class Car {
//     private $make;
//     private $model;
    
//     public function setMake($make) {
//         $this->make = $make;
//     }
    
//     public function getMake() {
//         return $this->make;
//     }
// }


// // polymorphism: Polymorphism is the ability of an object to take on multiple forms. In object-oriented programming, polymorphism allows objects of different classes to be treated as objects of a common superclass.
// class Vehicle {
//     public function drive() {
//         echo "Driving vehicle";
//     }
// }

// class Car extends Vehicle {
//     public function drive() {
//         echo "Driving car";
//     }
// }

// class Bike extends Vehicle {
//     public function drive() {
//         echo "Riding bike";
//     }
// }

// function testDrive(Vehicle $vehicle) {
//     // This line demonstrates polymorphism. The $vehicle parameter can be an instance of Vehicle or any subclass of Vehicle.
//     // The appropriate drive method is called based on the actual object type passed at runtime.
//     $vehicle->drive();
// }

// $car = new Car();
// $bike = new Bike();

// testDrive($car); // Outputs: Driving car
// testDrive($bike); // Outputs: Riding bike


// // obstruction: Abstraction is the process of hiding the implementation details of a class and only showing the essential features of the class. It is used to simplify complex systems and improve code readability.
// abstract class Vehicle {
//     abstract public function drive();
// }

// class Car extends Vehicle {
//     public function drive() {
//         echo "Driving car";
//     }
// }

// $car = new Car();
// $car->drive();


// interface: An interface is a contract that defines a set of methods that a class must implement. It is used to define a common set of methods that can be implemented by multiple classes.
// interface Drivable {
//     public function drive();
// }

// class Car implements Drivable {
//     public function drive() {
//         echo "Driving car";
//     }
// }

// $car = new Car();
// $car->drive(); // Outputs: Driving car



// static: A static property or method is associated with the class itself, rather than with an instance of the class. It can be accessed without creating an object of the class.
// class Car {
//     public static $count = 0;
    
//     public static function incrementCount() {
//         self::$count++;
//     }
// }

// Car::incrementCount();
// echo Car::$count; // Outputs: 1





?>
<?php

// Constructor: 
// A constructor is a special method that is called when an object is created. 
// It is used to initialize the object's properties.

// class Car {
//     public $make;
//     public $model;
    
//     // constructor
//     public function __construct() {
//         echo "Constructor called <br>";
//     }
// }

// $car1 = new Car(); // Output: Constructor called
// $car2 = new Car(); // Output: Constructor called

// $car1->make = "Toyota";
// $car1->model = "Corolla";

// $car2->make = "Honda";
// $car2->model = "Civic";

// echo "Car 1: " . $car1->make . " " . $car1->model . "<br>";
// echo "Car 2: " . $car2->make . " " . $car2->model . "<br>";






// class car {
//     public $make;
//     public $model;
    
//     // non-parameterized constructor
//     // used to initialize the object's properties
//     public function __construct() {
//         $this->model = "Corolla";

//         echo "Model: " . $this->model . "<br>";
//     }

// }

// $car1 = new car();




class car {
    public $make;
    public $model;
    
    // parameterized constructor
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // get info
    public function getInfo() {
        return "Car: " . $this->make . " " . $this->model;
    }
}

$car1 = new car("Toyota", "Corolla");
$car2 = new car("Honda", "Civic");

echo $car1->getInfo() . "<br>";
echo $car2->getInfo() . "<br>";


?>
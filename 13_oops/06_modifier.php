<?php
// public access modifier
// When you place the public keyword in front of a property or a method, the property or method becomes public. It means that you can access the property and method from both inside and outside of the class.

// example
// class Customer
// {
// 	public $name;

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// $customer = new Customer();
// $customer->name = 'Bob';
// echo $customer->getName(); // Bob


// The private access modifier
// To prevent access to properties and methods from outside of the class, you use the private access modifier.


// example
// class Customer
// {
// 	private $name;

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// // If you attempt to access the $name property from the outside of the class, you’ll get an error. 
// $customer = new Customer();
// $customer->name = 'Bob';

// output
// Error:
// Fatal error: Uncaught Error: Cannot access private property Customer::$name





// So how do you access a private property?

// To manipulate the value of a private property, you need to define a public method and use the method to manage a private property.

// Typically, you need to define two kinds of public methods to manage a private property:
    // A getter returns the value of the private property.
    // A setter sets a new value for the private property.

// By convention, the getter and setter have the following name:
    // getPropertyName
    // setPropertyName

// Example:

// class Customer
// {
// 	private $name;

// 	public function setName($name)
// 	{
// 		$this->name = $name;
// 	}

// 	public function getName()
// 	{
// 		return $this->name;
// 	}
// }

// // And the following shows how to use the setName() and getName() methods to set and get the value of the $name property:
// $customer = new Customer();

// $customer->setName('Bob');
// echo $customer->getName();

// // output
// // Bob



/*
Why do you need private property?
It may be faster to use the public access modifier for properties instead of using a private property with the public getter/setter.

However, by using the private property, you can prevent direct access to the property from the outside of the class.

In addition, the getter/setter methods ensure that the only way to access the property is through these methods. And the getter/setter methods can provide custom logic to manipulate the property value.

For example, if you want the value of the $name property to be not blank, you can add the validation logic to the setName() method as follows:

*/

class Customer
{
	private $name;

	public function setName($name)
	{
		$name = trim($name);

		if ($name == '') {
			return false;
		}
		$this->name = $name;

                return true;

	}

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();

$customer->setName(' Bob ');
echo $customer->getName();

// output
// Bob


// In the setName() method:

// First, remove all leading and trailing whitespace using the trim() function.
// Second, return false if the $name argument is blank. Otherwise, assign it to the $name property and return true.
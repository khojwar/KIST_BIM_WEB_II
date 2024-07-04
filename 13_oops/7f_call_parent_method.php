
<?php

// When you override a method, you will have two versions of the same method: one in the parent class and the other in the child class.

// If you call the method of the parent class in the method in the child class, you cannot use $this keyword.

// class Android extends Robot
// {
// 	public function greet()
// 	{
// 		$greeting = $this->greet();
// 		return $greeting . ' from Android.';
// 	}
// }

// $android = new Android();
// echo $android->greet();
// Fatal error: Uncaught Error: Call to undefined method Android::greet() in ... on line 7
// The error occurs because the greet() method in the Android class calls itself.
// The $this->greet() will call itself indefinitely.




// To call the greet() method of the Robot class, you need to use the parent with the scope resolution operator (::) like the following:

class Android extends Robot
{
	public function greet()
	{
		$greeting = parent::greet();
		return $greeting . ' from Android.';
	}
}

$android = new Android();
echo $android->greet(); // Hello from Android.

// In this example, the greet() method in the Andoird class calls the greet() method of the Robot class. It concatenates the string returned by the greet() method of the Robot method with a literal string ' from Android.' and returns the concatenated string.





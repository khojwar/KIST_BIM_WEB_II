
// Sometimes, you want to completely replace the method’s behavior of the parent class with a new one. In this case, you need to override the method of the parent class.
// To override a method, you redefine the method in the parent class again in the child class but use a different logic.
<?php
class Robot
{
	public function greet()
	{
		return 'Hello!';
	}
}

class Android extends Robot
{
	public function greet()
	{
		return 'Hi';
	}
}

$robot = new Robot();

echo $robot->greet(); // Hello

$android = new Android();
echo $android->greet(); // Hi!


// How it works

// First, invoke the greet() method of an instance of the Robot class, the greet() method in the Robot class executes.
// Second, call the greet() method of an instance of the Android class, the greet() method in the Android class executes.
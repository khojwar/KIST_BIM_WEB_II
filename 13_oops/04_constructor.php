<?php
// PHP allows you to declare a constructor method for a class with the name __construct() as follows:
// class ClassName
// {
// 	function __construct()
// 	{
// 		// implementation
// 	}
// }

// When you create an instance of the class, PHP automatically calls the constructor method:
// $object = new ClassName()


// Example:
// The following example defines a constructor for the BankAccount class. The constructor initializes the $accountNumber and $balance properties:
class BankAccount
{
	private $accountNumber;
	private $balance;

	public function __construct($accountNumber, $balance)
	{
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}	
}

// Since the constructor has two parameters, you need to pass the corresponding arguments when creating a BankAccount object:
$account = new BankAccount(1, 100);

// The following example demonstrates how to access the properties of the BankAccount object:
echo $account->accountNumber; // 1
echo $account->balance; // 100

// In this example, PHP automatically calls the __construct() of the BankAccount class. Hence, it assigns the $accountNumber and $balance arguments to the $accountNumber and $balance properties of the object.






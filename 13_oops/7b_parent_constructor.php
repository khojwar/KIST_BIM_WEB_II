<?php
// Child class doesn’t have a constructor

// The following adds a constructor to the BankAccount class, which accepts the $balance parameter. The constructor assigns the $balance argument to the $balance property:

class BankAccount
{
	private $balance;

	public function __construct($balance)
	{
		$this->balance = $balance;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}

		return $this;
	}
}

// The SavingAccount class remains the same and doesn’t include its own constructor:

class SavingAccount extends BankAccount
{
	private $interestRate;

	public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

	public function addInterest()
	{
		// calculate interest
		$interest = $this->interestRate * $this->getBalance();
		// deposit interest to the balance
		$this->deposit($interest);
	}
}

// When you create a new instance of the SavingAccount, PHP will call the constructor of the SavingAccount class. However, PHP cannot find the constructor in the SavingAccount class. Therefore, it continues to search for the constructor of the parent class of the SavingAccount class, which is the BankAccount class. And it invokes the constructor of the BankAccount class.



// If you don’t pass an argument to the constructor of the SavingAccount class, you’ll get an error:
// $account = new SavingAccount();     // Fatal error: Uncaught ArgumentCountError: Too few arguments to function BankAccount::__construct(), 0 passed in ... on line 5 and exactly 1 expected in ...



// But if you pass an argument to the constructor, it’ll work perfectly:
$account = new SavingAccount(100);





?>
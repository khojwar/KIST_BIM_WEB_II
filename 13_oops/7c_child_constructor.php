<?php
// A child class can have its own constructor. For example, you can add a constructor to the SavingAccount class as follows:

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


class SavingAccount extends BankAccount
{
	private $interestRate;

	public function __construct($interestRate)
	{
		$this->interestRate = $interestRate;
	}

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


// The SavingAccount class has a constructor that initializes the interestRate property.

// When a child class has its own constructor, the constructor in the child class will not call the constructor of its parent class automatically.

// For example, the following creates a new instance of the SavingAccount class and initializes the $interestRate property to the value 0.05


$account = new SavingAccount(0.05);
$account->deposit(100);
$account->addInterest();
echo $account->getBalance();    // output: 105



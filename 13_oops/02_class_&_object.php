<?php
// class 
// syntax:

// class ClassName
// {
//     //...
// }

// Example 1
class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
	}

	public function withdraw($amount)
	{
		if ($amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
                return false;

	}
}

// Object
$account = new BankAccount();
$account->accountNumber = 123456;
$account->balance = 1000;

$account->deposit(500);
$account->withdraw(200);

echo $account->balance; // Output: 1300




?>
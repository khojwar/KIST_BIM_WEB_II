<?php
// Suppose that you need to define a new CheckingAccount class that extends the BankAccount class. The following defines the BankAccount class:
class BankAccount
{
	private $balance;

	public function __construct($amount)
	{
		$this->balance = $amount;
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

	public function withdraw($amount)
	{
		if ($amount > 0 && $amount <= $this->balance) {
			$this->balance -= $amount;
			return true;
		}
		return false;
	}
}

// The withdraw() method checks if the withdrawal amount is greater than zero and less than or equal to the current balance before deducting it from the balance.

// Second, define the CheckingAccount class that inherits the BankAccount class. The CheckingAccount class also has the withdraw() method that overrides the withdraw() method of the BankAccount class:


class CheckingAccount extends BankAccount
{
	private $minBalance;

	public function __construct($amount, $minBalance)
	{
		if ($amount > 0 && $amount >= $minBalance) {
			parent::__construct($amount);
			$this->minBalance = $minBalance;
		} else {
			throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
		}
	}

	public function withdraw($amount)
	{
		$canWithdraw = $amount > 0 &&
					   $this->getBalance() - $amount > $this->minBalance;

		if ($canWithdraw) {
			parent::withdraw($amount);

			return true;
		}

		return false;
	}
}



// The withdraw() method in the CheckingAccount class checks the withdrawal amount against the minimum balance before deducting it.



